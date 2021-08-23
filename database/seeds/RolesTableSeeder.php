<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=Role::create(['name'=>'admin']);
        $user=Role::create(['name'=>'user']);
        $suspend=Role::create(['name'=>'suspend']);
    }
}
