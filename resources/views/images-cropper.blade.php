@extends('indexutilisateur')    
@section('content') 
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Image Cropper</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Basic Image cropper Start -->
        <div class="dual-list-box-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline10-list shadow-reset">
                            <div class="sparkline10-hd">
                                <div class="main-sparkline10-hd">
                                    <h1>Profile Picture</h1>
                                </div>
                            </div>
                            <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="dual-list-box-inner">
                                                <div class="row">
                                                    <form method="post" action="/upload-profile"  enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="">
                                                            <img style="height: 500px;width: 500px;" id="imgLogo" src="{{url('uploads/'.$user->ProfilePath)}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="preview-img-pro-ad">
                                                            <div class="img-croper-fl">
                                                                
                                                                <div class="common-pre-dz">
                                                                    <h4 class="comon-method">Comon method</h4>
                                                                    <p>
                                                                        You can upload new image to crop.
                                                                    </p>
                                                                    <div class="btn-group images-cropper-pro">
                                                                        
                                                                             <input type="file" id="input" name="file" class="">
                                                                            <div class="form-group alert-up-pd">
                                                                    
                                                                            </div>
                                                                        <button type="submit" class="btn btn-primary">Download</button>
                                                                    </div>
                                                                </div>
                                                             </div>
                                                            <p><h4 class="other-method">First Name :  {{$cv[0]->firstname}} </h4></p>
                                                            <h4 class="other-method">Last Name : {{$cv[0]->lastname}} </h4>
                                                            <h4 class="other-method">Email : {{ Auth::user()->email }} </h4>
                                                            <h4 class="other-method">Adresse : {{$cv[0]->adresse}} </h4>
                                                            <h4 class="other-method">city : {{$cv[0]->city}} </h4>
                                                            <h4 class="other-method">Age : {{$cv[0]->age}} </h4>
                                                            <h4 class="other-method">Phone : {{$cv[0]->tel}} </h4>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Image cropper End-->
<script >
    
 /*           $(function () {
        $("#inputFile").change(function () {
            readURL(this);
        });
    });


    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                //alert(e.target.result);
                $('#imgLogo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    } */
</script>        
   
@endsection


