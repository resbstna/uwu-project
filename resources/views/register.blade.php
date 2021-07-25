<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BootZard - Bootstrap Wizard Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="{{ asset('formwizard/assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('formwizard/assets/font-awesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('formwizard/assets/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('formwizard/assets/css/style.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('formwizard/assets/ico/favicon.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('formwizard/assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('formwizard/assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('formwizard/assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('formwizard/assets/ico/apple-touch-icon-57-precomposed.png') }}">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">BootZard - Pencari Kode</a>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1>Free <strong>Bootstrap</strong> Wizard</h1>
                        <a href="http://pencarikode.blogspot.com"><h1>http://pencarikode.blogspot.com</h1></a>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                    	<form role="form" method="post" class="f1" action="">

                    		<h3>Register To Our App</h3>
                    		<p>Fill in the form to get instant access</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>about</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>social</p>
                    			</div>
                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Tell us who you are:</h4>
                    			<div class="form-group">
                    			    <label class="sr-only" for="f1-first-name">First name</label>
                                    <input type="text" name="f1-first-name" placeholder="First name..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-last-name">Last name</label>
                                    <input type="text" name="f1-last-name" placeholder="Last name..." class="f1-last-name form-control" id="f1-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-about-yourself">About yourself</label>
                                    <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                    	                 class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email</label>
                                    <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Social media profiles:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>


        <!-- Javascript -->
        <script src="{{ asset('formwizard/assets/js/jquery-1.11.1.min.js') }}"></script>
        <script src="{{ asset('formwizard/assets/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('formwizard/assets/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('formwizard/assets/js/retina-1.1.0.min.js') }}"></script>
        <script src="{{ asset('formwizard/assets/js/scripts.js') }}"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>