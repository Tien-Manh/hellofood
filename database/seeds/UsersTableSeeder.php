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
        $users = [
        	[
        		'name' => 'Admin',
        		'email' => 'admin@gmail.com',
        		'password' => Hash::make('123456'),
                'avatar' => '',
        		'role' => 2
        	],
        	[
        		'name' => 'Mod',
        		'email' => 'mod@gmail.com',
        		'password' => Hash::make('123456'),
        		'role' => 1,
                'avatar' => ''
        	],
            [
                'name' => 'test1',
                'email' => 'test1f@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar' => ''
            ],
            [
                'name' => 'test2',
                'email' => 'test2f@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar' => ''
            ],
            [
                'name' => 'test3',
                'email' => 'test3f@gmail.com',
                'password' => Hash::make('123456'),
                'role' => 0,
                'avatar' => ''
            ]
        ];
        DB::table('users')->insert($users);
    }
}
