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
            'name' => 'Kautsar Albana',
            'email' => 'kautsar@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Fharhan Amrin',
            'email' => 'ucok@teacher.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'Tobias Vicensius',
            'email' => 'tobias@student.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $superAdmin = User::find(1);
        $adminRole = Role::where('name', 'super-admin')->get();
        $superAdmin->assignRole($adminRole);

        $teacher = User::find(2);
        $teacherRole = Role::where('name', 'teacher')->get();
        $teacher->assignRole($teacherRole);


        $student = User::find(3);
        $studentRole = Role::where('name', 'student')->get();
        $student->assignRole($studentRole);
    }
}
