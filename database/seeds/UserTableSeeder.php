<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();
        $role_author = Role::where('name', 'Author')->first();

        $user = new User();
        $user->name = 'Lee Perry';
        $user->email = 'leebobtubby@gmail.com';
        $user->password = bcrypt('guest');
        $user->save();
        $user->roles()->attach($role_user);

        $author = new User();
        $author->name = 'Alex Bezruchko';
        $author->email = 'alex.bezruchko@gmail.com';
        $author->password = bcrypt('author');
        $author->save();
        $author->roles()->attach($role_author);

        $admin = new User();
        $admin->name = 'King Tubby';
        $admin->email = 'goonerfari@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);  
        
    }
}
