<?php

namespace euro_hms\Api\Repositories;

use euro_hms\Models\User;
use euro_hms\Models\Role;
use DB;
use Hash;

class UserRepository {


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


}
