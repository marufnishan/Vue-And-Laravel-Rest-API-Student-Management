<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(Request $request){
        $validate = Validator::make($request->all(),[
            'email'=> 'required|email|exists:users',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        
        
        $email = $request->email;
        $token = Str::random(65);

        DB::table('password_resets')->insert([
            'email' =>$email,
            'token' =>$token,
            'created_at' =>now()->addMinutes(30)
        ]);

        // mail  send

        Mail::send('mail.password_reset',['token' => $token],function($msg) use ($email){
            $msg ->to($email);
            $msg->subject('You have requested to reset your password');
        });
        return response()->json([
            'message' => 'Please Check Your Email To Reset Password'
         ]);
    }
}
