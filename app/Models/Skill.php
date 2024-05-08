<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_percentage',
        'user_id',
        'visibility'     
    ];
}
