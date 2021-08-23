<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
                'userid'=>'Admin101',
                'name'=>'Admin',
                'phone'=>'7048360791',
                'email'=>'admin@gmail.com',
                'role_id'=>'1',
                'password'=> bcrypt('password'),
        ]);
        $user = User::create([
            'userid'=>'user101',
            'name'=>'User',
            'phone'=>'9925243238',
            'email'=>'user@gmail.com',
            'role_id'=>'2',
            'password'=> bcrypt('password'),
        ]);
    }
}
