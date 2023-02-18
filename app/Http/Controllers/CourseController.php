<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public $course;
    public function addCourse()
    {
        return view('admin.course.add-course',[
            'trainers' => Trainer::all(),
        ]);
    }

    public function saveCourse(Request $request)
    {

        Course::saveCourse($request);
        return back()->with('status','Course added successfully.');
    }

    public function deleteCourse($id)
    {
        Course::deleteCourse($id);
        return back();
    }

    public function editCourse($id)
    {
        $this->course = Course::find($id);
        return view('admin.course.edit-course',[
            'course' => $this->course,
            'trainers' => Trainer::all(),
        ]);
    }

    public function editCourseForm(Request $request)
    {
        Course::updateCourse($request);
        return redirect(route('manage.course'));
    }

    public function manageCourse()
    {
        $courses = DB::table('courses')
            ->join('trainers','trainers.id','=','courses.trainer_id')
            ->select('courses.*','trainers.trainer_name')
            ->get();
        return view('admin.course.manage-course',[
            'courses' => $courses,
        ]);
    }
}
