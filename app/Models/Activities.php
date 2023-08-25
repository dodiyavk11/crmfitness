<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','msg',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
