<?php

namespace App\Models;

use App\Models\Classroom\Classes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start',
        'end',
        'created_by',
    ];

    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];

    // Task belongs to user
    public function user()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function manyClass()
    {
        return $this->belongsToMany(Classes::class, 'classes_has_tasks', 'task_id', 'class_id');
    }
}
