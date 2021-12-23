<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['course_id', 'name', 'status'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
