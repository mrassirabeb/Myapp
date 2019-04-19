<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimaController extends Controller
{
        public function show($id)
    {
        $offre = \App\Offre::find($id);
        return view('details_offre',compact('offre','id'));
    }
         public function showstage($id)
    {
        $offre = \App\Stage::find($id);
        return view('details_stage',compact('offre','id'));
    }
}
