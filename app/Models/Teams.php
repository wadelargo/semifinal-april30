<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $fillable = [
        'name',
        'remarks',
        'owner',
        'head_coach',
    ];
}
