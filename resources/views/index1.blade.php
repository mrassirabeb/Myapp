@extends('base')
	<!-- oxygene
        ============================================ -->
@section('css')
<link href="../../oxy/css/main.css" rel="stylesheet">
@endsection
  
@section('body')
<!-- Start Hero Area -->
		<section style="" class="hero-area">
			<div class="slider-one">
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('../../public1/images/slider/slider-bg1.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text">
									<h1 style="color: white;"><span style="color: black;"  class="short">L'innovation est notre instrument spécifique</span>Optima Tech</h1>
									<p style="color: black;">Optima-Tech est une entreprise spécialisée dans le développement informatique . Elle fournit un centre de services de niveau international pour accompagner les éditeurs de logiciels, les sociétés de services (SSII), les directions de système d’information (DSI) ou encore les startups innovatrices dans la mise en œuvre de leurs projets informatiques les plus ambitieux.</p>
								</div>
								<!--/ End SLider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('../../public1/images/slider/slider-bg2.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text right">
									<h1 style="color: white;"><span style="color: black;" class="short">La perfection est un chemin, et pas une fin ...</span>Optima Tech</h1>
									<div class="slide-btn">
										<a href="/contact" class="btn primary">Contact Us</a>
									</div>
								</div>
								<!--/ End SLider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('../../public1/images/slider/slider-bg3.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<!-- Slider Text -->
								<div class="slide-text">
									<h1 style="color: white;"><span style="color: black;" class="short">L'urgent est fait, l'impossible est en cours, pour les miracles prévoyez un délai !</span>Optima Tech</h1>
									<div class="slide-btn">
										<a href="#projects" class="btn primary">Nos Projets<i class="fa fa-long-arrow-down"></i></a>
									</div>
								</div>
								<!--/ End SLider Text -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Area -->


		<!-- Start Features -->
		<section class="features">
			<div class="container">
				<div class="row">
					<!-- Features Single -->
					<div class="col-md-4 col-sm-4 col-xs-12 features-single">
						<i class="fa fa-meetup"></i>
						<h2>01/ Optima Tech</h2>
						<p>L'innovation est notre instrument spécifique</p>
					</div>
					<!--/ End Features Single -->
					<!-- Features Single -->
					<div class="col-md-4 col-sm-4 col-xs-12 features-single active ">
						<i class="fa fa-code"></i>
						<h2>02/ Optima Tech</h2>
						<p>La perfection est un chemin, et pas une fin ...</p>
					</div>
					<!--/ End Features Single -->
					<!-- Features Single -->
					<div class="col-md-4 col-sm-4 col-xs-12 features-single">
						<i class="fa fa-sellsy"></i>
						<h2>03/ Optima Tech</h2>
						<p>L'urgent est fait, l'impossible est en cours, pour les miracles prévoyez un délai !</p>
					</div>
					<!--/ End Features Single -->
				</div>
			</div>
		</section>
		<!--/ End Features -->

		<!-- Start Services -->
		<section id="services" class="services section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<h1>nos services</h1>
							<p>Optima Tech est une SSII Tunisienne  spécialisée en développement  web,  mobile et logiciels sur mesure.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Single Service -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-services">
							<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
							<div class="icon two"><i class="fa fa-globe" aria-hidden="true"></i></div>
							<h2><a href="service-single.html">Web &amp; SEO</a></h2>
							<p>Optima Tech est spécialisé dans le développement &amp; seo web avec des milliers de projets réussis</p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-services">
							<div class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
							<div class="icon two"><i class="fa fa-mobile" aria-hidden="true"></i></div>
							<h2><a href="service-single.html">Mobile</a></h2>
							<p>Optima Tech vous propose son expertise dans l'are de développement mobile (Android &amp; IOS) </p>
						</div>
					</div>
					<!--/ End Single Service -->
					<!-- Single Service -->
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="single-services">
							<div class="icon"><i class="fa fa-window-maximize" aria-hidden="true"></i></div>
							<div class="icon two"><i class="fa fa-window-maximize" aria-hidden="true"></i></div>
							<h2><a href="service-single.html">Logiciels sur mesure</a></h2>
							<p>Optima Tech est reconnue par la qualité de ses applications: Apps de gestion, Open ERP, Embarqué... </p>
						</div>
					</div>
					<!--/ End Single Service -->
				</div>
			</div>
		</section>
		<!--/ End Services -->
		<section id="projects" class="projects section">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-title">
								<h1>Nos Projets</h1>
								<p></p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<!-- project Nav -->
							<div class="project-nav">
								<ul class="cbp-l-filters-work" id="project-menu">
									<li data-filter="*" class="cbp-filter-item active">E-commerce<div class="cbp-filter-counter"></div></li>  
									<li data-filter=".webdesign" class="cbp-filter-item">Web &amp; SEO <div class="cbp-filter-counter"></div></li>
									<li data-filter=".development" class="cbp-filter-item">Mobile<div class="cbp-filter-counter"></div></li>
									<li data-filter=".branding" class="cbp-filter-item">Logiciels sur mesure<div class="cbp-filter-counter"></div></li>
									<li data-filter=".package" class="cbp-filter-item">Design<div class="cbp-filter-counter"></div></li>
									
								</ul>  		
							</div>
							<!--/ End project Nav -->
						</div>
					</div>					
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="project-item" class="cbp">
								<div class="cbp-item  webdesign development video branding package">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/1.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Powerfull Theme</a><span class="category">Development</span></h4>
											</div>
											<div class="button">
												<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="btn video-play cbp-lightbox"><i class="fa fa-play"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div> 
									<!--/ End Single Project -->
								</div>
								<div class="cbp-item  webdesign branding package">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/2.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Crazy Design</a><span class="category">Branding</span></h4>
											</div>
											<div class="button">
												<a data-fancybox="portfolio" href="images/project/2.jpg" class="btn"><i class="fa fa-photo"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
									<!--/ End Single Project -->
								</div>
								<div class="cbp-item  webdesign development video">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/3.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Bootstrap Framework</a><span class="category">Development</span></h4>
											</div>
											<div class="button">
												<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="btn video-play cbp-lightbox"><i class="fa fa-play"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
									<!--/ End Single Project -->
								</div>
								<div class="cbp-item branding development">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/4.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Fully Responsive</a><span class="category">Branding</span></h4>
											</div>
											<div class="button">
												<a data-fancybox="portfolio" href="images/project/4.jpg" class="btn"><i class="fa fa-photo"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
									<!--/ End Single Project -->
								</div>
								<div class="cbp-item  webdesign development video">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/5.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Easy To Use</a><span class="category">Development</span></h4>
											</div>
											<div class="button">
												<a href="https://www.youtube.com/watch?v=E-2ocmhF6TA" class="btn video-play cbp-lightbox"><i class="fa fa-play"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
									<!--/ End Single Project -->
								</div>
								<div class="cbp-item  webdesign development branding">
									<!-- Single Project -->
									<div class="project-single">
										<div class="project-inner">
											<div class="project-head">
												<img src="images/project/6.jpg" alt="#">
											</div>
											<div class="project-bottom">
												<h4><a href="project-single.html">Modern Design</a><span class="category">Printing</span></h4>
											</div>
											<div class="button">
												<a data-fancybox="portfolio" href="images/project/6.jpg" class="btn"><i class="fa fa-photo"></i></a>
												<a href="project-single.html" class="btn"><i class="fa fa-link"></i></a>
											</div>
										</div>
									</div>
									<!--/ End Single Project -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		
<!--		
<section style="height: 400px;" id="twitter" class="parallax">
    <div>
      <div class="container">
        <div style="margin-top:50px;" class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class=" text-center">
              <i class="fa "></i>
              <h2>Vous avez un projet que vous voulez lancer?</h2>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2 style="margin-top: 15px; color: red;">OPTIMA TECH </h2><h4 style="margin-top: 15px;"> </h4>
                </div>
                <div class="slide-btn">
					<a style="margin-top: 50px;" href="/contact" class="btn primary">Contact Us</a>
				</div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section> -->

		<!-- Start Counter -->
		<div id="counter" class="counter section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Counter-->
						<div class="counter-single">
							<div class="icon">
								<i class="fa fa-globe" aria-hidden="true"></i>
							</div>
							<div class="s-info">
								<span class="number">86</span>
								<p>applications web</p>
							</div>
						</div>
						<!--/ End Single Counter-->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Counter-->
						<div class="counter-single">
							<div class="icon">
								<i class="fa fa-window-maximize" aria-hidden="true"></i>
							</div>
							<div class="s-info">
								<span class="number">26</span>
								<p>Logiciels sur mesure</p>
							</div>
						</div>
						<!--/ End Single Counter-->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Counter-->
						<div class="counter-single">
							<div class="icon">
								<i class="fa fa-mobile" aria-hidden="true"></i>
							</div>
							<div class="s-info">
								<span class="number">68</span>
								<p>application mobile </p>
							</div>
						</div>
						<!--/ End Single Counter-->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Counter-->
						<div class="counter-single">
							<div class="icon">
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
							<div class="s-info">
								<span class="number">4</span>
								<p>projets en cours</p>
							</div>
						</div>
						<!--/ End Single Counter-->
					</div>
				</div>
			</div>
		</div>
		<!--/ End Counter -->

		<!-- Start Team -->
		<section style="margin-top: 40px;" id="team" class="team section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<h1>Meet The Team</h1>
							<p>Contry to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece Distinctio tenetur,
								dolores aperiam, quasi perferendis nemo mollitia</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Team -->
						<div class="single-team one default">
							<!-- Team Head -->
							<div class="t-head">
								<img src="../../public1/images/team/team1.jpg" alt="#">
								<div class="t-hover">
									<ul class="t-social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- Team Bottom -->
							<div class="t-bottom">
								<div class="t-icon">
									<a href="#team1"><i class="fa fa-plus"></i></a>
								</div>
								<h2 class="t-name">Angel Rimu</h2>
								<p class="what">Creative</p>
							</div>
						</div>
						<!-- End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Team -->
						<div class="single-team two default">
							<!-- Team Head -->
							<div class="t-head">
								<img src="../../public1/images/team/team2.jpg" alt="#">
								<div class="t-hover">
									<ul class="t-social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- Team Bottom -->
							<div class="t-bottom">
								<div class="t-icon">
									<a href="#team2"><i class="fa fa-plus"></i></a>
								</div>
								<h2 class="t-name">Shakil Hossain</h2>
								<p class="what">Developer</p>
							</div>
						</div>
						<!-- End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Team -->
						<div class="single-team three default">
							<!-- Team Head -->
							<div class="t-head">
								<img src="../../public1/images/team/team3.jpg" alt="#">
								<div class="t-hover">
									<ul class="t-social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- Team Bottom -->
							<div class="t-bottom">
								<div class="t-icon">
									<a href="#team3"><i class="fa fa-plus"></i></a>
								</div>
								<h2 class="t-name">Sufia Mizan</h2>
								<p class="what">Branding</p>
							</div>
						</div>
						<!-- End Single Team -->
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<!-- Single Team -->
						<div class="single-team four default">
							<!-- Team Head -->
							<div class="t-head">
								<img src="../../public1/images/team/team4.jpg" alt="#">
								<div class="t-hover">
									<ul class="t-social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-behance"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									</ul>
								</div>
							</div>
							<!-- Team Bottom -->
							<div class="t-bottom">
								<div class="t-icon">
									<a href="#team4"><i class="fa fa-plus"></i></a>
								</div>
								<h2 class="t-name">SM Jehad</h2>
								<p class="what">CEO/Officer</p>
							</div>
						</div>
						<!-- End Single Team -->
					</div>
				</div>
				<!-- Team Detailes One -->
				<div id="team1" class="team-details  one">
					<a href="#team1" class="cross"><i class="fa fa-remove"></i></a>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-team default">
								<div class="t-head">
									<img src="../../public1/images/team/team1.jpg" alt="#">
									<div class="t-hover">
										<ul class="t-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Angel Rimu</h2>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat
								volutpat. Phasellus lobortis erat vitae fringilla malesuada.</p>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh.</p>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Creative Idea</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span>73%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Web Resource</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"><span>85%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Success Rate</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"><span>60%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">UI/UX Design</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span>90%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Team Detailes One -->
				<!-- Team Detailes two -->
				<div id="team2" class="team-details  two">
					<a href="#team2" class="cross"><i class="fa fa-remove"></i></a>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-team default">
								<div class="t-head">
									<img src="../../public1/images/team/team2.jpg" alt="#">
									<div class="t-hover">
										<ul class="t-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Shakil Hossain</h2>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat
								volutpat. Phasellus lobortis erat vitae fringilla malesuada.</p>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh.</p>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Web UI</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span>73%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Website Development</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;"><span>85%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Website Maintance</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span>60%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Graphics Design</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"><span>90%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Team Detailes two -->
				<!-- Team Detailes Three -->
				<div id="team3" class="team-details three">
					<a href="#team3" class="cross"><i class="fa fa-remove"></i></a>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-team default">
								<div class="t-head">
									<img src="../../public1/images/team/team3.jpg" alt="#">
									<div class="t-hover">
										<ul class="t-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>Sufia Mizan</h2>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat
								volutpat. Phasellus lobortis erat vitae fringilla malesuada.</p>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh.</p>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Marketing</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"><span>73%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Strategy</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"><span>85%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Customer Success</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"><span>60%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Total Process</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"><span>90%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Team Detailes Three -->
				<!-- Team Detailes Four -->
				<div id="team4" class="team-details four">
					<a href="#team4" class="cross"><i class="fa fa-remove"></i></a>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="single-team default">
								<div class="t-head">
									<img src="../../public1/images/team/team4.jpg" alt="#">
									<div class="t-hover">
										<ul class="t-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-behance"></i></a></li>
											<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h2>SM Jehad</h2>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh. Praesent ut luctus dolor. Suspendisse a rutrum arcu. Aliquam erat
								volutpat. Phasellus lobortis erat vitae fringilla malesuada.</p>
							<p>Welcome to my website. sit amet, consectetur adipiscing elit. Ut a lectus eu leo faucibus aliquam.
								Suspendisse eleifend fringilla nibh.</p>
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Branding</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"><span>73%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Maintance</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"><span>85%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Customer Success</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"><span>60%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!-- Single Skill -->
									<div class="single-skill">
										<div class="skill-info">
											<h4 class="title">Managing</h4>
										</div>
										<div class="progress">
											<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span>90%</span></div>
										</div>
									</div>
									<!--/ End Single Skill -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Team Detailes Four -->
			</div>
		</section>
		<!--/ End Team -->

		<!-- Start Clients -->
		<section id="clients" class="clients section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-title">
							<h1>Nos Partenaires</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="clients-slider">
							<!-- Single Clients -->
							<div class="single-clients">
								<a href="#" target="_blank"><img src="../../public1/images/client1.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
							<!-- Single Clients -->
							<div class="single-clients active">
								<a href="#" target="_blank"><img src="../../public1/images/client2.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
							<!-- Single Clients -->
							<div class="single-clients">
								<a href="#" target="_blank"><img src="../../public1/images/client3.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
							<!-- Single Clients -->
							<div class="single-clients">
								<a href="#" target="_blank"><img src="../../public1/images/client4.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
							<!-- Single Clients -->
							<div class="single-clients">
								<a href="#" target="_blank"><img src="../../public1/images/client1.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
							<!-- Single Clients -->
							<div class="single-clients">
								<a href="#" target="_blank"><img src="../../public1/images/client2.png" alt="#"></a>
							</div>
							<!--/ End Single Clients -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Clients -->

		
@endsection
