<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $classes = [
            [
                'name' => 'RPL XII',
                'instructor_id' => 2,
            ],
            [
                'name' => 'TKJ XII',
                'instructor_id' => 2,
            ],
            [
                'name' => 'BDP XII',
                'instructor_id' => 3,
            ],
            [
                'name' => 'MMD XII',
                'instructor_id' => 2,
            ],
        ];

        foreach ($classes as $class) {
            Classes::create($class);
        }
    }
}
