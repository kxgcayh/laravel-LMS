<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            [
                'name' => 'Create Monologue',
                'description' => 'Minimal duration is 20 minutes',
                'datetime' => Carbon::parse(Carbon::tomorrow()),
                'created_by' => 2,
                'created_at' => now()
            ], [
                'name' => 'Create Vlog',
                'description' => 'Minimal duration is 30 minutes',
                'datetime' => Carbon::parse(Carbon::tomorrow()),
                'created_by' => 2,
                'created_at' => now()
            ]
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
