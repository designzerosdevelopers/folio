<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_title',
        'service_description',
        'user_id',
        'icon_id',
        'svg_icon_code',
        'visibility'     
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
