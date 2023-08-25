<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class active_user extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status','key_locker','solarium',

    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
