<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';

    

    protected $fillable = [
        'user_id',
        'company_name',
        'position',
        'exp_start',
        'exp_end',
        'exp_description',
        'visibility'     
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    
}
