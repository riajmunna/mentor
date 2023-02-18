<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mentorController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SslCommerzPaymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[mentorController::class,'index'])->name('home');
Route::get('about/',[mentorController::class,'about'])->name('about');
Route::get('courses/',[mentorController::class,'courses'])->name('courses');
Route::get('course-details/{id}',[mentorController::class,'courseDetails'])->name('course.details');
Route::get('trainers/',[mentorController::class,'trainers'])->name('trainers');
Route::get('events/',[mentorController::class,'events'])->name('events');
Route::get('pricing/',[mentorController::class,'pricing'])->name('pricing');
Route::get('contact/',[mentorController::class,'contact'])->name('contact');
Route::get('trainer-profile/{trainer_slug}',[mentorController::class,'trainerProfile'])->name('trainer.profile');
Route::get('student-login/',[mentorController::class,'studentLogin'])->name('student.login');
Route::post('student-login/',[mentorController::class,'checkLogin'])->name('student.login');
Route::get('student-register/',[mentorController::class,'studentRegister'])->name('student.register');
Route::post('student-register/',[mentorController::class,'saveStudent'])->name('student.register');
Route::get('student-logout/',[mentorController::class,'studentLogout'])->name('student.logout');

Route::group(['middleware' => 'payment'],function(){
    Route::get('/enroll/{id}',[mentorController::class,'enroll'])->name('enroll');
    Route::post('/enroll-form/',[mentorController::class,'saveEnroll'])->name('enroll.form');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');

    Route::get('dashboard/',[dashboardController::class,'index'])->name('dashboard');

    // --------------- Trainer Controller -----------------//
    Route::get('/add-trainer',[TrainerController::class,'addTrainer'])->name('add.trainer');
    Route::get('/manage-trainer',[TrainerController::class,'manageTrainer'])->name('manage.trainer');
    Route::post('/save-trainer',[TrainerController::class,'saveTrainer'])->name('save.trainer');
    Route::post('/delete-trainer',[TrainerController::class,'deleteTrainer'])->name('delete.trainer');

    // --------------- Course Controller ------------------//
    Route::get('/add-course',[CourseController::class,'addCourse'])->name('add.course');
    Route::get('/manage-course',[CourseController::class,'manageCourse'])->name('manage.course');
    Route::post('/delete-course/{id}',[CourseController::class,'deleteCourse'])->name('delete.course');
    Route::post('/save-course',[CourseController::class,'saveCourse'])->name('save.course');
    Route::get('/edit.course//{id}',[CourseController::class,'editCourse'])->name('edit.course');
    Route::post('/edit-course-form',[CourseController::class,'editCourseForm'])->name('edit.course.form');
});
