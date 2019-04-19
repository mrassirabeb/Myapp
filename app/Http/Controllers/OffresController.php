<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use Illuminate\Http\Request;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        $offres=\App\Offre::all();
        return view('all-professors',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-professor');
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

        $offre= new \App\Offre;
        $offre->nom=$request->get('Nom_offre');
        $offre->mobile=$request->get('mobileno');
        $offre->contrat=$request->get('contrat');
        $offre->contry=$request->get('country');
        $offre->departement=$request->get('department');
        $offre->ddescription=$request->get('description');
        $offre->website=$request->get('website'); 
        $offre->mime = $cover->getClientMimeType();
        $offre->original_filename = $cover->getClientOriginalName();
        $offre->filename = $cover->getFilename().'.'.$extension;
        $offre->save();
        $offre->save();
        
        return redirect('offres')->with('success', 'Information has been added');
    }

    /** 
     * Display the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = \App\Offre::find($id);
        return view('professor-profile',compact('offre','id'));
    }
       

       public function postuler($id)
    {  
        $cv = \App\Cv::where('userid',Auth::user()->id)->first();
        $nb = \App\Postuleroffre::where('userid',Auth::user()->id)->where('offreid','=',$id)->get();
        if ((count($nb) == 0) && (!is_null($cv['firstname'])) && (!is_null($cv['lastname'])) && (!is_null($cv['adresse'])) && (!is_null($cv['age'])) && (!is_null($cv['typeemploi'])) && (!is_null($cv['filename']))) {
        $postuleroffre = new \App\Postuleroffre;
        $postuleroffre->userid =Auth::user()->id;
        $postuleroffre->offreid = $id;
        $postuleroffre->save();
        return redirect('/basic-form-element')->with('success', 'Postuler avec success');}
        elseif (is_null($cv['firstname']) && (is_null($cv['lastname'])) && (is_null($cv['adresse'])) && (is_null($cv['age'])) && (is_null($cv['typeemploi'])) && (is_null($cv['filename']))) {
        return redirect('/basic-form-element')->with('danger', 'veuillez remplir tous les champs de votre CV SVP');}
        else{
        return redirect('/basic-form-element')->with('success', 'Vous avez deja postuler'); }
    }  


        public function postulerstage($id)
    {  
        $cv = \App\Cv::where('userid',Auth::user()->id)->first();
        $nb = \App\Postulerstage::where('userid',Auth::user()->id)->where('stageid','=',$id)->get();
        if ((count($nb) == 0) && (!is_null($cv['firstname'])) && (!is_null($cv['lastname'])) && (!is_null($cv['adresse'])) && (!is_null($cv['age'])) && (!is_null($cv['typeemploi'])) && (!is_null($cv['filename']))) {
        $postuleroffre = new \App\Postulerstage;
        $postuleroffre->userid =Auth::user()->id;
        $postuleroffre->stageid = $id;
        $postuleroffre->save();
        return redirect('/basic-form-element')->with('success', 'Postuler avec success');}
        elseif (is_null($cv['firstname']) && (is_null($cv['lastname'])) && (is_null($cv['adresse'])) && (is_null($cv['age'])) && (is_null($cv['typeemploi'])) && (is_null($cv['filename']))) {
        return redirect('/basic-form-element')->with('danger', 'veuillez remplir tous les champs de votre CV SVP');}
        else{
        return redirect('/basic-form-element')->with('success', 'Vous avez deja postuler'); }
    } 
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = \App\Offre::find($id);
        return view('edit-professor',compact('offre','id'));
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
        

        $offre= \App\Offre::find($id);
        $cover = $request->file('offrephoto');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
        $offre->nom=$request->get('Nom_offre');
        $offre->mobile=$request->get('mobileno');
        $offre->contrat=$request->get('contrat');
        $offre->contry=$request->get('country');
        $offre->departement=$request->get('department');
        $offre->ddescription=$request->get('description');
        $offre->website=$request->get('website');
        $offre->mime = $cover->getClientMimeType();
        $offre->original_filename = $cover->getClientOriginalName();
        $offre->filename = $cover->getFilename().'.'.$extension;
        $offre->save();
        return redirect('offres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy($id)
    {
        $offre = \App\Offre::find($id);
        $offre->delete();
        return redirect('offres')->with('success','Information has been  deleted');
    }
}
