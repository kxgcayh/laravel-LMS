<?php

namespace Database\Seeders;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $tasks = [
            [
                'name' => 'Create Monologue',
                'description' => 'Minimal duration is 20 minutes',
                'start_date' => Carbon::parse(Carbon::yesterday()),
                'end_date' => Carbon::parse(Carbon::tomorrow()),
                'created_by' => 2,
                'created_at' => now(),
            ], [
                'name' => 'Create Vlog',
                'description' => 'Minimal duration is 30 minutes',
                'start_date' => Carbon::parse(Carbon::yesterday()),
                'end_date' => Carbon::parse(Carbon::tomorrow()),
                'created_by' => 2,
                'created_at' => now(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
