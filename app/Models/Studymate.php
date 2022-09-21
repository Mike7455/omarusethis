<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studymate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mate_user_id'
    ];

    public function user(){
        $this->belongsTo(User::class, 'mate_user_id');
    }
}
