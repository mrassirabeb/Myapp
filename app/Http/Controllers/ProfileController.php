<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
      
        $user = Auth::user(); 
        $cv = \App\Cv::where('userid','=',Auth::user()->id)->get();      
        return view('images-cropper',compact('user'),compact('cv'));
        
    }

    public function UploadProfilePic(Request $request) 
    {
        $cover = $request->file('file');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));      
        $filename = $cover->getFilename().'.'.$extension;
        \App\User::where('id','=',Auth::user()->id)->update([
                'ProfilePath' => $filename,
            ]);
        
        
        return redirect('images-cropper');
    }
}
