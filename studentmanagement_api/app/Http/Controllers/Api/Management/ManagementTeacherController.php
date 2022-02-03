<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagementTeacherController extends Controller
{
    public function addteacher(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
            'user_id'=> 'required',
            'name'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'subject'=> 'required',
            'designation'=> 'required',
            'salary'=> 'required',
            /* 'image' => 'required', */
            'date_of_birth'=> 'required',
            'gender'=> 'required',
            /* 'maritial_status'=> 'required',
            'blood_group' => 'required',
            'religion'=> 'required',
            'nationality'=> 'required',
            'national_id'=> 'required',
            'alternate_email'=> 'required|email|unique:users',
            'alternate_phone'=> 'required|max:14|min:11|unique:users',

            'personal_website'=> 'required',
            'social_id' => 'required',

            'address'=> 'required',
            'post_office'=> 'required',
            'police_station' => 'required',
            'dictrict'=> 'required',
            'division'=> 'required',

            'country'=> 'required',
            'zip_code'=> 'required',

            'degree' => 'required',
            'degree_name'=> 'required',
            'university'=> 'required',
            'board'=> 'required',
            'passing_year' => 'required',
            'class_devision'=> 'required',
            'cgpa'=> 'required',
            'remarks'=> 'required', */
            
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        $teacherProfile = Teacher::where('id',$request->id)->first();
        if(!$teacherProfile)
        {
            $teacher = new teacher();
            $teacher->id = $request->id;
            $teacher->user_id = $request->user_id;
            $teacher->save();
        }

        $teacher = Teacher::find($request->id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->subject = $request->subject;
        $teacher->designation = $request->designation;
        $teacher->salary = $request->salary;
        $teacher->image = $request->image;
        $teacher->date_of_birth = $request->date_of_birth;
        $teacher->gender = $request->gender;
        $teacher->maritial_status = $request->maritial_status;
        $teacher->blood_group = $request->blood_group;
        $teacher->religion = $request->religion;
        $teacher->nationality = $request->nationality;
        $teacher->national_id = $request->national_id;
        $teacher->alternate_email = $request->alternate_email;
        $teacher->alternate_phone = $request->alternate_phone;
        $teacher->personal_website = $request->personal_website;
        $teacher->social_id = $request->social_id;
        $teacher->address = $request->address;
        $teacher->post_office = $request->post_office;
        $teacher->police_station = $request->police_station;
        $teacher->dictrict = $request->dictrict;
        $teacher->division = $request->division;
        $teacher->country = $request->country;
        $teacher->zip_code = $request->zip_code;
        $teacher->degree = $request->degree;
        $teacher->degree_name = $request->degree_name;
        $teacher->university = $request->university;
        $teacher->board = $request->board;
        $teacher->passing_year = $request->passing_year;
        $teacher->class_devision = $request->class_devision;
        $teacher->cgpa = $request->cgpa;
        $teacher->remarks = $request->remarks;
        $teacher->save();
            return response()->json(['message'=>'Teacher Profile Added Successfully'],200);
        
    }


    public function editteacher(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $teacher = Teacher::find($request->id);
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->phone = $request->phone;
        $teacher->subject = $request->subject;
        $teacher->designation = $request->designation;
        $teacher->salary = $request->salary;
        $teacher->image = $request->image;
        $teacher->date_of_birth = $request->date_of_birth;
        $teacher->gender = $request->gender;
        $teacher->maritial_status = $request->maritial_status;
        $teacher->blood_group = $request->blood_group;
        $teacher->religion = $request->religion;
        $teacher->nationality = $request->nationality;
        $teacher->national_id = $request->national_id;
        $teacher->alternate_email = $request->alternate_email;
        $teacher->alternate_phone = $request->alternate_phone;
        $teacher->personal_website = $request->personal_website;
        $teacher->social_id = $request->social_id;
        $teacher->address = $request->address;
        $teacher->post_office = $request->post_office;
        $teacher->police_station = $request->police_station;
        $teacher->dictrict = $request->dictrict;
        $teacher->division = $request->division;
        $teacher->country = $request->country;
        $teacher->zip_code = $request->zip_code;
        $teacher->degree = $request->degree;
        $teacher->degree_name = $request->degree_name;
        $teacher->university = $request->university;
        $teacher->board = $request->board;
        $teacher->passing_year = $request->passing_year;
        $teacher->class_devision = $request->class_devision;
        $teacher->cgpa = $request->cgpa;
        $teacher->remarks = $request->remarks;
        $teacher->save();
            return response()->json(['message'=>'Teacher Profile Updated Successfully'],200);
        
    }

    public function getTeacher($id)
    {
        $user = Teacher::find($id);
        return response()->json($user);
    }
    public function delete($id)
    {
        Teacher::destroy($id);
        return response()->json(['message'=>'Teacher Info Deleted Successfully'],200);
    }
}
