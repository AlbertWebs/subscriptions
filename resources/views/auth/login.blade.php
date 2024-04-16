<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="African Pharmaceutical Review | Subscribers To Our Updates">
    <meta name="author" content="Ansonika">
    <title>African Pharmaceutical Review | Subscribers To Our Updates</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('subscribers/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('subscribers/css/menu.css')}}" rel="stylesheet">
    <link href="{{asset('subscribers/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('subscribers/css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('subscribers/css/custom.css')}}" rel="stylesheet">

	<!-- MODERNIZR MENU -->
	<script src="{{asset('subscribers/js/modernizr.js')}}"></script>

	<script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-11097556-8']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	<nav>
		<ul class="cd-primary-nav">
			<li><a href="{{url('/')}}" class="animated_link">Home</a></li>
			<li><a href="#contacts" class="animated_link">Contact Us</a></li>
		</ul>
	</nav>
	<!-- /menu -->

	<div class="container-fluid full-height">
		<div class="row row-height">
			<div class="col-lg-6 content-left">
				<div class="content-left-wrapper">
					<a href="{{url('/')}}" id="logo"><img src="{{asset('subscribers/img/aprlogo.png')}}" alt="" width="250"></a>

					<div id="social">
						<ul>
							<li><a href="https://web.facebook.com/profile.php?id=100094284684632"><i class="bi bi-facebook"></i></a></li>
							<li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
							<li><a href="#0"><i class="bi bi-youtube"></i></a></li>
							<li><a href="https://www.linkedin.com/company/african-pharmaceutical-review/about/?viewAsMember=true"><i class="bi bi-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->
					<div>
						<figure><img src="{{asset('subscribers/img/pharms.svg')}}" alt="" class="img-fluid"></figure>
						<h2>Subscribe for FREE to our #1 issue</h2>
						<p>
							By subscribing, you gain access to EXCLUSIVE content; articles, opinion pieces, latest insights,
cutting-edge information from seasoned industry experts and much more. You will also be
informed about crucial industry events that are poised to shape the world of pharmaceuticals
and biotechnology. Join our community today!
						</p>
						<!-- <a href="#" class="btn_1 rounded" target="_parent">

						</a> -->
						<a href="#start" class="btn_1 rounded mobile_btn">Start Now!</a>
					</div>
					<div class="copy">© 2024 African Pharmaceutical Review</div>
				</div>
				<!-- /content-left-wrapper -->
			</div>
			<!-- /content-left -->

			<div class="col-lg-6 content-right" id="start">
				<div id="wizard_container" class="my-auto">
					<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form id="wrapped" method="POST">
                            @csrf
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">
								<div class="step">
									<h3 class="main_question">Please fill with your details</h3>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="styled-select clearfix">
                                                <select class="wide required selectpicker" data-show-subtext="true" data-live-search="true"  name="title">
                                                    (Prof, Dr, Mr, Miss, Mrs, Ms, Other)
                                                    <option value="" readonly> Title</option>
                                                    <option value="Prof">Prof</option>
                                                    <option value="Dr">Dr</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="fname" class="form-control required @error('fname') is-invalid @enderror" placeholder="First Name">
                                                @error('fname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="lname" class="form-control required @error('lname') is-invalid @enderror" placeholder="Last Name">
                                                @error('lname')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control required @error('email') is-invalid @enderror" placeholder="Your Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group">
										<input type="password" name="password" id="password"  class="form-control required @error('password') is-invalid @enderror" placeholder="Password">

                                        {{-- <div class="progress"> --}}
                                        {{-- <progress max="100" value="0" id="meter" class="theBlueBar"></progress> --}}
                                        {{-- </div> --}}

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
									</div>


                                    <div class="form-group">
										<input type="password" name="password_confirmation" class="form-control required" placeholder="Confirm Password">
									</div>
                                    <div class="textbox text-center text-danger text-strong">  </div>
                                    <br>
									<!-- /row -->
									<div class="form-group">
                                        <input value="Proceed" type="submit" class="login-btns" />
                                    </div>

								</div>
							</div>
							<!-- /middle-wizard -->

							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
			</div>
			<!-- /content-right-->
		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->


	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	{{-- <a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a> --}}
	<!-- /menu button -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('subscribers/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('subscribers/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('subscribers/js/velocity.min.js')}}"></script>
	<script src="{{asset('subscribers/js/functions.js')}}"></script>

	<!-- Wizard script -->
	<script src="{{asset('subscribers/js/survey_func.js')}}"></script>
    <script>
        var code = document.getElementById("password");

        var strengthbar = document.getElementById("meter");
        var display = document.getElementsByClassName("textbox")[0];

        code.addEventListener("keyup", function() {
        checkpassword(code.value);
        });


        function checkpassword(password) {
        var strength = 0;
        if (password.match(/[a-z]+/)) {
            strength += 1;
            display.innerHTML = "Use UPPERCASE, lowercase, Numbers and Special Characters";
        }
        if (password.match(/[A-Z]+/)) {
            strength += 1;
            display.innerHTML = "Use UPPERCASE, lowercase, Numbers and Special Characters";
        }
        if (password.match(/[0-9]+/)) {
            strength += 1;
            display.innerHTML = "Use UPPERCASE, lowercase, Numbers and Special Characters";
        }
        if (password.match(/[$@#&!]+/) && password.match(/[0-9]+/) && password.match(/[A-Z]+/) && password.match(/[a-z]+/)) {
            strength += 1;
            display.innerHTML = "Good to Go";
            display.classList.remove('text-warning')
            display.className += " text-success";


        }

        // if (password.length < 6) {
        //     display.innerHTML = "minimum number of characters is 6";
        // }

        // if (password.length > 24) {
        //     display.innerHTML = "maximum number of characters is 12";
        // }

        switch (strength) {
            case 0:
            strengthbar.value = 0;
            break;

            case 1:
            strengthbar.value = 25;
            // strengthbar.className += " text-danger";
            break;

            case 2:
            strengthbar.value = 50;
            break;

            case 3:
            strengthbar.value = 75;
            break;

            case 4:
            strengthbar.value = 100;
            break;
        }
        }
    </script>


</body>

</html>
