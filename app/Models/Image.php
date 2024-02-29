<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'work_photos',
        'user_id',
        'work_id',
    ];
    public function work()
    {
        return $this->belongTo('App\Models\Work');
    }
}
