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
            ['first_name'=>'test',
            'password'=>Hash::make('12345678'),
            'department'=>'ONCO',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'bqwIrma2t9wDUlSBgg6e6r1P5HRvPN',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'test',
            'email'=>'test@gmail.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Krunal',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Nurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'Parikh',
            'email'=>'krunal.parikh@allianzcloud.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Richa',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Nurology',
            'user_type'=>'Others',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'Pathak',
            'email'=>'richa.pathak@allianzcloud.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Sagar',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Nurology',
            'user_type'=>'Others',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'Pathak',
            'email'=>'sagar.pathak@allianzcloud.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Toral',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Vascular',
            'user_type'=>'Others',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'Pathak',
            'email'=>'toral.pathak@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Vrishank',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Vascular',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>'',
            'last_name'=>'Pathak',
            'email'=>'toral.pathak@allianzcloud.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Keychu',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Nurology',
            'user_type'=>'Doctor',
            'mobile_no'=>'123456789',
            'address'=>'',
            'user_image'=>'',
            'token'=>'',
            'is_verified'=>'1',
            'timezone'=>'',
            'last_login_time'=>'',
            'is_active'=>'1',
            'last_active_time'=>NULL,
            'is_mobile_user'=>1,
            'deleted_at'=>NULL,
            'last_name'=>'Pathak',
            'email'=>'keychu.pathak@allianzcloud.com',
            'status'=>'Active'],

        ]);


    }
}
