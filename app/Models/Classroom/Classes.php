<?php

namespace App\Models\Classroom;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    public function students()
    {
        return $this->belongsToMany(User::class, 'user_has_classes', 'class_id', 'user_id');
    }

    public function instructors()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
