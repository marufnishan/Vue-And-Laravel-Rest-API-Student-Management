<?php

namespace App\Http\Controllers\Api\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentClassController extends Controller
{
    public function addclass(Request $request){
        $validate = Validator::make($request->all(),[
            'name'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        else{

            $sclass = new StudentClass();
            $sclass->name = $request->name;
            $sclass->save();
            return response()->json(['message'=>'Class Added Successfully'],200);
        }
    }

    public function editclass(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
            'name'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        else{

            $sclass = StudentClass::find($request->id);
            $sclass->name = $request->name;
            $sclass->update();
            return response()->json(['message'=>'Class Updated Successfully'],200);
        }
    }

    public function delete($id)
    {
        StudentClass::destroy($id);
        return response()->json(['message'=>'User Info Deleted Successfully'],200);
    }
}
