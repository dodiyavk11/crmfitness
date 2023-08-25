<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status','key_locker',
        'start_time','end_time','solarium',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
