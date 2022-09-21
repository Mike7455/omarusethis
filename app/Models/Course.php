<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable =[
        'course_name',
        'course_description',
        'pic'
    ];

    public function instructors(){
        return $this->hasMany(Instructor::class);
    }

    public function books(){
        return $this->hasMany(Books::class);
    }
}
