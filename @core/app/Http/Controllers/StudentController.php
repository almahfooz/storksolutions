<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

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
}
