@extends('base')
@section('body') 

<!-- Start Contact -->
			<section id="contact-us" class="contact-us section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Contact Us</h1>
								<p>Pour toute demande de renseignements ou suggestions sur notre site, n’hésitez pas à nous contacter, nous vous répondrons dans les plus brefs délais.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- Contact Form -->
						<div class="col-md-8 col-sm-6 col-xs-12">
							<form>
							                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list mt-b-30">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1></h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="input-knob-dial-wrap">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Full Name</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="Full Name">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="999 99 999 9999 9" placeholder="Email">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Phone number</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="999/99/999/9999/9" placeholder="Phone number">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Company</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="Company">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="99-9999999" placeholder="Subject">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            <div class="input-mask-title">
                                                <label>Message</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                            <div class="input-mark-inner mg-b-22">
                                                <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Message">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        
                    
                
								<button class="btn btn-success" style="color: #fff;background-color: #5cb85c;border-color: #4cae4c;">Submit</button>
							</div>

							</form>
						</div>
						<!--/ End Contact Form -->
						<!-- Contact Address -->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="contact-address">
								<div class="contact">
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-headphones"></i>Telephone</span>
										<p>+216 73 200 848</p>
									</div>
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-envelope"></i>Adresse mail</span>
										<p><a href="mailto:contact@optimatech-group.com">contact@optimatech-group.com</a></p>
									</div>
									<!--/ End Single Address -->
									<!--/ End Single Address -->
									<!-- Single Address -->
									<div class="single-address">
										<span><i class="fa fa-map"></i>Addresse:</span>
										<p>sousse, sousse</p>
									</div>
									<!--/ End Single Address -->
								</div>
							</div>
						</div>
						<!--/ End Contact Address -->
					</div>
				</div>
			</section>
			<!--/ End Contact -->
			
			<!-- Map Section -->
			<div class="map-section">
				<div id="myMap"></div>
			</div>
			<!--/ End Map Section -->
			


@endsection



        <!-- Jquery -->
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<!-- Bootstrap JS -->
		<script src="/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Modernizer JS -->
		<script src="/js/modernizr.min.js" type="text/javascript"></script>
		<!-- Tromas JS -->
		<script src="/js/tromas.js" type="text/javascript"></script>
		<!-- Tromas Plugins -->
		<script src="/js/theme-plugins.js" type="text/javascript"></script>
		<!-- Google Map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>
		<script src="/js/gmap.min.js" type="text/javascript"></script>
		<script src="/js/map-script.js"  type="text/javascript" ></script>
		<!-- Main JS -->
		<script src="/js/main.js" type="text/javascript"></script>
  