<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'author',
        'pic',
        'course_id'
    ];


    public function course(){
        return $this->belongsTo(Course::class);
    }




    
}
