<?php

namespace App\Imports;

use App\Course;
use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    protected $course_id;

    public function __construct(Course $course) {
        $this->course_id = $course->id;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'course_id' => $this->course_id,
            'name' => $row['name'],
            'status' => $row['status']
        ]);
    }
}
