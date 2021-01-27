<?php

namespace Database\Seeders\Classroom;

use App\Models\Classroom\Classes;
use Illuminate\Database\Seeder;

class UserClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $class = Classes::find(1);
        $studentIds = [2, 3];

        $class->students()->attach($studentIds);
    }
}
