<?php

namespace App\Http\Controllers\Api\Management;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

class HomeController extends Controller
{
    public function AddSettings(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'logo' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'phone2' => 'required',
            'location' => 'required',
            'map' => 'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ], 422);
        }
        $settings = Setting::where('id', $request->id)->first();
        if (!$settings) {
            $settings = new setting();
            $settings->id = $request->id;
            $settings->name = $request->name;
            $name = time() . '.' . explode('/', explode(':', substr($request->logo, 0, strpos($request->logo, ';')))[1])[1];
            Image::make($request->logo)->save(public_path('img/logo/') . $name);
            $settings->logo = $name;
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
            return response()->json(['message' => 'Settings Added Successfully'], 200);
        }
        /* else{
            $setting= Setting::find($request->id);
            if($setting->logo){
                unlink(public_path('img/HomeSlider/').$setting->logo);
            }
            else{
            $settings = Setting::find($request->id);
            $settings->name = $request->name;
            $name = time().'.' . explode('/', explode(':', substr($request->logo, 0, strpos($request->logo, ';')))[1])[1];
            Image::make($request->logo)->save(public_path('img/HomeSlider/').$name);
            $settings->logo = $name;
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
        } */
    }

    public function EditSettings(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
           
            'email' => 'required',
            'phone' => 'required',
            'phone2' => 'required',
            'location' => 'required',
            'map' => 'required',
            'twiter' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ], 422);
        } else {

            $settings = Setting::find($request->id);
            $str = $request->logo;
            $pattern = "/base64/i";
            $val = preg_match($pattern, $str);

            
            if ($val) {
                unlink(public_path('img/logo/').$settings->logo);
                $name = time() . '.' . explode('/', explode(':', substr($request->logo, 0, strpos($request->logo, ';')))[1])[1];
                Image::make($request->logo)->save(public_path('img/logo/') . $name);
                $settings->logo = $name;
            }else{
                
                $settings->logo = $request->logo;
            }
            $settings->name = $request->name;
            $settings->email = $request->email;
            $settings->phone = $request->phone;
            $settings->phone2 = $request->phone2;
            $settings->location = $request->location;
            $settings->map = $request->map;
            $settings->twiter = $request->twiter;
            $settings->facebook = $request->facebook;
            $settings->instagram = $request->instagram;
            $settings->youtube = $request->youtube;

            $settings->update();
            return response()->json(['message' => 'Settings Added Successfully'], 200);
        }
    }

    public function getSettings()
    {
        $user = Setting::find(1);
        return response()->json($user);
    }


    public function AddHomeSlider(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'image' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ], 422);
        }
        $slider = new HomeSlider();
        $name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
        Image::make($request->image)->save(public_path('img/HomeSlider/') . $name);
        $slider->image = $name;
        $slider->save();
        return response()->json(['message' => 'HomeSlider Added Successfully'], 200);
    }

    public function getSlider($id)
    {
        $user = HomeSlider::find($id);
        return response()->json($user);
    }

    public function EditHomeSlider(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'id' => 'required',
            'image' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errors' => $validate->errors()
            ], 422);
        }

        $slider = HomeSlider::find($request->id);

        $str = $request->image;
            $pattern = "/base64/i";
            $val = preg_match($pattern, $str);
            if ($val) {
                unlink(public_path('img/HomeSlider/') . $slider->image);
                $name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
                Image::make($request->image)->save(public_path('img/HomeSlider/') . $name);
                $slider->image = $name;
            }else{
                
                $slider->image = $request->logo;
            }
        $slider->save();
        return response()->json(['message' => 'HomeSlider Updated Successfully'], 200);
    }

    public function deleteHomeSlider($id)
    {
        $slider = HomeSlider::find($id);
        if ($slider->image) {
            unlink(public_path('img/HomeSlider/') . $slider->image);
        }

        $slider->delete();
        return response()->json(['message' => 'HomeSlider Deleted Successfully'], 200);
    }
}
