<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Student extends Model
{
    private static $student;
    use HasFactory;

    public static function saveStudent($request)
    {
        self::$student = new Student();
        self::$student->name = $request->name;
        self::$student->email = $request->email;
        self::$student->phone = $request->phone;
        self::$student->password = bcrypt($request->password);
        self::$student->save();
    }
}
