<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Cv;
use Illuminate\Support\Facades\DB; 
class CvController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $file = Cv::where('userid',Auth::user()->id)->get();
       
        return view('pdf-viewer',compact('file'));
      
    }
        public function index1()
    {
        $cv = Cv::where('userid',Auth::user()->id)->get();
       
        return view('basic-form-element',compact('cv'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        

        

        
        $id=Auth::user()->id;
        
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        $cv = new \App\Cv;
        $cv->firstname=$request->get('firstname');
        $cv->lastname=$request->get('lastname');
        $cv->adresse=$request->get('adresse');
        $cv->city=$request->get('city');
        $cv->age=$request->get('age');
        $cv->typeemploi=$request->get('typeemploi');
        $cv->categories=$request->get('categories'); 
        $cv->niveauetude=$request->get('niveauetude');
        $cv->tel=$request->get('tel');
        $cv->userid=$id;
        $cv->mime = $cover->getClientMimeType();
        $cv->original_filename = $cover->getClientOriginalName();
        $cv->filename = $cover->getFilename().'.'.$extension;
        $cv->save();
        
        return redirect('basic-form-element'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
