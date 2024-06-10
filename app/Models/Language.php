<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable= ['language_name', 'user_id', 'visibility'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
