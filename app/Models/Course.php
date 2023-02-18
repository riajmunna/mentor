<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public static $course, $image, $imageName, $directory, $imgUrl;
    use HasFactory;

    public static function saveCourse($request)
    {
        $request->validate([
            'course_name' => 'required',
            'trainer_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        self::$course = new Course();
        self::$course->course_name = $request->course_name;
        self::$course->course_slug = preg_replace('/\s+/u','-',trim(strtolower($request->course_name)));
        self::$course->trainer_id = $request->trainer_id;
        self::$course->price = $request->price;
        self::$course->description = $request->description;
        if ($request->file('image')) {
            self::$course->image = self::saveImage($request);
        }
        self::$course->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'asset/image/';
        self::$imgUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imgUrl;
    }

    public static function updateCourse($request)
    {
        $request->validate([
            'course_name' => 'required',
            'trainer_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        self::$course = Course::find($request->course_id);
        self::$course->course_name = $request->course_name;
        self::$course->trainer_id = $request->trainer_id;
        self::$course->price = $request->price;
        self::$course->description = $request->description;
        if ($request->file('image')) {
            if(self::$course->image != null)
            {
                unlink(self::$course->image);
            }
            self::$course->image = self::saveImage($request);
        }
        self::$course->save();
        return back();
    }

    public static function deleteCourse($id)
    {
        self::$course = Course::find($id);
        self::$course->delete();
        unlink(self::$course->image);
    }

//    public function name(){
//        return $this->hasOne(Trainer::class);
//    }
}
