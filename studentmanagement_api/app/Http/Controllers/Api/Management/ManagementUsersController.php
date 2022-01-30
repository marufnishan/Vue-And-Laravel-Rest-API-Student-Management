<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManagementUsersController extends Controller
{
    public function updateUtype(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'id' => 'required',
            'utype' => 'required',
        ]);
        
        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $user = User::find($request->id);
        $user->utype =$request->utype;
        $user->save();
        return response()->json(['message'=>'User Type Updated Successfully'],200);
    }
}
