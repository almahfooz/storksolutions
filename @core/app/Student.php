<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class Student extends Model
{
    protected $fillable = ['course_id', 'name', 'status', 'certificate_path'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function hasCertificate()
    {
        if($this->certificate_path) {

            $file = basename($this->certificate_path);
            return file_exists('assets/certificates/' . $file);
        }

        return false;
    }

    public function isModified()
    {
        return $this->created_at->lt($this->updated_at);
    }

    public function generateCertificate()
    {
        if($this->status == 1) {
            $img = Image::make('assets/common/images/certificate_template.png');
            // Generate QR code and attach it to the template
            $qrCode = (string)QrCode::format('png')->size(250)->generate(route('students.certificates.show', $this->id));
            $qr = imagecreatefromstring($qrCode);
            $img->insert($qr, 'top-right', 146, 136);
    
            
            // Attach ID
            $id = date('Y') . '/' . sprintf('%03d', $this->id);
            $img->text($id, 126, 165, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-SemiBold.otf');
                $font->size(45);
                $font->color('#434343');
            });
    
            // Attach name
            $img->text($this->name, 1720, 1340, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/GreatVibes-Regular.otf');
                $font->size(110);
                $font->color('#333333');
                $font->align('center');
                $font->valign('top');
            });
    
            $course = $this->course;
    
            // Attach description
            $description = strtoupper($course->certificate_description);
    
            // $lines = explode("\n", wordwrap($description, 75));
    
            // for ($i = 0; $i < count($lines); $i++) {
            //     $offset = 1670 + ($i * 80); // 50 is line height
            //     $img->text($lines[$i], 1755, $offset, function($font) use($description, $course){
            //         $font->file('assets/backend/fonts/certificate-fonts/Montserrat-SemiBold.otf');
            //         $font->size(55);
            //         $font->color('#333333');
            //         $font->align('center');
            //         $font->valign('center');
            //     });
            // }
            $img->text($description, 1755, 1620, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-Regular.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('center');
                $font->valign('center');
            });
            
            $img->text($course->name, 1755, 1700, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-SemiBold.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('center');
                $font->valign('center');
            });
           
            $img->text('FROM', 1300, 1780, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-Regular.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('left');
                $font->valign('center');
            });
            
            $img->text($course->from(), 1500, 1780, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-SemiBold.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('left');
                $font->valign('center');
            });
           
            $img->text('TO', 1810, 1780, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-Regular.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('left');
                $font->valign('center');
            });
            
            $img->text($course->to(), 1920, 1780, function($font){
                $font->file('assets/backend/fonts/certificate-fonts/Montserrat-SemiBold.otf');
                $font->size(55);
                $font->color('#333333');
                $font->align('left');
                $font->valign('center');
            });
    
            $fileName = uniqid('certificate_' . $this->id . '_') . '.png';
            $img->save('assets/certificates/' . $fileName, 100, 'png');
    
            $this->certificate_path = 'assets/certificates/' . $fileName;
            $this->timestamps = false;
            $this->save();
        }
    }

    public function deleteCertificate()
    {
        if($this->hasCertificate()) {
            $file = basename($this->certificate_path);
            unlink('assets/certificates/' . $file);
        }
    }

    public function getCertificatePath()
    {
        if($this->hasCertificate()) {
            return  'assets/certificates/'. basename($this->certificate_path);
        }
    }
}
