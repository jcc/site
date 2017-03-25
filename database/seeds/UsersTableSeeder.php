<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        # DB::table('users')->truncate();

        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@iline.co',
                'password' => Hash::make('password'),
                'is_admin' => '1',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
