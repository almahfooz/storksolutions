<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'certificate_description', 'start_date', 'end_date'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
