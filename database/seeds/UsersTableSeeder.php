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
        $admin = factory(\App\User::class)->create([
            'id'    => '1',
            'name'  => 'Admin Adam',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin'),
            //'phone' => '0623232565321',
        ]);

        $authuser = factory(\App\User::class)->create([
            'id'    => '2',
            'name'  => 'Authenticated User',
            'email' => 'authuser@authuser.com',
            'password' => bcrypt('authuser'),
            //'phone' => '0623232565322',
        ]);
    }
}
