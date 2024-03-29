<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'user ';
        $role_user->save();
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'admin ';
        $role_admin->save();
    }
}
