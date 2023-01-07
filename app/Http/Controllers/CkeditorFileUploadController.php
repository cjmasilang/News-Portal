<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CkeditorFileUploadController extends Controller
{
public function create()
{
return view('editor');
}
    public function store(Request $request){
        if($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();

        $fileName = $fileName.'_'.time().'.'.$extension;
        $request->file('upload')->move(public_path('pages'), $fileName);
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('/public/pages/'.$fileName);

        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url')</script>";
        echo $response;
        }
    }
}
