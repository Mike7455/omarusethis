<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $table = 'instructors';


    protected $fillable = [
        // 'id',
        'email',
        'password',
        'fname',
        'm_name',
        'lname',
        'institution',
        'pic',
        'study_field',
        'description'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }


}
