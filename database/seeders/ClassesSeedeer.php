<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'name' => 'RPL XII',
                'instructor_id' => 2
            ],
            [
                'name' => 'TKJ XII',
                'instructor_id' => 2
            ],
            [
                'name' => 'MMD XII',
                'instructor_id' => 2
            ]
        ];

        foreach ($classes as $class) {
            Classes::create($class);
        }
    }
}
