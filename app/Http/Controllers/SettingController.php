<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //
    public function setting_list(){
        $about = Setting::where('type', 'about_us')->first();
        $setting = Setting::all();
        return view('admin.setting.setting_list',compact('setting'));
    }

    public function about_add(){
        $about = Setting::where('type', 'about_us')->first();
        $setting = Setting::all();
        return view('admin.setting.setting',compact('setting'));
    }

    public function about_add_post(Request $request){
        // return $request->all();
        // return $set = Setting::find(1);
        $set = Setting::where('type', $request->type)->first();
   
        if($set){
            // return $set->id;
            $about =  Setting::find($set->id);
            $about->type     = $request->type;
            $about->message     = $request->message;
            $about->save();
             return response()->json($about);
        }else{
           $about = new Setting();
           $about->type     = $request->type;
           $about->message     = $request->message;
           $about->save();
            return response()->json($about);
        }
    }

}
