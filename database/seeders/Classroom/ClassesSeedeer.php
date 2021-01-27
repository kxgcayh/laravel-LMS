<?php

namespace Database\Seeders\Classroom;

use App\Models\Classroom\Classes;
use Carbon\Carbon;
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
                'user_id' => 2,
                'start_date' => Carbon::createFromFormat('Y-m-d', '2019-11-24')->toDateString(),
                'end_date' => null,
            ],
            [
                'name' => 'TKJ XII',
                'user_id' => 2,
                'start_date' => Carbon::createFromFormat('Y-m-d', '2019-12-03')->toDateString(),
                'end_date' => Carbon::createFromFormat('Y-m-d', '2019-12-23')->toDateString(),
            ],
            [
                'name' => 'BDP XII',
                'user_id' => 3,
                'start_date' => Carbon::createFromFormat('Y-m-d', '2020-01-02')->toDateString(),
                'end_date' => null,
            ],
            [
                'name' => 'MMD XII',
                'user_id' => 2,
                'start_date' => Carbon::createFromFormat('Y-m-d', '2020-01-03')->toDateString(),
                'end_date' => Carbon::createFromFormat('Y-m-d', '2020-02-01')->toDateString(),
            ],
        ];

        foreach ($classes as $class) {
            Classes::create($class);
        }
    }
}
