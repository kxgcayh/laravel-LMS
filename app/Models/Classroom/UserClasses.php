<?php

namespace App\Models\Classroom;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserClasses extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'user_has_classes';
}
