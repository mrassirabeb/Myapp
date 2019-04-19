@extends('base')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
@section('body') 
<!-- Start Services -->
		<section id="services" class="services section">
			<div class="container">

				 
        		<p> </p>

				<div class="container"> 
   					<div class="row">  
   						<div class="col-xs-8 col-xs-offset-2"> 
   							
      						<div class="input-group"> 
      							 <input style="margin-top: 10px;margin-bottom: 25px;" type="text" class="form-control" name="search" id="search" placeholder="Search term..."> 
      								<span class="input-group-btn"> 
       									 <button style="margin-top: 10px;margin-bottom: 25px;height: 37px" class="btn btn-default" type="submit"><span style="align-items: center;" class="fa fa-search"></span>
      								</span> 
      						</div>
      							<h3 align="center">Total Data : <span id="total_records"></span></h3>
      					</div> 
   					</div> 
				</div>  
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<h1>NOS OFFRES</h1>
							<p></p>
						</div>
					</div> 
				</div>
				
				<p> </p>
				<div class="courses-area">
			        <div class="container-fluid">
						<div class="row" id="1">
								<!-- Single Service -->
							@foreach($stages as $stage)
									<div style="margin-bottom: 20px;" class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						                        <div class="courses-inner res-mg-b-30">
						                            <div class="courses-title">
						                                <a href="#"><img style="height: 150px;width: 200px;" src="{{url('uploads/'.$stage->filename)}}" alt=""></a>
						                                <h2>{{$stage->nom}}</h2>
						                            </div>
						                            <div class="courses-alaltic">
						                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
						                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
						                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> 500</span>
						                            </div>
						                            <div class="course-des">
						                                <p><span><i class="fa fa-clock"></i></span> <b>Departement:</b> {{$stage->departement}}</p>
						                                <p><span><i class="fa fa-clock"></i></span> <b>Professor:</b> Jane Doe</p>
						                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> 100+</p>
						                            </div>
						                            <div class="product-buttons">
						                                <a href="{{action('OptimaController@show', $stage['id'])}}"><button type="button" class="button-default cart-btn">Read More</button></a>
						                            </div>
						                        </div></div>
					        @endforeach        
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->



@endsection
<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('live_searche.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('#1').html(data.table_data);
    $('#total_records').text(data.total_data);

   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
