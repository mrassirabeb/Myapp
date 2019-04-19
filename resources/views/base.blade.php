<!DOCTYPE html>
<html>
    <head>  
      
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="SITE KEYWORDS HERE" />
	<meta name="description" content="">
	<meta name='copyright' content='codeglim'>

	<!-- Title Tag -->
	<title>Optima Tech</title>
	@yield('css')
	

  	<link href="../../oxy/css/responsive.css" rel="stylesheet">

	<!-- Favicon -->
	<link rel="icon" type="/image/png" href="../../public1/images/favicon.png">

	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../public1/css/bootstrap.min.css">

	<!-- Tromas CSS -->
	<link rel="stylesheet" href="../../public1/css/theme-plugins.css">
	<link rel="stylesheet" href="../../public1/css/style.css">
	<link rel="stylesheet" href="../../public1/css/responsive.css">

	<!-- Tromas Color -->
	<link rel="stylesheet" href="../../public1/css/skin/skin2.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="#" id="tromas">
        
       
    </head>
    <body>
        <!-- Start Header -->
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<!-- Logo -->
						<div class="logo">
							<a href="/"><img src="../../public1/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<!-- Header Widget -->
						<div class="header-widget">
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-clock-o"></i>
								<h4>Temps d'ouverture</h4>
								<p>Lun-Sam: 9.00-18.00</p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-envelope"></i>
								<h4>Adresse mail</h4>
								<p><a href="mailto:contact@optimatech-group.com">contact@optimatech-group.com</a></p>
							</div>
							<!--/ End Single Widget -->
							<!-- Single Widget -->
							<div class="single-widget">
								<i class="fa fa-phone"></i>
								<h4>Telephone</h4>
								<p>+216 73 200 848</p>
							</div>
							<!--/ End Single Widget -->
						</div>
						<!--/ End Header Widget -->
					</div>
				</div>
			</div>
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="nav-area">
								<!-- Main Menu -->
								<nav class="mainmenu">
									<div class="collapse navbar-collapse">
										<ul class="nav navbar-nav">
											<li class=""><a href="/">Accueil</a>
											<li class=""><a href="/services">services</a></li>
											<li class="" ><a href="/project">Projects</i></a></li>
											<li class="" ><a href="/about-us">About Us</a></li>
											<li class="" ><a href="/emplois">Emplois</a></li>
											<li class="" ><a href="/contact">Contact</a></li>
											<li style="" class="" ><a href="/login">s'authentifier</a></li>
										</ul>
									</div>
								</nav>
								<!--/ End Main Menu -->
								<!-- Social -->
								<ul style="margin-right: 150px;" class="social">
									<li><a href="https://www.linkedin.com/company/optima-technologie/"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="https://www.facebook.com/Optima.technologie/"><i class="fa fa-facebook"></i></a></li>
									<li class="active"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>
								<!--/ End Social -->
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->

        @yield('body')

        <!-- Start Footer -->
		<footer id="footer" class="footer">
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- copyright -->
							<div class="copyright">
								<p>&copy; 2017 All Right Reserved. Design & Developed By <a href="#">Optima Tech</a></p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--/ End footer -->

        
        <!-- Jquery -->
		<script src="../../public1/js/jquery.min.js" type="text/javascript"></script>
		<!-- Bootstrap JS -->
		<script src="../../public1/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- Modernizer JS -->
		<script src="../../public1/js/modernizr.min.js" type="text/javascript"></script>
		<!-- Tromas JS -->
		<script src="../../public1/js/tromas.js" type="text/javascript"></script>
		<!-- Tromas Plugins -->
		<script src="../../public1/js/theme-plugins.js" type="text/javascript"></script>
		<!-- Google Map JS -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM" type="text/javascript"></script>
		<script src="../../public1/js/gmap.min.js" type="text/javascript"></script>
		<!-- Main JS -->


		<script type="text/JavaScript">

			function disableselect(e){
					return false
				}
			function reEnable(){
					return true
				}
			document.onselectstart=new Function ("return false")
			if (window.sidebar){
				document.onmousedown=disableselect
				document.onclick=reEnable
			}
		</script>
        

		<script src="../../public1/js/main.js" type="text/javascript"></script>
			<script>
			function clickIE() {if (document.all) {return false;}}
			function clickNS(e) {if 
			(document.layers||(document.getElementById&&!document.all)) {
			if (e.which==2||e.which==3) {return false;}}}
			if (document.layers) 
			{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
			else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

			document.oncontextmenu=new Function("return false")

		</script>
	

    </body>
</html>
