<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'name',
        'email',
        'rating',
        'message',
        'photo_path',
        'status',
    ];
}
