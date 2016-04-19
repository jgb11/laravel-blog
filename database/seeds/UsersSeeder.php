<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'jgb',
        'email' => 'txoppe@gmail.com',
        'password' => bcrypt('1111')
      ]);
    }
}
