<?php

namespace App\Http\Controllers;

use App\Course;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(10);
        return view('backend.courses.index', compact('courses'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateData($request);

        Course::create($data);

        return redirect()->route('admin.courses.index')->with(['msg' => 'The course has been added.', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $students = $course->students()->paginate(10);
        return view('backend.courses.show', ['course' => $course, 'students' => $students]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $this->validateData($request);
        $course->update($data);
        
        return redirect()->route('admin.courses.show', $course->id)->with(['msg' => 'The course has been updated.', 'type' => 'success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('admin.courses.index')->with(['msg' => 'The course has been deleted.', 'type' => 'success']);
    }

    private function validateData(Request $request) {
        return $request->validate([
            'name' => ['required', 'string'],
            'certificate_description' => ['required', 'string'],
            'start_date' => ['required', 'string'],
            'end_date' => ['required', 'string'],
        ]);
    }

    public function addStudents(Request $request, Course $course)
    {
        $data = $request->validate([
            'course_id' => ['required', 'integer'],
            'name' => ['required', 'string'],
            'status' => ['required']
        ]);

        $course->students()->create($data);

        return redirect()->route('admin.courses.show', $course->id)->with(['msg' => 'The student has been added.', 'type' => 'success']);
    }

    public function importStudents(Request $request, Course $course)
    {
        $request->validate([
            'file' => ['required', 'file']
        ]);

        Excel::import(new StudentsImport($course), $request->file('file'));

        return redirect()->route('admin.courses.show', $course->id)->with(['msg' => 'The students have been imported.', 'type' => 'success']);
    }
}
