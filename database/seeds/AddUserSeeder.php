<?php

use Illuminate\Database\Seeder;
use App\User;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	'name'=> 'test',
        	'email'=> 'admin@admin.com',
        	'password'=> bcrypt('password')
        ];
        User::create($user);
    }
}
