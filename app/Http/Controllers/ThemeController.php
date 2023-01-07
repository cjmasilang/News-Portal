<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ThemeController extends Controller
{
    // Theme Settings
    public function theme(){
        Session::put('admin_page', 'theme');
        $theme = Theme::first();
        return view ('admin.theme.theme', compact('theme'));
    }

    // Update Theme
    public function themeUpdate(Request  $request, $id){
        $data = $request->all();
        $theme = Theme::findOrFail($id);
        $theme->site_title = $data['site_title'];


        $slug = Str::slug($data['site_title']);
        $random = rand(1,999999);
        if($request->hasFile('header_logo')){
            $image_tmp = $request->file('header_logo');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $slug . '-' . $random . '.' . $extension;
                $image_path = 'public/uploads/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $theme->header_logo = $filename;
            }
        }

        $slug = "footer-logo";
        $random = rand(1,999999);
        if($request->hasFile('footer_logo')){
            $image_tmp = $request->file('footer_logo');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $slug . '-' . $random . '.' . $extension;
                $image_path = 'public/uploads/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $theme->footer_logo = $filename;
            }
        }


        $slug = "favicon";
        $random = rand(1,999999);
        if($request->hasFile('favicon')){
            $image_tmp = $request->file('favicon');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = $slug . '-' . $random . '.' . $extension;
                $image_path = 'public/uploads/' . $filename;
                Image::make($image_tmp)->save($image_path);
                $theme->favicon = $filename;
            }
        }

        $theme->save();
        Session::flash('success_message', 'Theme Settings Has Been Updated Successfully');
        return redirect()->back();
    }
}

