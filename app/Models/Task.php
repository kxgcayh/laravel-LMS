<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'created_by',
    ];

    protected $casts = [
        'datetime' => 'date:Y-m-d H:i:s',
    ];

    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
