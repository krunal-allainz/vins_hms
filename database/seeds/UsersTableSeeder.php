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
            ['first_name'=>'Dr. Rakesh',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'dagree'=>'M.D.D.M.',
            'regno'=>'G-22734',
            'user_type'=>1,
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
            'last_name'=>'Shah',
            'email'=>'rakesh.shah@gmail.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Anand',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'degree'=>'',
            'RegNo'=>'',
            'dagree'=>'',
            'regno'=>'',
            'user_type'=>1,
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
            'last_name'=>'Vaishnav',
            'email'=>'anand.vaishnav@gmail.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Suvorit',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'degree'=>'M.D.D.M.',
            'RegNo'=>'G-42383',
            'dagree'=>'MD DM',
            'regno'=>'G-42383',
            'user_type'=>1,
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
            'last_name'=>'Bhowmick',
            'email'=>'suvorit.bhowmick@gmail.com',
            'status'=>'Active'],

        ]);

        //Neurosurgery
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Monish',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurosurgery',
            'degree'=>'M.S.,Mch.',
            'RegNo'=>'G-42383',
            'dagree'=>'M.S., MSch',
            'regno'=>'G-19282',
            'user_type'=>1,
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
            'last_name'=>'Malhotra',
            'email'=>'monish.malhotra@gmail.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Suresh',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurosurgery',
            'degree'=>'M.S.MCH',
            'RegNo'=>'G-22668',
            'dagree'=>'M.S.MCH',
            'regno'=>'22668',
            'user_type'=>1,
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
            'last_name'=>'Nayak',
            'email'=>'suresh.nayak@gmail.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Viral',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurosurgery',
            'degree'=>'M.S.MCH',
            'RegNo'=>'G-23541',
            'dagree'=>'M.S.MCH',
            'regno'=>'G-23541',
            'user_type'=>1,
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
            'last_name'=>'Mehta',
            'email'=>'viral.mehta@gmail.com',
            'status'=>'Active'],

        ]);
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Rakesh',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurosurgery',
            'degree'=>'MBBS,MS,DNF',
            'RegNo'=>'G-',
            'dagree'=>'MBBS, MS,DNF',
            'regno'=>'G-36820',
            'user_type'=>1,
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
            'last_name'=>'Jasani',
            'email'=>'rakesh.jasani@gmail.com',
            'status'=>'Active'],

        ]);

        //Vascular
        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Vijay',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Vascular',
            'dagree'=>'M.S.PDCC',
            'regno'=>'G-18420',
            'user_type'=>1,
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
            'last_name'=>'Thakore',
            'email'=>'vijay.thakore@gmail.com',
            'status'=>'Active'],

        ]);

//Cardiology
         DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Kaushik',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Cardiology',
            'dagree'=>'M.D. Cardiology',
            'regno'=>'G-10679',
            'user_type'=>1,
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
            'last_name'=>'TRIVEDI',
            'email'=>'kaushik.trivedi@gmail.com',
            'status'=>'Active'],

        ]);

          DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Hemant',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Orthopedic',
            'dagree'=>'M.S.Ortho',
            'regno'=>'G-9881',
            'user_type'=>1,
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
            'last_name'=>'MATHUR',
            'email'=>'hemant.mathur@gmail.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Mihir',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Neurology',
            'dagree'=>'M.D.D.M.',
            'regno'=>'G-34728',
            'user_type'=>1,
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
            'last_name'=>'Acharya',
            'email'=>'mihir.acharya@gmail.com',
            'status'=>'Active'],

        ]);

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Sumit',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Vascular',
            'dagree'=>'DNB, MRCS',
            'regno'=>'G-11559',
            'user_type'=>1,
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
            'last_name'=>'Kapadia',
            'email'=>'sumit.kapadia@gmail.com',
            'status'=>'Active'],

        ]);


        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Ketan',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Cardiology',
            'dagree'=>'',
            'regno'=>'',
            'user_type'=>1,
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
            'last_name'=>'Kapashi',
            'email'=>'ketan.kapashi@gmail.com',
            'status'=>'Active'],

        ]);
// /Oncology

        DB::table('users')->insert([
            // ['person_id' => '3','username' => 'tadministrator@administrator.com',
            ['first_name'=>'Dr. Rajesh',
            'password'=>Hash::make(trim('12345678')),
            'department'=>'Oncology',
            'dagree'=>'ONCO ,SURGEON',
            'regno'=>'G-9286',
            'user_type'=>1,
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
            'last_name'=>'Kantharia',
            'email'=>'rajesh.kantharia@gmail.com',
            'status'=>'Active'],

        ]);


    }
}
