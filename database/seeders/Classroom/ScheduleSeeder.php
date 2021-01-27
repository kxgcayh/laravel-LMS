<?php

namespace Database\Seeders\Classroom;

use App\Models\Classroom\Schedule;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $schedules = [
            [
                'class_id' => 1,
                'start_time' => Carbon::createFromFormat('H:i:s', '10:00:00')->toTimeString(),
                'end_time' => Carbon::createFromFormat('H:i:s', '12:00:00')->toTimeString(),
            ], [
                'class_id' => 2,
                'start_time' => Carbon::createFromFormat('H:i:s', '15:30:00')->toTimeString(),
                'end_time' => null,
            ],  [
                'class_id' => 3,
                'start_time' => Carbon::createFromFormat('H:i:s', '07:30:00')->toTimeString(),
                'end_time' => null,
            ],
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
