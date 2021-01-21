<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = Classes::find(1);
        $studentIds = [2, 3];

        $class->students()->attach($studentIds);
    }
}
