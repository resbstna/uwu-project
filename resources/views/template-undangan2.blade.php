<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Couple - HTML5 Boostrap Wedding Event template</title>
	<!-- Favicons -->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('css/smoothslides.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<?php 
    if($_GET['q']){
    $uuid = $_GET['q'];
    $query = DB::select("select * from tamu where uuid = '$uuid'");
    $name = $query[0]->name;
    }
    ?>
<body id="page-top" class="index four">
 <!-- Navigation -->
    <nav id="header_nav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="index.html">Couple</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="Main_Menu navbar-example collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main_nav">
					<li> <a href="#page-top">Home</a> </li>
                    <li> <a href="#bride_groom_sec">Bride & Groom</a> </li>
					<li> <a href="#family">Our Family</a> </li>
					<li> <a href="#photo_gallery">Photo Gallery</a> </li>
                    <li> <a href="#events">Events</a> </li>
                    <li> <a href="#blog">Blog</a> </li>
                    <li> <a href="#rsvp">RSVP</a> </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div id="preloader">
		<div id="status">
			<div id="bowlG">
				<div id="bowl_ringG">
					<div class="ball_holderG">
					<div class="ballG"><div id="heart"></div></div>
					</div>
				</div>
			</div><!-- #bowlG -->
			<img id="logo_n" src="img/logo.png" width=160 alt="Couple Logo" />
		</div><!-- #status -->
	</div> <!-- #preloader -->
    <!-- Header -->
    <header>
		 <div class="container-fluid">
            <div class="row">
			    <section id="main-slider" class="main-slider">
					<div class="ss-slides slides">
						<div class="ss-slide">
							<img src="img/placehold/slider.png" alt="Couple"/>
							<div class="slide_text_wrap">
								   <div class="slider-text">
									  <h2 class="slider-head">Jane & John</h2>
									  <p class="">Are getting married on 15 June 2015,NewYork </p>
								  </div>
							</div>
						</div>
						<div class="ss-slide">
							<img src="img/placehold/slider.png" alt="Couple"/>
							<div class="slide_text_wrap">
								   <div class="slider-text">
									  <h2 class="slider-head">Jane & John</h2>
									  <p class="">Are getting married on 15 June 2015,NewYork </p>
								  </div>
							</div>
						</div>
						<div class="ss-slide">
							<img src="img/placehold/slider.png" alt="Couple" />
							<div class="slide_text_wrap">
								   <div class="slider-text">
									  <h2 class="slider-head">Jane & John</h2>
									  <p class="">Are getting married on 15 June 2015,NewYork </p>
								  </div>
							</div>
						</div><!-- ss-slide -->
					</div><!-- ss-slides slides -->
					<div class="countdown-wrap new_slide">
						<div class="countdown"></div>
					</div>
				</section><!--/#main-slider-->
			</div><!-- row -->
        </div><!-- container-fluid -->
    </header>
	
	<!--Bride Groom Section-->
    <section id="bride_groom_sec" class="wedding-sec bride_groom_sec bride_groom_sec_2 round">
	    <div class="container">
		    <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
					     <h2 class="section-heading">Bride & Groom</h2>
					     <div class="bottom-dash"></div>
						 <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				   </div><!-- section-head -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->
		</div><!-- container -->
		
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="br_grm">
						<div class="brd_grm_wrap">
							<div class="brd_grm_img">
							     <img src="img/placehold/bride-grm4.png" class="img-circle"  alt="Bride" />
								 <div class="brgm_overlay">
								    <a class="br_gr_zoom" href="#myModal1" data-toggle="modal">
										<img src="img/zoom.png" alt="zoom img" />
									</a>	 
								</div><!-- brgm_overlay -->
							</div><!-- brd_grm_img -->
						</div><!-- brd_grm_wrap -->
						<h3>Jane doe</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
perspiciatis.</p>
                        <p class="social_icons">
							 <a href="#"><i class="fa fa-twitter"></i></a>
							 <a href="#"><i class="fa fa-linkedin"></i></a>
							 <a href="#"><i class="fa fa-facebook"></i></a>
						</p>
					</div><!-- br_grm -->
				</div><!-- col-md-6 -->
				<div class="col-md-6">
				    <div class="br_grm">
						<div class="brd_grm_wrap">
							<div class="brd_grm_img">
							    <img src="img/placehold/bride-grm4.png" class="img-circle" alt="Groom" />
								<div class="brgm_overlay">
									<a class="br_gr_zoom" href="#myModal2" data-toggle="modal">
										<img src="img/zoom.png" alt="" />
									</a>
								</div><!-- brgm_overlay -->
							</div><!-- brd_grm_img -->
						</div><!-- brd_grm_wrap -->
						<h3>Jhon doe</h3>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut perspiciatis.</p>
                        <p class="social_icons">
							 <a href="#"><i class="fa fa-twitter"></i></a>
							 <a href="#"><i class="fa fa-linkedin"></i></a>
							 <a href="#"><i class="fa fa-facebook"></i></a>
						</p>
					</div><!-- br_grm -->
				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container --> 
	
	</section>
	<!--Bride Groom Section End-->
	
	<!--Parallex Section One-->
	<div class="img-holder" data-image="img/placehold/parallex1.png" data-width="1400" data-height="1122"></div>
	<!--Parallex Section One End-->
	

	
	<!-- timeline section -->
    <!-- lovestory Section -->
    <section id="lovestory" class="wedding-sec lovestory_sec lovestory_timeline_sec">
        <div class="container">
		    <div class="row">
                <div class="col-lg-12 text-center">
                     <div class="section-head">
					 <h2 class="section-heading">Love Story</h2>
					 <div class="bottom-dash"></div>
					 <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				     </div><!-- section-head -->
                </div><!-- col-lg-12 -->
            </div><!-- row -->	
		</div><!-- container -->
		
	<div id="timeline" class="timeline_sec">
		<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul class="timeline">
							<li class="timeline-inverted right">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/timeline/meet.png" alt="Couple first meet">
								</div>
								<div class="timeline-panel right-panel">
									<div class="timeline-heading">
										<p class="posting_date">December 19,2012</p> 
										<h3>Day we meet each other</h3>
									</div>
									<div class="timeline-body">
										<div class="timeline_img">
											 <img src="img/placehold/timeline.png" alt="Couple first meet" />
											 <div class="overlay_tml">
												<div class="overlay_text">
													<div class="inner-extra">
														 <a href="img/two/image1.png" data-gal="prettyPhoto"><img src="img/zoom.png" alt="" /></a>
														 <p>Day we meet each other</p>
													</div>
												</div>
											</div><!-- .overlay_tml -->
										 </div>
									</div>
								</div>
								
							</li>
							<li class="left">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/timeline/kiss.png" alt="Couple first kiss">
								</div>
							   <div class="timeline-panel left-panel">
									<div class="timeline-heading">
										<p class="posting_date">february 19,2013</p> 
										<h3>Our first kiss</h3>
									</div>
									<div class="timeline-body">
										<div class="timeline_img">
											 <img src="img/placehold/timeline.png" alt="" />
											 <div class="overlay_tml">
												<div class="overlay_text">
													<div class="inner-extra">
														 <a href="img/two/image2.png" data-gal="prettyPhoto"><img src="img/zoom.png" alt="Couple first kiss" /></a>
														 <p>Our first kiss</p>
													</div>
												</div>
											</div><!-- .overlay_tml -->
										 </div>
									</div>
								</div>
							</li>
							<li class="timeline-inverted right">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/timeline/trip.png" alt="Couple first holiday trip">
								</div>
								<div class="timeline-panel right-panel">
									<div class="timeline-heading">
										<p class="posting_date">july 19,2013</p> 
										<h3>our holiday trip</h3>
									</div>
									<div class="timeline-body">
										<div class="timeline_img">
											 <img src="img/placehold/timeline.png" alt="Couple first holiday trip" />
											 <div class="overlay_tml">
												<div class="overlay_text">
													<div class="inner-extra">
														 <a href="img/two/image3.png" data-gal="prettyPhoto"><img src="img/zoom.png" alt="" /></a>
														 <p>our holiday trip</p>
													</div>
												</div>
											</div><!-- .overlay_tml -->
										 </div>
									</div>
								</div>
							</li>
							<li class="left">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/timeline/engage.png" alt="Couple get engaged">
								</div>
								<div class="timeline-panel left-panel">
									<div class="timeline-heading">
										 <p class="posting_date">january 19,2013</p>  
										<h3>get engaged</h3>
									</div>
									<div class="timeline-body">
										<div class="timeline_img">
											 <img src="img/placehold/timeline.png" alt="Couple get engaged" />	
											  <div class="overlay_tml">
												<div class="overlay_text">
													<div class="inner-extra">
														 <a href="img/two/image4.png" data-gal="prettyPhoto"><img src="img/zoom.png" alt="" /></a>
														 <p>get engaged</p>
													</div>
												</div>
											</div><!-- .overlay_tml -->
										 </div>
									</div>
								</div>
							</li>
							<li class="timeline-inverted right">
								<div class="timeline-image">
									<img class="img-circle img-responsive" src="img/timeline/pregnant.png" alt="">
								</div>
								<div class="timeline-panel right-panel">
									<div class="timeline-heading">
										<p class="posting_date"> january 19,2015</p> 
										<h3>Baby coming soon</h3>
									</div>
									<div class="timeline-body">
										<div class="timeline_img">
											 <img src="img/placehold/timeline.png" alt="Baby coming soon" />
											<div class="overlay_tml">
												<div class="overlay_text">
													<div class="inner-extra">
														 <a href="img/two/image5.png" data-gal="prettyPhoto"><img src="img/zoom.png" alt="" /></a>
														 <p>Baby coming soon</p>
													</div>
												</div>
											</div><!-- .overlay_tml -->
										 </div>
									</div>
								</div>
							</li>	
							<li class="timeline-inverted">
								<div class="timeline-image more">
									<a href="#">
										<div class="inner-more">
										   <p>More</p>
										</div>
									</a>
								</div>
							</li>
						</ul><!-- .timeline -->
					</div><!-- .col-lg-12 -->
				</div><!-- .row -->
			</div><!-- .container -->
	    </div><!-- .timeline_sec -->
    </section>
	<!-- timeline section end-->
	
	<!--Parallex section 2-->
	<div class="img-holder" data-image="img/placehold/parallex2.png" data-width="2616" data-height="1553"></div>
	<!--Parallex section 2 End-->
	
	<!--Our Family section-->
	<section id="family" class="wedding-sec family_sec">
		<div class="container">
		     <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
						 <h2 class="section-heading">Our Family </h2>
						 <div class="bottom-dash"></div>
						 <p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div><!-- .section-head -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
		</div><!-- .container -->
			
		<div class="family_member_wrap four">
			<div class="container">
			    <div class="row">
					<!-- col-lg-12 -->
					<div role="tabpanel" class="family_tab_4">
					  <!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#family1" aria-controls="home" role="tab" data-toggle="tab">Bride Family</a></li>
							<li role="presentation"><a href="#family2" aria-controls="profile" role="tab" data-toggle="tab">Groom Family</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="family1">
								<div class="col-lg-3 col-md-3 col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="Father" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											</div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">father</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									 </div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="Mother" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											</div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>john Connor</h3>
										 <p class="relation">mother</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="Brother" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											</div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">brother</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="Sister" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											 </div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">sister</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 	
							</div>
							<div role="tabpanel" class="tab-pane fade" id="family2">
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="Father" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											 </div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">father</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="" />
											<div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											</div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">mother</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											 </div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">brother</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
								<div class="col-lg-3 col-md-3  col-sm-6">
									<div class="family_mem_wrap">
										<div class="family_mem_img">
											 <img src="img/placehold/family-mem-4.png" class="img-circle" alt="" />
											 <div class="brgm_overlay">
												<p class="social_icons">
													 <a href="#"><i class="fa fa-twitter"></i></a>
													 <a href="#"><i class="fa fa-linkedin"></i></a>
													 <a href="#"><i class="fa fa-facebook"></i></a>
												</p> 	 
											</div><!-- .brgm_overlay -->
										</div><!-- .family_mem_img -->
										 <h3>John Connor</h3>
										 <p class="relation">sister</p>
										 <p class="family_txt_details">Nemo enim ipsam voluptatem quia voluptas sit.</p>
									</div><!-- .family_mem_wrap -->
								</div><!-- .col-lg-3 .col-md-3 .col-sm-6 --> 
							</div><!-- #family2 .tab-pane -->
						</div><!-- .tab-content -->
					</div><!-- .family_tab_4 -->
			     </div><!-- .row -->
		     </div><!-- .container -->
		</div><!--.family_member_wrap.four-->
	</section>
	<!--Our Family section End-->
	
	<!--Our Photo Gallery section-->
	<section id="photo_gallery" class="wedding-sec photo_gallery_sec">
	    <div class="container">
			<div class="row">
			    <div class="col-lg-12 text-center">
					<div class="section-head">
						<h2 class="section-heading">Photo Gallery</h2>
						<div class="bottom-dash"></div>
						<p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				    </div>   
				</div><!-- .col-lg-12 -->
            </div><!-- .row -->	 
	    </div><!-- .container -->
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">   
					<div class="controls">
						<div class="control-group gallery-nav two">
							 <button class="filter" data-filter="all">All</button>
							 <button class="filter" data-filter=".wday">Wedding Day</button>
							 <button class="filter" data-filter=".trip">Trip to Greece</button>
							 <button class="filter" data-filter=".sydney">Summer in Sydney</button>
						</div>
					</div>		
			    </div>
			</div>	
				
			<div id="photo-container" class="row photo-container">
				<div class="mix wday Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix trip Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix mix_big sydney Graphics">
					<img src="img/placehold/gallery-img-big.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix wday Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix wday Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix mix_big trip Graphics">
					<img src="img/placehold/gallery-img-big.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix sydney Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
				<div class="mix wday Graphics">
					<img src="img/placehold/gallery-img-sml.png" alt="" />
					<div class="overlay">
						<div class="overlay_text">
							<div class="inner-extra">
								 <a href="img/placehold/zoom.png" data-gal="prettyPhoto[pp_gal]"><img src="img/zoom.png" alt="Couple" /></a>
								 <p>Some content goes here</p>
							</div>
						</div>
					</div><!-- .overlay -->
				</div><!-- .mix -->
			</div><!-- .row .photo-container -->
		</div><!-- .container-fluid -->
	</section>
	
	<!--Our Photo Gallery section End-->
	
	<!--Events ans Parties section-->
	<section id="events" class="wedding-sec event_party_sec">
	    <div class="container">
		    <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
					<h2 class="section-heading">Events & Parties </h2>
					<div class="bottom-dash"></div>
						<p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem. </p>
				   </div><!--.section-head-->
                </div><!--.col-lg-12-->
            </div><!--.row-->
		
			
			<div class="row two">
				<div class="col-md-4">
					<div class="evnt_card_container">
						<div class="containers">
							<div class="cards">
								<div class="card front evnt_prt evnt_prt_1">
									<h2>Wedding Ceremony</h2>
									<img src="img/event_icon1.png" alt="" />
									<p>LONDON.UK</p>
									<button class="btn btn-primary btn_evnt">4:30PM</button>
								</div><!--.card .front .evnt_prt .evnt_prt_1-->
								<div class="card back evnt_prt_back evnt_prt_back_1">
									<h2>Wedding Ceremony</h2>
									 <div class="evnt_addres">
										 <p>Hotel Radisson</p>
										 <p>4th Street,DOHS MIRPUR</p>
										 <p>Saturday, 20 july 2015</p>
										 <p>4:30PM - 6:15PM</p>
									 </div>
								</div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
							</div><!-- .cards-->
						</div><!--.containers-->
					</div><!-- .evnt_card_container-->
				</div><!-- .col-md-4-->
				<div class="col-md-4">
					<div class="evnt_card_container">
						<div class="containers">
							<div class="cards">
								<div class="card front evnt_prt evnt_prt_2">
									<h2>Wedding Party</h2>
									<img src="img/event_icon2.png" alt="" />
									<p>LONDON.UK</p>
									<button class="btn btn-primary btn_evnt">6:30PM</button>
								</div><!--.card .front .evnt_prt .evnt_prt_2-->
								<div class="card back evnt_prt_back evnt_prt_back_2">
									<h2>Wedding Party</h2>
									 <div class="evnt_addres">
										 <p>Hotel Radisson</p>
										 <p>4th Street,DOHS MIRPUR</p>
										 <p>Saturday, 20 july 2015</p>
										 <p>4:30PM - 6:15PM</p>
									 </div>
								</div><!--.card .back .evnt_prt_back .evnt_prt_back_2-->
							</div><!-- .cards-->
						</div><!--.containers-->
					</div><!-- .evnt_card_container-->
				</div><!-- .col-md-4-->
				<div class="col-md-4">
					<div class="evnt_card_container">
						<div class="containers">
							<div class="cards">
								<div class="card front evnt_prt evnt_prt_3">
									<h2>Dinner</h2>
									<img src="img/event_icon3.png" alt="" />
									<p>LONDON.UK</p>
									<button class="btn btn-primary btn_evnt">7:45PM</button>
								</div><!--.card .front .evnt_prt .evnt_prt_3-->
								<div class="card back evnt_prt_back evnt_prt_back_3">
									<h2>Dinner</h2>
									 <div class="evnt_addres">
										 <p>Hotel Radisson</p>
										 <p>4th Street,DOHS MIRPUR</p>
										 <p>Saturday, 20 july 2015</p>
										 <p>4:30PM - 6:15PM</p>
									 </div>
								</div><!--.card .back .evnt_prt_back .evnt_prt_back_3-->
							</div><!-- .cards-->
						</div><!--.containers-->
					</div><!-- .evnt_card_container-->
				</div><!-- .col-md-4-->
			</div><!--Parallex section 3-->
		</div><!--Parallex section 3-->  	
	</section>
	<!--Events ans Parties section End-->
	
	<!--Parallex section 3-->
	<div class="img-holder" data-image="img/placehold/parallex3.png" data-width="3888" data-height="2592"></div>
	<!--parallex section 3 End-->
	
	<!-- Bridesmaid and Groomsmen sec-->
	<section id="bmaid_gmen" class="wedding-sec bmaid_gmen_sec four">
	    <div class="container">
		     <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
						 <h2 class="section-heading">Bridesmaid & Groomsmen</h2>
						 <div class="bottom-dash Down"></div>
						 <p class="section-subheading text-muted Down" data-wow-delay=".25s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				    </div><!-- .section-head -->
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
			
			<div class="row">
			    <div class="col-lg-6 col-md-6 bmaid_sec">
				    <div class="bmaid_nav" role="tabpanel">
					  <!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
						    <li role="presentation">
								 <a href="#home"  class="" aria-controls="home" role="tab" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Bridemaid" /></a>
							</li>
							<li role="presentation">
								 <a href="#profile" class="" aria-controls="profile" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Bridemaid" /></a>
							</li>
							<li role="presentation" class="active">
								 <a href="#messages" aria-controls="messages" role="tab" class="" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Bridemaid" /></a>
							</li>
						</ul>

						  <!-- Tab panes -->
						<div class="tab-content bridemaid_tab_content">
							<div role="tabpanel" class="tab-pane fade in active" id="home">
								<div class="bridemaid">
									 <h3 class="#">Natalie Jones</h3>
									 <p  class="#">
									 Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									 </p>
									 <p class="social_icons">
										 <a href="#" class=""><i class="fa fa-twitter"></i></a>
										 <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										 <a href="#" class=""><i class="fa fa-facebook"></i></a>
									 </p>
								 </div><!-- .bridemaid -->	
							</div><!-- .tab-pane  -->
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<div class="bridemaid">
									 <h3 class="#">Angle Cyrus</h3>
									 <p class="#">
									 Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									 </p>
									 <p class="social_icons">
										 <a href="#" class=""><i class="fa fa-twitter"></i></a>
										 <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										 <a href="#" class=""><i class="fa fa-facebook"></i></a>
									 </p>
								  </div><!-- .bridemaid -->	
							</div><!-- .tab-pane  -->
							<div role="tabpanel" class="tab-pane fade" id="messages">
								<div class="bridemaid">
									  <h3 class="">Lady Teramera</h3>
									  <p class="">
										Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									  </p>
									  <p class="social_icons">
										  <a href="#" class=""><i class="fa fa-twitter"></i></a>
										  <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										  <a href="#" class=""><i class="fa fa-facebook"></i></a>
									  </p>
								 </div><!-- .bridemaid -->	
							</div><!-- .tab-pane  -->
						</div><!-- .tab-content .bridemaid_tab_content -->
                     </div><!-- .bmaid_nav -->	 
				</div><!-- .col-lg-6 .col-md-6 .bmaid_sec -->
			    <div class="col-lg-6 col-md-6 gmen_sec">
				    <div class="gmen_nav" role="tabpanel">
					     <!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							 <li role="presentation" class="active"><a href="#groom1" class="" aria-controls="home" role="tab" data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Groomsmen" /></a></li>
							 <li role="presentation"><a href="#groom2" class="" aria-controls="profile" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Groomsmen" /></a></li>
							 <li role="presentation"><a href="#groom3" class="" aria-controls="messages" role="tab"  data-toggle="tab"><img src="img/placehold/br-grm.png" alt="Groomsmen" /></a></li>
						</ul>

					     <!-- Tab panes -->
					     <div class="tab-content groomsmen_tab_content">
							<div role="tabpanel" class="tab-pane fade in active" id="groom1">
								<div class="groomsmen">
									  <h3 class="#">Joseph Connor</h3>
									  <p class="#">
										Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									  </p>
									  <p class="social_icons">
										  <a href="#" class=""><i class="fa fa-twitter"></i></a>
										  <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										  <a href="#" class=""><i class="fa fa-facebook"></i></a>
									  </p>
								</div><!-- .groomsmen -->	
							</div><!-- .tab-pane #groom2-->
							<div role="tabpanel" class="tab-pane fade" id="groom2">
								<div class="groomsmen">
									  <h3 class="#">Albert telesamad</h3>
									  <p class="#">
										Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									  </p>
									  <p class="social_icons">
										  <a href="#" class=""><i class="fa fa-twitter"></i></a>
										  <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										  <a href="#" class=""><i class="fa fa-facebook"></i></a>
									  </p>
								</div><!-- .groomsmen -->	
							 </div><!-- .tab-pane #groom2-->
							<div role="tabpanel" class="tab-pane fade" id="groom3">
								 <div class="groomsmen">
									 <h3 class="#">John Kawsar</h3>
									 <p class="#">
										Excepteur sint occaecat cupidatat non proident, sunt  culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae illo inventore veritatis et quasi architecto beatae vitae dicta sunt 
		explicabo. Nemo enim ipsam voluptatem quia voluptas.  
									 </p>
									 <p class="social_icons">
										 <a href="#" class=""><i class="fa fa-twitter"></i></a>
										 <a href="#" class=""><i class="fa fa-linkedin"></i></a>
										 <a href="#" class=""><i class="fa fa-facebook"></i></a>
									 </p>
								</div><!-- .groomsmen -->	
							 </div><!-- .tab-pane #groom2-->
					    </div><!-- .tab-content .groomsmen_tab_content -->
                     </div><!-- .gmen_nav -->	
				</div><!-- .col-lg-6 .col-md-6 .gmen_sec  -->	
			</div><!-- .row -->
		</div><!-- .container -->  	
	</section>
	<!-- Bridesmaid and Groomsmen sec End-->
	
	<section id="video-background" class="video_background_sec">
		<!--Hidden header for w3c validation only-->
		<h2 class="hidden">Hidden header for w3c validation only</h2>
		<!--Hidden header for w3c validation only-->
		 <div class="video-bg-self"></div> 
	</section>
	<!-- Blog section-->
	<section id="blog" class="wedding-sec blog_sec">
	    <div class="container">
		     <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
						<h2 class="section-heading">Our Blog</h2>
						<div class="bottom-dash"></div>
						<p class="section-subheading text-muted Down" data-wow-delay=".25s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				   </div><!-- .section-head--> 
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
		</div><!-- .container-->
	<div class="blog_wide_wrap two">
		<div class="container">
			<div class="row">
			    <div class="col-lg-4 col-md-4 col-sm-6">
				    <div class="blog_post">
					    <p class="posting_date">December 19,2014</p> 
						<h3><a href="blog-single.html">Some title goes here</a></h3>
						<div class="blog_img">
						     <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="Couple blog image" /></a>	
						</div>
						<p class="blog_text">
						 Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
						</p>
						<p class="blog_bottom_line">
							 <span><i class="fa fa-user"></i><a href="#">Jason Richard </a></span><span>|</span>
							 <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
							 <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
						</p>
					</div><!-- .blog_post-->
				</div><!-- .col-lg-4 .col-md-4 .col-sm-6-->	
			    <div class="col-lg-4 col-md-4 col-sm-6">
				     <div class="blog_post">
					     <p class="posting_date"> December 19,2014</p> 
						 <h3><a href="blog-single.html">Some title goes here</a></h3>
						 <div class="blog_img">
						     <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="Couple blog image" /></a>	
						 </div>
						 <p class="blog_text">
						  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
						 </p>
						<p class="blog_bottom_line">
							 <span><i class="fa fa-user"></i> <a href="#">Jason Richard </a> </span><span>|</span>
							 <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
							 <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
						</p>
					</div><!-- .blog_post-->
				</div><!-- .col-lg-4 .col-md-4 .col-sm-6-->	
			    <div class="col-lg-4 col-md-4 col-sm-6">
				    <div class="blog_post">
					     <p class="posting_date">December 19,2014</p> 
						 <h3><a href="blog-single.html">Some title goes here</a></h3>
						 <div class="blog_img">
						     <a data-gal="prettyPhoto" href="img/placehold/zoom.png" class="hov"><img src="img/placehold/blog.png" alt="Couple blog image" /></a>	
						 </div>
						 <p class="blog_text">
						     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident.
						 </p>
						 <p class="blog_bottom_line">
							 <span><i class="fa fa-user"></i> <a href="#">Jason Richard </a> </span><span>|</span>
							 <span><i class="fa fa-comment-o"></i><a href="#">12</a></span>
							 <span><a href="blog-single.html" class="read_more">Read More <img class="arrow" src="img/arrow.png" alt="" /><img class="arrow-hov" src="img/arrow-hov.png" alt="" /></a></span>
						</p>
					</div><!-- .blog_post-->
				</div><!-- .col-lg-4 .col-md-4 .col-sm-6-->	
			</div><!-- .row-->
		</div><!-- .container -->
	</div><!-- .blog_wide_wrap .two-->
	</section>
	<!-- Blog section End-->
	
	<!--RSVP Section-->
	<section id="rsvp" class="rsvp_sec">
		<h2 class="hidden"> Text hidden heading for validation</h2> 
		<div class="map-holder">
			<div id="map" class="map"></div>
		</div>
	</section>
	<!--RSVP Section end-->
	
	<div class="container rsvp_form">
	   	<div class="row">
	   		<div class="col-lg-12">
				<div class="form_wrapper two new">
					 <div class="section-head">
					 <h2 class="section-heading">RSVP</h2>
					  <div class="bottom-dash"></div>
						<p class="section-subheading text-muted">Duis aute irure dolor in reprehenderit in voluptate. </p>
					 </div>
					
					 <form method='post' action='contact.php' id='forms'>
						<div class="form-group">
							<input name='name' type="text" class="form-control" id="name" required placeholder="Name">
						</div>
						<div class="form-group">
							<input name='email' type="email" class="form-control" id="email" required placeholder="Email">
						</div>
						<div class="form-group select_group select_guest">
							<select name='numguest' class="form-control select_frm" id="numguest">
								 <option>No Of Guest</option>
								 <option value='1-Person'>01</option>
								 <option value='2-Persons'>02</option>
								 <option value='3-Persons'>03</option>
								 <option value='4-Persons'>04</option>
								 <option value='5-Persons'>05</option>
							</select>
						</div>
						<div class="form-group select_group select_attend">
						<select name='allevents' class="form-control selectpicker select_frm" id="allevents">
							 <option>All Events</option>
							 <option value='Wedding-Ceremony'>Wedding Ceremony</option>
							 <option value='Wedding-Party'>Wedding Party</option>
							 <option value='Dinner'>Dinner</option>
						</select>
						</div>
						<div class="form-group select_group">
						<select name="attending" class="form-control selectpicker select_frm" id="attending">
							 <option value='Yes'>Yes, Absolutely</option>
							 <option value='No'>Sorry, Great Miss</option>
						</select>
						</div>
						<button type="submit" class="btn btn-default btn_attend" value='Send'>submit</button>
					</form>
				</div><!-- .form_wrapper .two .new -->		
			</div><!-- .col-lg-12	 -->
		</div><!-- .row	 -->
	</div><!-- .container .rsvp_form -->
	
	<!--Phone mail addres section-->
	<section class="footer_top_sec footer_top_sec_2">
		<!--Hidden header for w3c validation only-->
		<h2 class="hidden">Hidden header for w3c validation only</h2>
		<!--Hidden header for w3c validation only-->
	    <div class="container">
	    	<div class="row">
				<div class="col-md-4">
				     <p class="phone"><img src="img/phone-icon.png" alt="" />239-842-3433</p>	
				</div>
				<div class="col-md-4">
				     <p class="mail"><img src="img/mail-icon.png" alt="" />name@domain.com</p>	
				</div>
				<div class="col-md-4">
				     <p class="address"><img src="img/location-icon.png" alt="" />Home Address,City Name Country</p>
				</div>
	    	</div><!-- .row -->
	    </div><!-- .container .rsvp_form -->	
	</section>
	
	<!--Go Top -->
	<div id="toTop" class="scrollup two"><a href="#"><i class="fa fa-angle-double-up fa-lg"></i></a></div>
	<!--Phone mail address section End-->
	 <footer id="footer" class="footer_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <span id="copyright" class="copyright"><!-- &copy; 2015 Themeonlab.com . All rights reserved. --></span>
                </div>
                <div class="col-md-6 col-xs-12">
                    <ul class="list-inline social_icons wow flash">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div><!-- .col-md-6 col-xs-12 -->
            </div><!-- .row -->
        </div><!-- .container .rsvp_form -->
    </footer>
    <!-- Modal -->
	<div class="modal fade wed" id="myModal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				
			  </div>
				<div class="modal-body">
					<div class="modal-img">
						<img src="img/placehold/zoom.png" alt="" />  
					</div>
					<div class="modal-txt">
						 <h4 class="modal-title">Jane doe</h4> 
						 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
	perspiciatis.</p>
						 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
					<p class="social_icons">
						 <a href="#" class=""><i class="fa fa-twitter"></i></a>
						 <a href="#" class=""><i class="fa fa-linkedin"></i></a>
						 <a href="#" class=""><i class="fa fa-facebook"></i></a>
					</p>
				</div><!-- .modal-footer -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
	</div> <!-- .modal .wed -->
	<div class="modal fade wed" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					
				</div>
				<div class="modal-body">
					<div class="modal-img">
						<img src="img/placehold/zoom.png" alt="" />  
					</div>
					<div class="modal-txt">
						 <h4 class="modal-title">Jhon doe</h4> 
						 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed ut 
	perspiciatis.</p>
						 <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
				</div>
				<div class="modal-footer">
					<!-- <button type="button" class="btn btn-default cls-wed" data-dismiss="modal">Close</button> -->
					<p class="social_icons">
						 <a href="#" class=""><i class="fa fa-twitter"></i></a>
						 <a href="#" class=""><i class="fa fa-linkedin"></i></a>
						 <a href="#" class=""><i class="fa fa-facebook"></i></a>
					</p>
				</div><!-- .modal-footer -->
			</div><!-- .modal-content -->
		</div><!-- .modal-dialog -->
	</div> <!-- .modal .wed -->
   <!-- Modal End-->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- PrettyPhoto -->
	<script src="{{ asset('js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script>
	<!-- Nicescroll JavaScript -->
	<script type="text/javascript" src="js/smoothslides.min.js') }}"></script>
	<script src="{{ asset('js/countdown.js') }}"></script>
	<!-- Video Background JavaScript -->
	<script src="{{ asset('js/jquery.videobackground.js') }}"></script>
	<script src="{{ asset('js/jquery.imageScroll.js') }}"></script>
	 <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/site.js') }}"></script>
</body>
</html>
