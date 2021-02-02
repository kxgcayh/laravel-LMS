<?php

namespace Database\Seeders\Classroom;

use App\Models\Classroom\Classes;
use Illuminate\Database\Seeder;

class ClassesHasTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $class1 = Classes::find(1);
        $taskIds1 = [1, 2, 3];

        $class1->manyTask()->attach($taskIds1);

        $class2 = Classes::find(2);
        $taskIds2 = [2, 3];

        $class2->manyTask()->attach($taskIds2);

        $class3 = Classes::find(3);
        $taskIds3 = [3];

        $class3->manyTask()->attach($taskIds3);
    }
}
