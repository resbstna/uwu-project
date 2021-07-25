<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$tampilan->judul_header}}</title>
	<!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('wedding/wedding/img/fav.png') }}">
    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('wedding/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('wedding/css/owl.theme.css') }}" rel="stylesheet">
	<link href="{{ asset('wedding/css/owl.carousel.css') }}" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="{{ asset('wedding/css/prettyPhoto.css') }}" rel="stylesheet"/>
	<link rel="stylesheet" href="{{ asset('wedding/css/smoothslides.theme.css') }}">
	<link rel="stylesheet" href="{{ asset('wedding/style.css') }}">
    <link href="{{ asset('wedding/css/responsive.css') }}" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<?php 
    if(isset($_GET['q'])){
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
				<a class="navbar-brand" href="index.html">{{$tampilan->judul_header}}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="Main_Menu navbar-example collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main_nav">
					<li> <a href="#page-top">Home</a> </li>
                    <li> <a href="#bride_groom_sec">Pengantin</a> </li>
                    <li> <a href="#events">Rangkaian Acara</a> </li>
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
		</div><!-- #status -->
	</div> <!-- #preloader -->
    <!-- Header -->
    <header>
		 <div class="container-fluid">
            <div class="row">
					<div class="ss-slides slides">
							<img src="{{ URL::to('/') }}/index/images/background/{{$tampilan->background_header}}" alt="Couple" />
							<div class="slide_text_wrap">
								   <div class="slider-text">
									  <h2 class="slider-head" >{{$tampilan->judul_header}}</h2>
								  </div>
						</div>
					</div><!-- ss-slides slides -->
					<div class="countdown-wrap new_slide">
						<div class="countdown"></div>
					</div>
			</div><!-- row -->
        </div><!-- container-fluid -->
    </header>
	
	<!--Bride Groom Section-->
    <section id="bride_groom_sec" class="wedding-sec bride_groom_sec bride_groom_sec_2 round">
	    <div class="container">
		    <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
					     <h2 class="section-heading">{{$tampilan->judul_hero}}</h2>
					     <div class="bottom-dash"></div>
						 <p class="section-subheading text-muted">{{$tampilan->sub_judul_hero}}</p>
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
							<img src="{{ URL::to('/') }}/index/images/pasangan/{{$tampilan->foto_cpp}}" class="img-circle"  alt="Bride" />
							</div><!-- brd_grm_img -->
						</div><!-- brd_grm_wrap -->
						<h3>{{$tampilan->CPP}}</h3>
						<p>{{$tampilan->keterangan_cpp}}</p>
					</div><!-- br_grm -->
				</div><!-- col-md-6 -->
				<div class="col-md-6">
				    <div class="br_grm">
						<div class="brd_grm_wrap">
							<div class="brd_grm_img">
							<img src="{{ URL::to('/') }}/index/images/pasangan/{{$tampilan->foto_cpw}}" class="img-circle" alt="Groom" />
							</div><!-- brd_grm_img -->
						</div><!-- brd_grm_wrap -->
						<h3>{{$tampilan->CPW}}</h3>
						<p>{{$tampilan->keterangan_cpw}}</p>
					</div><!-- br_grm -->
				</div><!-- col-md-6 -->
			</div><!-- row -->
		</div><!-- container --> 
	
	
	
	<!--Events ans Parties section-->
	<section id="events" class="wedding-sec event_party_sec">
	    <div class="container">
		    <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-head">
					<h2 class="section-heading">Rangkaian Acara </h2>
					<div class="bottom-dash"></div>
				   </div><!--.section-head-->
                </div><!--.col-lg-12-->
            </div><!--.row-->
		
			
			<div class="row two">
				<div class="col-md-6">
					<div class="evnt_card_container">
						<div class="containers">
							<div class="cards">
								<div class="card front evnt_prt evnt_prt_1">
									<h2>Akad Nikah</h2>
									<img src="{{ asset('wedding/img/event_icon1.png') }}" alt="" />
									<p>{{$acara->alamat_akadnikah}}</p>
									<button class="btn btn-primary btn_evnt">{{$acara->waktu_awal_an}}</button>
								</div><!--.card .front .evnt_prt .evnt_prt_1-->
								<div class="card back evnt_prt_back evnt_prt_back_1">
									<h2>Akad Nikah</h2>
									 <div class="evnt_addres">
										 <p>{{$acara->alamat_akadnikah}}</p>
										 <p>{{$acara->waktu_awal_an}}</p>
										 <p>{{$acara->waktu_awal_an}} - {{$acara->waktu_akhir_an}}</p>
									 </div>
									 
<input type="date" name="countdown" id="countdown" value="{{$tampilan->countdown}}" hidden>
<input type="date" name="loc" id="countdown" value="{{$maps}}" hidden>
								</div><!--.card .back .evnt_prt_back .evnt_prt_back_1-->
							</div><!-- .cards-->
						</div><!--.containers-->
					</div><!-- .evnt_card_container-->
				</div><!-- .col-md-4-->
				<div class="col-md-6">
					<div class="evnt_card_container">
						<div class="containers">
							<div class="cards">
								<div class="card front evnt_prt evnt_prt_2">
									<h2>Resepsi</h2>
									<img src="{{ asset('wedding/img/event_icon2.png') }}" alt="" />
									<p>{{$acara->alamat_rs}}</p>
									<button class="btn btn-primary btn_evnt">{{$acara->waktu_awal_rs}}</button>
								</div><!--.card .front .evnt_prt .evnt_prt_2-->
								<div class="card back evnt_prt_back evnt_prt_back_2">
									<h2>Resepsi</h2>
									 <div class="evnt_addres">
										<p>{{$acara->alamat_rs}}</p>
										<p>{{$acara->tanggal_rs}}</p>
										<p>{{$acara->waktu_awal_rs}} - {{$acara->waktu_akhir_rs}}</p>
									 </div>
								</div><!--.card .back .evnt_prt_back .evnt_prt_back_2-->
							</div><!-- .cards-->
						</div><!--.containers-->
					</div><!-- .evnt_card_container-->
				</div><!-- .col-md-4-->
			</div><!--Parallex section 3-->
		</div><!--Parallex section 3-->  	
	</section>
	<!--Events ans Parties section End-->

	<!--RSVP Section-->
	<section id="rsvp" class="rsvp_sec">
		<h2 class="hidden"> Text hidden heading for validation</h2> 
		<div class="map-holder">
			<div id="map" class="map"></div>
		</div>
	</section>
	<!--RSVP Section end-->
	<div class="container rsvp_form"></div>
	   	<div class="row">
	   		<div class="col-lg-12">
				<div class="form_wrapper two new">
					 <h2 class="section-heading">RSVP</h2>
					
					 <form method='post' action='contact.php' id='forms'>
						<div class="form-group">
							<input name='name' type="text" class="form-control" id="name" required placeholder="Nama">
						</div>
						<div class="form-group select_group">
						<select name="attending" class="form-control selectpicker select_frm" id="attending">
							 <option value='Yes'>Bisa Hadir</option>
							 <option value='No'>Tidak Bisa Hadir</option>
						</select>
						</div>
						<div class="form-group">
							<textarea name='email' rows="4" cols="50" id="email"  placeholder="Pesan"></textarea>
						</div>
						<button type="submit" class="btn btn-default btn_attend" value='Send'>submit</button>
					</form>
				</div><!-- .form_wrapper .two .new -->		
			</div><!-- .col-lg-12	 -->
		</div><!-- .row	 -->
	</div>
	
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.js"><\/script>')</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="{{ asset('wedding/js/jquery.singlePageNav.min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('wedding/js/jquery.mixitup.min.js') }}"></script>
	<script src="{{ asset('wedding/js/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- PrettyPhoto -->
	<script src="{{ asset('wedding/js/jquery.prettyPhoto.js') }}" type="text/javascript" charset="utf-8"></script>
	<!-- Nicescroll JavaScript -->
	<script type="text/javascript" src="{{ asset('wedding/js/smoothslides.min.js') }}"></script>
	<script src="{{ asset('wedding/js/countdown.js') }}"></script>
	<!-- Video Background JavaScript -->
	<script src="{{ asset('wedding/js/jquery.videobackground.js') }}"></script>
	<script src="{{ asset('wedding/js/jquery.imageScroll.js') }}"></script>
	 <!-- Custom Theme JavaScript -->
    <script src="{{ asset('wedding/js/site.js') }}"></script>
	<script type="text/javascript">
            var CommingDate = new Date(); 
			var tanggal = new Date(document.getElementById("countdown").value);
			var tahun = tanggal.getFullYear();
			var bulan = tanggal.getMonth();
			var hari = tanggal.getDate();
CommingDate= new Date(tahun , hari - 1, bulan,0,0,0);
            $('.countdown').countdown({until: CommingDate});
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqz5Fytg3nwnqzJu8jaPRm1aD2GxJkV0U&callback=initMap&libraries=&v=weekly" async
      ></script>
<script>
        // Initialize and add the map
function initMap() {
    var myStr = document.getElementById("maps").value;
    var strArray = myStr.split(",");
    var lat = parseFloat(strArray[0]);
    var lng = parseFloat(strArray[1]);
// The location of Uluru
const uluru = { lat: lat, lng: lng};
// The map, centered at Uluru
const map = new google.maps.Map(document.getElementById("map"), {
  zoom: 17,
  center: uluru,
});
// The marker, positioned at Uluru
const marker = new google.maps.Marker({
  position: uluru,
  map: map,
});
}
    </script>
	
</body>
</html>
