<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 use Illuminate\Database\Eloquent\Model;
class OffreuserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $detailsoffre = DB::table('postuleroffres')
            ->where('userid', '=', Auth::user()->id)
            ->join('offres', 'postuleroffres.offreid', '=', 'offres.id')            
            ->select('offres.nom','offres.departement','offres.website','offres.filename','offres.contry','offres.contrat')
            ->get();
                
        return view('library-assets',compact('detailsoffre'));
        
    }
     public function index1()
    {
       $detailsoffre = DB::table('postulerstages')
            ->where('userid', '=', Auth::user()->id)
            ->join('stages', 'postulerstages.stageid', '=', 'stages.id')            
            ->select('stages.nom','stages.departement','stages.website','stages.filename','stages.contry')
            ->get();
                
        return view('stages_library',compact('detailsoffre'));
        
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
        //
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
