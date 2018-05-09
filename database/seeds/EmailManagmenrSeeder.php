<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EmailManagmenrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
         DB::table('email_managment')->truncate();

         $contect = '<div>Hello {{name}} <br><p>Please link this link for reset your account password {{link}}</p></div>'

         DB::table('email_managment')->insert([
          ['type' => 'password_reset_link',
          'title'=>'Password Reset Link',
          'content' =>addslashes($contects) ,
          'status' => 1,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);

    }
}
