<?php

use Illuminate\Database\Seeder;
use Laraspace\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();


        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Krunal',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'Vadodara',
            'user_image'=>NULL,
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>NULL,
            'last_login_time'=>NULL,
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'Parikh',
            'email'=>'krunal.parikh@allianzcloud.com',
            'status'=>'Active'],

        ]);


    }
}
