<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    use HasFactory;
    protected $fillable = ['temp_name','temp_image', 'temp_type'];
}
