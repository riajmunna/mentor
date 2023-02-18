<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    public static function saveEnroll($request){
        $item = new Enrollment();
        $item->student_name = $request->student_name;
        $item->student_email = $request->student_email;
        $item->student_phone = $request->student_phone;
        $item->course_name = $request->course_name;
        $item->price = $request->price;
        $item->save();
    }
}
