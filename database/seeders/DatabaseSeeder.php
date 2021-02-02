<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            TaskSeeder::class,
            Classroom\ClassesSeedeer::class,
            Classroom\ScheduleSeeder::class,
            Classroom\UserClassesSeeder::class,
            Classroom\ClassesHasTasksSeeder::class,
        ]);
    }
}
