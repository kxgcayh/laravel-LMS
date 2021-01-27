<?php

namespace App\Models\Classroom;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'instructor_id',
        'name',
        'start_date',
        'end_date',
    ];

    public function students()
    {
        return $this->belongsToMany(User::class, 'user_has_classes', 'class_id', 'user_id');
    }

    public function instructors()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
