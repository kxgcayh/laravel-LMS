<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = [
            [
                'name' => 'super-admin'
            ],
            [
                'name' => 'teacher'
            ],
            [
                'name' => 'student'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        $permissions = [
            [
                'name' => 'create class'
            ],
            [
                'name' => 'create task'
            ],
            [
                'name' => 'update task'
            ],
            [
                'name' => 'delete task'
            ],
            [
                'name' => 'submit task'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $teacher = Role::find(2);
        $teacher->givePermissionTo([
            'create class', 'create task', 'update task', 'delete task'
        ]);

        $student = Role::find(3);
        $student->givePermissionTo('submit task');
    }
}
