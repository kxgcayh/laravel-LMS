<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->belongsToMany(User::class, 'user_has_classes', 'class_id', 'user_id');
    }

    public function instructors()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }
}
