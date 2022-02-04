<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function AddSettings(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
            'name'=> 'required',
            'logo'=> 'required',
            'email'=> 'required',
            'phone'=> 'required',
            'phone2'=> 'required',
            'location'=> 'required',
            'map'=> 'required',
            'twiter'=> 'required',
            'facebook'=> 'required',
            'id'=> 'required',
            'instagram'=> 'required',
            'youtube'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        $settings = Setting::where('id',$request->id)->first();
        if(!$settings)
        {
            $settings = new setting();
            $settings->id = $request->id;
            $settings->name = $request->name;
            $settings->logo = $request->logo;
            $settings->email = $request->email;
            $settings->phone = $request->phone;
            $settings->phone2 = $request->phone2;
            $settings->location = $request->location;
            $settings->map = $request->map;
            $settings->twiter = $request->twiter;
            $settings->facebook = $request->facebook;
            $settings->instagram = $request->instagram;
            $settings->youtube = $request->youtube;
            $settings->save();
            return response()->json(['message'=>'Settings Added Successfully'],200);
        }
        else{
            $setting = Setting::find($request->id);
            $setting->name = $request->name;
            $setting->logo = $request->logo;
            $setting->email = $request->email;
            $setting->phone = $request->phone;
            $setting->phone2 = $request->phone2;
            $setting->location = $request->location;
            $setting->map = $request->map;
            $setting->twiter = $request->twiter;
            $setting->facebook = $request->facebook;
            $setting->instagram = $request->instagram;
            $setting->youtube = $request->youtube;
            $setting->save();
            return response()->json(['message'=>'Settings Added Successfully'],200);
        }

    }

    public function getSettings()
    {
        $user = Setting::find(1);
        return response()->json($user);
    }


    public function AddHomeSlider(Request $request){
        $validate = Validator::make($request->all(),[
            'image'=> 'required',
            'status'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        
            $slider = new HomeSlider();
            $slider->image = $request->image;
            $slider->status = $request->status;
            $slider->save();
            return response()->json(['message'=>'HomeSlider Added Successfully'],200);
    }

    public function EditHomeSlider(Request $request){
        $validate = Validator::make($request->all(),[
            'id'=> 'required',
            'image'=> 'required',
            'status'=> 'required',
        ]);

        if($validate->fails()){
            return response()->json([
                'errors'=>$validate->errors()
            ],422);
        }
        
            $slider = HomeSlider::find($request->id);
            $slider->image = $request->image;
            $slider->status = $request->status;
            $slider->save();
            return response()->json(['message'=>'HomeSlider Updated Successfully'],200);
    }

    public function deleteHomeSlider($id)
    {
        HomeSlider::destroy($id);
        return response()->json(['message'=>'HomeSlider Deleted Successfully'],200);
    }
}
