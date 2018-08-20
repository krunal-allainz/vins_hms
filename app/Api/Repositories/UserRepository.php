<?php

namespace euro_hms\Api\Repositories;

use euro_hms\Models\User;
use euro_hms\Models\Role;
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

    public function getDepartmentByName($name) {
        return User::select('department')->where('first_name', $name)->first();
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
        'status'=>'Active',
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

    /**
     * [getUserDetailsByType description]
     * @param  [type] $type   [description]
     * @param  [type] $status [description]
     * @return [array]         [description]
     */
    public function get_user_details_by_type($type,$status)
    {
        if($type=='All')
        {
            return User::where('status',$status)->get();
        }
        else
        {
            return User::where('user_type',$type)->where('status',$status)->get(); 
        }
        
    }

    /**
     * [getDepartmentById description]
     * @param  [type] $id [description]
     * @return [department]     [description]
     */
    public function getDepartmentById($id) {
        $dept=User::select('department')->where('id', $id)->first();
        return $dept->department;
    }

    /**
     * [getUserNameById description]
     * @param  [type] $id [description]
     * @return [name]     [description]
     */
    public function getUserNameById($id) {
        $record=User::where('id', $id)->first();
        return $record->first_name.' '.$record->last_name;
    }

    /**
     * [getUserDetailById description]
     * @param  [type] $id [description]
     * @return [name]     [description]
     */
    public function getUserDetaileById($id) {
        $record=User::where('id', $id)->first();
        return $record;
    }

    public function checkExistUser($type,$value){
      return  User::where($type,$value)->count();
    }

    public function getDoctoreInfoById($id,$type){
        $result = array();
        $record=User::where('id', $id)->where('user_type',$type)->first();
        $result['name'] = $record->first_name .$record->last_name  ;
        $result['dagree'] = $record->dagree;
        $result['department'] = $record->department;
        $result['regNo'] = $record->RegNo;
        return $result;
    }

}
