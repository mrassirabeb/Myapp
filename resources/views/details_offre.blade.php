@extends('base')
@section('body') 

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Course Info | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../..css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/owl.carousel.css">
    <link rel="stylesheet" href="../../css/owl.theme.css">
    <link rel="stylesheet" href="../../css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="../../style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

            <!-- Mobile Menu end -->
           
        <div class="blog-details-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-details-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-blog-single blog-single-full-view">
                                        <div class="blog-image"> 
                                           <center> <a href="#"><img style="width: 200px;" src="{{url('uploads/'.$offre->filename)}}" alt="" />
												</a></center>
                                            <div class="blog-date">
                                                <p><span class="blog-day">20</span> May</p>
                                            </div> 
                                        </div>
                                        <div class="blog-details blog-sig-details">
                                            <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                                <span><a href="#"><i class="fa fa-user"></i> <b>Course Name:</b> Web Development</a></span>
                                                <span><a href="#"><i class="fa fa-heart"></i> <b>Course Price:</b> $3000</a></span>
                                                <span><a href="#"><i class="fa fa-comments-o"></i> <b>Professor Name:</b> Alva Adition</a></span>
                                            </div>
                                            <h1><a class="blog-ht" href="#">{{ $offre->nom }}</a></h1>
                                            <p>{{ $offre->ddescription }}</p>
                                        </div>
                                        <a href="{{action('OffresController@postuler', $offre['id'])}}" class="btn primary">POSTULER MAINTENANT</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="comment-head">
                                        <h3>Comments</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-comment">
                                        <img src="img/contact/1.jpg" alt="" />
                                        <div class="comment-details">
                                            <h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
                                            <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally <span class="mobile-sm-d-n">Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-comment admin-comment">
                                        <img src="img/contact/2.jpg" alt="" />
                                        <div class="comment-details">
                                            <h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
                                            <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally <span class="mobile-sm-d-n">Wes Anderson ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan
                                                Tonx lomo.Shabby.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="user-comment user-coment2">
                                        <img src="img/contact/3.jpg" alt="" />
                                        <div class="comment-details">
                                            <h4>Jonathan Doe 2015 15 July <span class="comment-replay">Replay</span></h4>
                                            <p>Shabby chic selfies pickled Tumblr letterpress iPhone. Wolf vegan retro selvage literally Wes Anderson <span class="mobile-sm-d-n">ethical four loko. Meggings blog chambray tofu pour-over. Pour-over Tumblr keffiyeh, cornhole whatever cardigan Tonx lomo.Shabby.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="lead-head">
                                        <h3>Leave A Comment</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="coment-area">
                                    <form id="comment" action="#" class="comment">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-res-mg-bt">
                                            <div class="form-group">
                                                <input name="name" class="responsive-mg-b-10" type="text" placeholder="Name" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <input name="email" type="text" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                            </div>
                                            <div class="payment-adress comment-stn">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Send</button>
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

    <!-- jquery
		============================================ -->
    <script src="../../js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="../../js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="../../js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="../../js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="../../js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="../../js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="../../js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="../../js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="../../js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="../../js/metisMenu/metisMenu.min.js"></script>
    <script src="../../js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="../../js/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="../../js/calendar/moment.min.js"></script>
    <script src="../../js/calendar/fullcalendar.min.js"></script>
    <script src="../../js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="../../js/jquery.maskedinput.min.js"></script>
    <script src="../../js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="../../js/datepicker/jquery-ui.min.js"></script>
    <script src="../../js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="../../js/form-validation/jquery.form.min.js"></script>
    <script src="../../js/form-validation/jquery.validate.min.js"></script>
    <script src="../../js/form-validation/form-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="../../js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="../../js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="../../js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="../../js/tawk-chat.js"></script>
</body>


@endsection