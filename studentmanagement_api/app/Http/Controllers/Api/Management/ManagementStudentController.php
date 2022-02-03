<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagementStudentController extends Controller
{
    public function getStudent($id)
    {
        $user = Student::find($id);
        return response()->json($user);
    }

    public function editStudent(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $student = Student::find($request->id);
        $student->image = $request->image;
        $student->date_of_birth = $request->date_of_birth;
        $student->gender = $request->gender;
        $student->maritial_status = $request->maritial_status;
        $student->blood_group = $request->blood_group;
        $student->religion = $request->religion;
        $student->nationality = $request->nationality;
        $student->national_id = $request->national_id;
        $student->alternate_email = $request->alternate_email;
        $student->alternate_phone = $request->alternate_phone;
        $student->personal_website = $request->personal_website;
        $student->social_id = $request->social_id;
        $student->father_name = $request->father_name;
        $student->father_phn = $request->father_phn;
        $student->father_occupation = $request->father_occupation;
        $student->father_income = $request->father_income;
        $student->mother_name = $request->mother_name;
        $student->mother_phn = $request->mother_phn;
        $student->mother_occupation = $request->mother_occupation;
        $student->mother_income = $request->mother_income;
        $student->local_gurdian_name = $request->local_gurdian_name;
        $student->local_gurdian_phn = $request->local_gurdian_phn;
        $student->local_gurdian_address = $request->local_gurdian_address;
        $student->address = $request->address;
        $student->post_office = $request->post_office;
        $student->police_station = $request->police_station;
        $student->dictrict = $request->dictrict;
        $student->division = $request->division;
        $student->country = $request->country;
        $student->zip_code = $request->zip_code;
        $student->per_address = $request->per_address;
        $student->per_post_office = $request->per_post_office;
        $student->per_police_station = $request->per_police_station;
        $student->per_dictrict = $request->per_dictrict;
        $student->per_division = $request->per_division;
        $student->per_country = $request->per_country;
        $student->per_zip_code = $request->per_zip_code;
        $student->degree = $request->degree;
        $student->degree_name = $request->degree_name;
        $student->university = $request->university;
        $student->board = $request->board;
        $student->passing_year = $request->passing_year;
        $student->class_devision = $request->class_devision;
        $student->cgpa = $request->cgpa;
        $student->remarks = $request->remarks;
        $student->save();
            return response()->json(['message'=>'Student Profile Updated Successfully'],200);
        
    }

    public function delete($id)
    {
        Student::destroy($id);
        return response()->json(['message'=>'Student Info Deleted Successfully'],200);
    }
}
