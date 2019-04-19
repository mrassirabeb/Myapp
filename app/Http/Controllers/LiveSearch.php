<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use DB;
class LiveSearch extends Controller
{
      function index()
    { 
    	$stages=\App\Stage::all();
        return view('stage_dispo',compact('stages'));
    }


    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('stages')
         ->where('nom', 'like', '%'.$query.'%')
         ->orWhere('mobile', 'like', '%'.$query.'%')
         ->orWhere('contry', 'like', '%'.$query.'%')
         ->orWhere('ddescription', 'like', '%'.$query.'%')
         ->get();
         
      }
      else 
      {
       $data = DB::table('stages')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
       	$lien= 'stage/'.$row->id;
      
        $output .= '<div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                              <div class="courses-inner res-mg-b-30">
                                  <div class="courses-title">
                                      <a href="#"><img style="height: 150px;width: 200px;" src="uploads/'.$row->filename.'" alt=""></a>
                                      <h2>'.$row->nom.'</h2>
                                  </div>
                                  <div class="courses-alaltic">
                                      <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                      <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                      <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
                                  </div>
                                  <div class="course-des">
                                      <p><span><i class="fa fa-clock"></i></span> <b>Departement : </b>'.$row->departement.'</p>
                                      <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
                                      <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
                                  </div>
                                  <div class="product-buttons">
                                      <a href="'.$lien.'"><button type="button" class="button-default cart-btn">Read More</button></a>
                                  </div>
                              </div>
                          </div>';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

 
    
}
