<?php

namespace App\Models\Classroom;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'user_id',
        'name',
        'start_date',
        'end_date',
    ];

    public function manyStudent()
    {
        return $this->belongsToMany(User::class, 'user_has_classes', 'class_id', 'user_id');
    }

    public function manyTask()
    {
        return $this->belongsToMany(Task::class, 'classes_has_tasks', 'class_id', 'task_id');
    }

    // Class belongs to Instructors
    public function instructors()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
