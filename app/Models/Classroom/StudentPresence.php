<?php

namespace App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentPresence extends Model
{
    use HasFactory;

    protected $table = 'class_schedules';

    protected $fillable = [
        'class_id',
        'start_time',
        'end_time',
    ];
}
