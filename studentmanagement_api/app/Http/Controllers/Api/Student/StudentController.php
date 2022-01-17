<?php

namespace App\Http\Controllers\Api\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;


class StudentController extends Controller
{
    public function getStudent($id) {
        if (Student::where('user_id', $id)->exists()) {
            $student = Student::where('user_id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($student, 200);
          } else {
            return response()->json([
              "message" => "Profile not found"
            ], 404);
          }
      }
}
