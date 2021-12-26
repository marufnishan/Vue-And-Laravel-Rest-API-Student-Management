<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request){
        $validate = Validator::make($request->all(),[
            'email'=> 'required|email|exists:users',
            'password'=> 'required'
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }

        $reqData = request()->only('email','password');

        if(Auth::attempt($reqData))
        {
            $user = Auth::user();
            $data['token_type'] = 'Bearer';
            $data['access_token'] = $user->createToken('userToken')->accessToken;
            $data['user'] =$user;
            
            return response()->json($data,200);
        }
        else{
            return response()->json([
                'loginFailed'=> 'Email or Password Incorrect'
            ],401);
        }
    }


    public function test(){
        return response()->json('okay');
    }
}
