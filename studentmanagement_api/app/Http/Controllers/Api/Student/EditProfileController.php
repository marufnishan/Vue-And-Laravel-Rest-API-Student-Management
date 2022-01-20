<?php

namespace App\Http\Controllers\Api\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EditProfileController extends Controller
{

    public function update(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
            'image' => 'required',
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
            'father_name'=> 'required',
            'father_phn'=> 'required',
            'father_occupation'=> 'required',
            'father_income' => 'required',
            'mother_name'=> 'required',
            'mother_phn'=> 'required',

            'mother_occupation'=> 'required',
            'mother_income'=> 'required',
            'local_gurdian_name' => 'required',
            'local_gurdian_phn'=> 'required',
            'local_gurdian_address'=> 'required',
            'address'=> 'required',
            'post_office'=> 'required',
            'police_station' => 'required',
            'dictrict'=> 'required',
            'division'=> 'required',

            'country'=> 'required',
            'zip_code'=> 'required',
            'per_address' => 'required',
            'per_post_office'=> 'required',
            'per_police_station'=> 'required',
            'per_dictrict'=> 'required',
            'per_division' => 'required',
            'per_country'=> 'required',
            'per_zip_code'=> 'required',

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
        $studentProfile = Student::where('id',$request->id)->first();
        if(!$studentProfile)
        {
            $student = new student();
            $student->id = $request->id;
            $student->user_id = Auth::user()->id;
            $student->save();
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
            return response()->json(['message'=>'Profile Updated Successfully'],200);
        
    }
}
