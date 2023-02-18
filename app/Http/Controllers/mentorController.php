<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;

class mentorController extends Controller
{
    public $trainer;
    public function index()
    {
        $courses = DB::table('courses')
            ->join('trainers','trainers.id','=','courses.trainer_id')
            ->select('trainers.*','courses.*')
            ->take(3)
            ->get();

        $trainers = DB::table('trainers')
            ->join('courses','trainers.id','=','courses.trainer_id')
            ->select('trainers.*','courses.course_name')
            ->take(6)
            ->get();

        return view('frontEnd.home.home',[
            'courses' => $courses,
            'trainers' => $trainers,
        ]);
    }

    public function about()
    {
        return view('frontEnd.about.about');
    }

    public function courses()
    {
        $courses = DB::table('courses')
            ->join('trainers','trainers.id','=','courses.trainer_id')
            ->select('trainers.*','courses.*')
            ->get();
        return view('frontEnd.courses.courses',[
            'courses' => $courses
        ]);
    }

    public function courseDetails($id)
    {
        $course = Course::where('course_slug',$id)->first();

        $courses = DB::table('courses')
            ->join('trainers','trainers.id','=','courses.trainer_id')
            ->where('trainers.id',$course->trainer_id)
            ->select('courses.*','trainers.trainer_name','trainers.trainer_slug')
            ->first();

        return view('frontEnd.courses.course-details',[
            'course' => $courses,
        ]);
    }

    public function trainers()
    {
        return view('frontEnd.trainers.trainers',[
            'trainers' => Trainer::all(),
        ]);
    }

    public function events()
    {
        return view('frontEnd.events.events');
    }

    public function pricing()
    {
        $courses = DB::table('courses')
            ->join('trainers','trainers.id','=','courses.trainer_id')
            ->select('trainers.*','courses.*')
            ->get();
        return view('frontEnd.pricing.pricing',[
            'courses' => $courses,
        ]);
    }

    public function contact()
    {
        return view('frontEnd.contact.contact');
    }

    public function trainerProfile($trainer_slug){
        $this->trainer = Trainer::where('trainer_slug',$trainer_slug)->first();
        return view('frontEnd.trainers.profile',[
            'trainer' => $this->trainer,
        ]);
    }

    public function studentLogin()
    {
        return view('frontEnd.student.student-login');
    }

    public function studentRegister()
    {
        return view('frontEnd.student.student-register');
    }

    public function saveStudent(Request $request)
    {
        Student::saveStudent($request);
        return redirect(route('student.login'));
    }

    public function checkLogin(Request $request)
    {
        $studentInfo = Student::where('email',$request->username)
            ->orWhere('phone',$request->username)
            ->first();

        if($studentInfo){
            $existingPassword = $studentInfo->password;
            if(password_verify($request->password,$existingPassword)){
                Session::put('studentId',$studentInfo->id);
                Session::put('studentName',$studentInfo->name);
                Session::put('studentEmail',$studentInfo->email);
                return redirect(route('home'));
            }
            else{
                return back()->with('message','Please Enter Valid Email/Phone/Password');
            }
        }
        else{
            return back()->with('message','Please Enter Valid Email/Phone/Password');
        }
    }

    public function studentLogout()
    {
        Session::forget('studentId');
        Session::forget('studentName');
        Session::forget('studentEmail');
        return redirect(route('home'));
    }

    public function enroll($id)
    {
        $course = Course::find($id);
        $studentId = Session::get('studentId');
        $student = Student::find($studentId);
        return view('frontEnd.student.enroll',[
            'student' => $student,
            'course' => $course,
        ]);
    }

    public function saveEnroll(Request $request)
    {
        Enrollment::saveEnroll($request);
        return redirect(route('courses'))->with('status', 'Submitted successfully, We will contact you soon..');
//        return redirect(route('courses'));
    }
}
