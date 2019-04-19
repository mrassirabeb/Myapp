<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class StageController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $stages=\App\Stage::all();
        return view('all-stages',compact('stages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('ajouter-stage'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cover = $request->file('offrephoto');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

        $stage= new \App\Stage;
        $stage->nom=$request->get('Nom_offre');
        $stage->mobile=$request->get('mobileno');
        $stage->contry=$request->get('country');
        $stage->departement=$request->get('department');
        $stage->ddescription=$request->get('description');
        $stage->website=$request->get('website'); 
        $stage->mime = $cover->getClientMimeType();
        $stage->original_filename = $cover->getClientOriginalName();
        $stage->filename = $cover->getFilename().'.'.$extension;
        $stage->save();
        $stage->save();
        
        return redirect('stages')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stage = \App\Stage::find($id);
        return view('stage-details',compact('stage','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stage = \App\Stage::find($id);
        return view('edit-stage',compact('stage','id'));
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
        $stage= \App\Stage::find($id);
        $stage->nom=$request->get('Nom_offre');
        $stage->mobile=$request->get('mobileno');
        $stage->contry=$request->get('country');
        $stage->departement=$request->get('department');
        $stage->ddescription=$request->get('description');
        $stage->website=$request->get('website');
        $stage->save();
        return redirect('stages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stage = \App\Stage::find($id);
        $stage->delete();
        return redirect('stages')->with('success','Information has been  deleted');
    }
}
