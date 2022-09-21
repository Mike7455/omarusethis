<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'from_user_id',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function user_to(){
        return $this->belongsTo(User::class, 'user');
    }
}
