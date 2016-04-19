<?php

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title' => 'Mi primera entrada',
        'body' => 'Esta es mi primera entrada en el cblog creado con Laravel.',
        'user_id' => 1
      ]);
    }
}
