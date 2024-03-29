<?php

namespace App\Models;

use App\Models\Classroom\Classes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory;
    use HasRoles;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // User has many task
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    // Instructor has many class
    public function instructorClass()
    {
        return $this->hasMany(Classes::class);
    }

    // Student has many class
    public function manyClass()
    {
        return $this->belongsToMany(Classes::class, 'user_has_classes', 'user_id', 'class_id');
    }
}
