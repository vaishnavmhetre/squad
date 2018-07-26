<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'email' => 'mhetrevaishnav0@gmail.com'
        ]);

        factory(\App\User::class, 9)->create();
    }
}
