<?php

namespace euro_hms\Api\Repositories;

use euro_hms\Models\User;
use euro_hms\Models\Role;
use euro_hms\Models\UserFavourites;
use euro_hms\Models\Settings;
use DB;
use Hash;

class UserRepository {

    public function __construct()
    {
      $this->userImagePath = getenv('S3_URL').'/assets/img/users/';
    }
    public function getAllUsers()
    {
        return User::all();
    }
    public function createUserFavourites($userFavouriteData)
    {
      return UserFavourites::create($userFavouriteData);
    }
    public function getUserDetailsByID($userID) {
        return User::find($userID);
    }
    public function chkUserExist($searchData) {
        return User::where('mobile_no',$searchData['mobileNo'])->orWhere('email',$searchData['email'])->get();
    }

    public function getUserDetails()
    {
        $data = DB::table('users')->get();
        // dd($data->toArray());
        return $data;
    }

    

    public function create($data)
    {
        // dd($data);
        $userData = [
        'first_name' => $data['first_name'],
        'last_name' => $data['last_name'],
        'user_type'=>$data['user_type'],
        'department'=>$data['department'],
        'email' => $data['email'],
        'address' => $data['address'],
        'password' => $data['password'],
        'mobile_no'=>$data['mobile_no'],
        'token' => $data['token'],
        'is_verified' => 1,
        'is_active' =>  1,
        //'user_image'=>(isset($data['user_image']) && $data['user_image']!='') ?  $data['user_image'] : ''
        ];
        $user = User::create($userData);
        $user->attachRole(1);
        return ['status'=>'created','user'=>$user];
        
    }
        

    
    public function delete($id)
    {
        return User::find($id)->delete();
    }
    public function changeUserStatus($data)
    {
        $id = $data['userData']['id'];
        $status = ($data['userData']['status'] == 1) ? '0' : '1';
        return User::where('id',$id)->update(['is_active'=>$status]);
    }
    public function edit($userId)
    {
       $user=DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->select("users.id as id", "users.email as email",
               DB::raw('IF(users.user_image is not null,CONCAT("'.$this->userImagePath.'", users.user_image),"" ) as image'),
             "users.organisation as organisation", "people.first_name as name", "people.last_name as surname", "role_user.role_id as userType")
            ->where("users.id", "=", $userId)
            ->first();

        $defaultFavouriteTournament = DB::table('users_favourite')->where('user_id', $user->id)->where('is_default', 1)->first();

        $user->tournament_id = $defaultFavouriteTournament ? $defaultFavouriteTournament->tournament_id : null;

        return json_encode($user);
    }

    public function update($data, $userId)
    {
        return User::where('id', $userId)->update($data);
    }

    public function getUserById($userId)
    {
        return User::with(["personDetail", "roles"])->findOrFail($userId);
    }

    public function createPassword($usersDetail)
    {
        $mobileUserRoleId = Role::where('slug', 'mobile.user')->first()->id;
        $key = $usersDetail['key'];
        $password = (isset($usersDetail['password']) && $usersDetail['password']!='') ? $usersDetail['password'] : '';
        $usersPassword = User::where('token', $key)->first();
        // echo "<pre>";print_r($usersPassword);echo "</pre>";exit;
        $users = User::where("id", $usersPassword->id)->first();
        $users->is_verified = 1;
        $users->is_active = 1;
        $users->token = '';
        if($password != '')
          $users->password = Hash::make($password);
        // $users->password = $password;
        $user =  $users->save();
        return ($users->roles[0]->id == $mobileUserRoleId) ? 'Mobile' : 'Desktop';

    }
    public function createUserSettings($userData)
    {
      return Settings::create($userData);
    }
    public function getSetting($userData)
    {
      $userId = $userData['user_id'];
      return Settings::where('user_id','=',$userId)->get();
      //return Settings::with(['user'])->where('user_id','=',$userId)->get();
    }
    public function postSetting($userData)
    {
        
      \Log::info($userData);
      $userId= $userData['userId'];
      $updatedValue = ['value' => json_encode($userData['userSettings'])];

      //$updatedValue = array('value'=>$userData['userSettings']);
      return Settings::where('user_id', $userId)->update($updatedValue);
    }
    public function setFCM($data) {
      $email = $data['email'];
      $fcmId = $data['fcm_id'];
      $updatedValue = ['fcm_id'=>$fcmId];
      return User::where('email',$email)->update($updatedValue);
    }

    public function changeTournamentPermission($data) {
      $user = User::find($data['user']['id']);
      $user->tournaments()->sync([]);
      $user->tournaments()->attach($data['tournaments']);
      return true;
    } 

    public function getUserTournaments($id) {
      $user = User::find($id);
      return $user->tournaments()->pluck('id');
    }
}
