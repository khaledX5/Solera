<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           
    $role_user = Role::where('name', 'user')->first();
    $role_admin  = Role::where('name', 'admin')->first();
    
        $user = new User();
        $user->id = 5;
        $user->name = 'ahmed';
        $user->email = 'ahmed@solera.com';
        $user->password = bcrypt('12345');
        $user->save();
        
    $user->roles()->attach($role_user);
        $user_2 = new User();
        $user_2->id = 6;
        $user_2->name = 'mohamed';
        $user_2->email = 'mohamed@solera.com';
        $user_2->password = bcrypt('12345');
        $user_2->save();
        
    $user_2->roles()->attach($role_user);
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@solera.com';
        $admin->password = bcrypt('12345');
        $admin->save();
        
    $admin->roles()->attach($role_admin);
    }
}
