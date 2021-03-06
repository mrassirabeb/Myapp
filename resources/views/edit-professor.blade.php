 @extends('index')
 @section('content') 

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
                                            <li><span class="bread-blod">Edit Professor</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Basic Information</a></li>
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form method="post" action="{{action('OffresController@update', $id)}}" class="dropzone dropzone-custom needsclick add-professors" enctype="multipart/form-data" >
                                                        @csrf
                                                        <input name="_method" type="hidden" value="PATCH">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="Nom_offre" type="text" class="form-control" value="{{$offre->nom}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="number" class="form-control" value="{{$offre->mobile}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="contrat" class="form-control">
                                                                        <option value="none" selected="" disabled="">Type contrat</option>
                                                                        <option value="0">CDD</option>
                                                                        <option value="1">CDI</option>
                                                                        <option value="1">SIVP</option>
                                                                    </select>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <select name="country" class="form-control">
                                                                            <option value="none" selected="" disabled="">Select country</option>
                                                                            <option value="0">India</option>
                                                                            <option value="1">Pakistan</option>
                                                                            <option value="2">Amerika</option>
                                                                            <option value="3">China</option>
                                                                            <option value="4">Dubai</option>
                                                                            <option value="5">Nepal</option>
                                                                        </select>
                                                                </div>
                                                                
                                                                <div class="form-group alert-up-pd">
                                                                    <input type="file" class="form-control" name="offrephoto"/>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control" value="{{$offre->departement}}">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" value="{{$offre->ddescription}}"></textarea>
                                                                </div>
                                                                
                                                               
                                                                
                                                                <div class="form-group">
                                                                    <input name="website" type="text" class="form-control" placeholder="Website URL">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
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
@endsection