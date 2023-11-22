<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // // Create roles
        // Role::create(['name' => 'admin']);
        // Role::create(['name' => 'staff']);
        // Role::create(['name' => 'teacher']);
        // Role::create(['name' => 'student']);

        // // Create default admin user
        // $admin = User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('password'),
        //     'role_id' => Role::where('name', 'admin')->first()->id,
        // ]);

        // // Associate the role with the user
        // $admin->role()->associate(Role::where('name', 'admin')->first())->save();

        // You can create other users and associate roles with them here


        // create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'user_type' => 'admin',
        ]);

        // create staff user
        $staff = User::create([
            'name' => 'Staff',
            'email' => 'staff@staff.com',
            'password' => bcrypt('password'),
            'user_type' => 'staff',
        ]);

        // create teacher user
        $teacher = User::create([
            'name' => 'Teacher',
            'email' => 'teacher@teacher.com',
            'password' => bcrypt('password'),
            
            'status' => true,
        ]);

        $teacher = User::create([
            'name' => 'Teacher1',
            'email' => 'teacher1@teacher.com',
            'password' => bcrypt('password'),
            
            'status' => false,
        ]);

        $teacher = User::create([
            'name' => 'Teacher2',
            'email' => 'teacher2@teacher.com',
            'password' => bcrypt('password'),
            
            'status' => false,
        ]);

        // create user user
        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password'),
            'user_type' => 'user',
        ]);
    }
}
