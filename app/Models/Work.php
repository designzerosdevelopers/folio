<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    protected $primarykey = "id";
    protected $fillable = [
        'work_title',
        'work_url',
        'work_date',
        'work_description',
        'user_id',
        'visibility'
    ];
    public function image()
    {
        return $this->hasMany('App\Models\Image');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
