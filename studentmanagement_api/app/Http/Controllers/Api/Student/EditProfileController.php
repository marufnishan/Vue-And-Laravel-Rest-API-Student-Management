<?php

namespace App\Http\Controllers\Api\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditProfileController extends Controller
{

    public function update(Request $request){
        $validate = Validator::make($request->all(),[
            'student_id'=> 'required',
            'user_id'=> 'required',
            'image' => 'required',
            'date_of_birth'=> 'required',
            'gender'=> 'required',
            'maritial_status'=> 'required',
            'blood_group' => 'required',
            'religion'=> 'required',
            'nationality'=> 'required',
            'alternate_phone'=> 'required|max:14|min:11|unique:users',
            'alternate_email'=> 'required|email|unique:users',
            
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $student = new Student;
        $student->student_id = $request->student_id;
        $student->user_id = $request->user_id;
        $student->image = $request->image;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->maritial_status = $request->maritial_status;
        $student->blood_group = $request->blood_group;
        $student->save();
            return response()->json(['message'=>'Profile Updated Successfully'],200);
        
    }
}
