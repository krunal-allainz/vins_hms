<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class roleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role_user')->truncate();

        DB::table('role_user')->insert([
          ['user_id' => '17',
          'role_id' => '2',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '16',
          'role_id' => '3',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '15',
          'role_id' => '4',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],
        ]);
        DB::table('role_user')->insert([
          ['user_id' => '1',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '2',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '3',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '4',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
        DB::table('role_user')->insert([
          ['user_id' => '5',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '6',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '7',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '8',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '9',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '10',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '11',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '12',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '13',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);DB::table('role_user')->insert([
          ['user_id' => '14',
          'role_id' => '1',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),],

        ]);
    }
}
