<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ZanySoft\Zip\ZipFacade as Zip;
use ZipArchive;

class StudentController extends Controller
{
    public function update(Request $request, Student $student) {
        $data = $request->validate([
            'name' => ['required', 'string'],
            'status' => ['required', 'integer']
        ]);

        $student->update($data);

        return redirect()->back()->with(['msg' => 'The student has been updated', 'type' => 'success']);
    }

    public function destroy(Request $request)
    {
        $student_ids = explode(',', $request->get('ids'));

        

        if(!$student_ids) {
            return redirect()->back()->with(['msg' => 'Select a student to delete', 'type' => 'danger']);
        }

        foreach($student_ids as $student_id) {
            $student = Student::find($student_id);
            
            if($student) {
                $student->delete();
            }
        }

        return redirect()->back()->with(['msg' => 'The student has been deleted', 'type' => 'success']);
    }

    public function showCertificate(Student $student)
    {
       return view('frontend.pages.show_certificate', ['student' => $student]);
    }

    public function generateCertificates(Course $course)
    {
        if($course->students()->where('status', 1)->count()) {
            foreach($course->students()->where('status', 1)->get() as $student) {
                // check the student has already a certificate
                if(!$student->hasCertificate()) {
                    $student->generateCertificate();
                } elseif($student->isModified()) {
                    $student->deleteCertificate();
                    $student->generateCertificate();
                }
            }
        }

        return redirect()->back()->with(['msg' => 'The certificates have been generated', 'type' => 'success']);
    }


    public function downloadCertificates(Course $course)
    {
        if($course->students()->count()) {
            

            if($course->hasDownloadableCertificates()) {
                $certificates = $course->hasDownloadableCertificates(false);
                // zip and download
                $zipPath = 'assets/certificates/' . Str::slug($course->name). '_' . $course->id . '_certificates.zip';
                

                $zip = new ZipArchive();

                if(file_exists($zipPath)) {
                    unlink($zipPath);
                }

                if($zip->open($zipPath, ZipArchive::CREATE) == true) {
                    foreach($certificates as $certificate) {
                        $zip->addFile($certificate, basename($certificate));
                    }

                    $zip->close();
                }

                if(file_exists($zipPath)) {
                    return response()->download($zipPath);
                } else {
                    return back()->with(['msg' => 'Unable to create the zip file', 'type' => 'danger']);
                }
                
            }
        }

        return back();
    }

}
