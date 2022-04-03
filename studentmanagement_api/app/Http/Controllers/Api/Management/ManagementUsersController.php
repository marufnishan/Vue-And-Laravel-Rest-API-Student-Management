<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

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

    public function updateUser(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'id' => 'required',
            'name' => 'required',
            'image' => 'required',
        ]);
        
        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $user = User::find($request->id);
        $user->name =$request->name;

        $str = $request->image;
        $pattern = "/base64/i";
        $val = preg_match($pattern, $str);
        if ($val) {
            unlink(public_path('img/Profile/') .$user->image);
            $name = time().'.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            Image::make($request->image)->save(public_path('img/Profile/').$name);
            $user->image = $name;
        }else{
            
            $user->image = $request->image;
        }
        $user->save();
        return response()->json(['message'=>'User Info Updated Successfully'],200);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function delete($id)
    {
        User::destroy($id);
        return response()->json(['message'=>'User Info Deleted Successfully'],200);
    }
}
