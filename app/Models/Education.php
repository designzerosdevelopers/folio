<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $table = 'educations';

    protected $fillable = [
        'user_id',
        'degree_title',          
        'institute',              
        'degree_start',           
        'degree_end',             
        'degree_description',
        'visibility'     
    ];
}
