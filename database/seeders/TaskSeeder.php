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
                'start' => Carbon::parse(Carbon::yesterday()),
                'end' => Carbon::parse(Carbon::tomorrow()),
                'created_by' => 2,
                'created_at' => now(),
            ], [
                'name' => 'Create Vlog',
                'description' => 'Minimal duration is 30 minutes',
                'start' => Carbon::parse(Carbon::yesterday()),
                'end' => '2021-01-30',
                'created_by' => 2,
                'created_at' => now(),
            ], [
                'name' => 'Create Web Applications',
                'description' => 'Learning Management System',
                'start' => Carbon::parse(Carbon::yesterday()),
                'end' => now(),
                'created_by' => 2,
                'created_at' => now(),
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
