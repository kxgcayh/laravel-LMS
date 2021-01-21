<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@lms.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $user = User::find(1);
        // $permissions = Permission::pluck('id');
        $role = Role::where('name', 'admin')->get();
        $user->assignRole($role);
    }
}
