<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'certificate_description', 'start_date', 'end_date'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function from()
    {
        if($this->start_date) {
            $date = Carbon::parse($this->start_date);

            return $date->format('d/m/Y');
        }
    }

    public function to()
    {
        if($this->end_date) {
            $date = Carbon::parse($this->end_date);

            return $date->format('d/m/Y');
        }
    }

    public function hasDownloadableCertificates($count = true)
    {
        $hasDownloadableCertificates = false;
        $certificates = [];

        if($this->students()->count()) {
            foreach($this->students as $student) {
                if($student->hasCertificate()) {
                    array_push($certificates, 'assets/certificates/' . basename($student->certificate_path));
                }
            }

            $hasDownloadableCertificates = count($certificates) > 0;
        }

        return $count ? $hasDownloadableCertificates : ($hasDownloadableCertificates ? $certificates : []);

    }
}
