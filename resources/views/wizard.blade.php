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
			<li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form>
            </li>
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
						<figure><img src="{{asset('subscribers/img/info_graphic_1.svg')}}" alt="" class="img-fluid"></figure>
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
						<form id="wrappeds" action="{{route('post-subscription')}}" method="POST">
                            @csrf
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">


								<!-- /step-->
								<div class="submit step">
									<h3 class="main_question"><strong>2/2</strong>Areas of Interest</h3>
                                    <div class="form-group">
                                        <label>Name Of Organization</label>
                                        <input type="text" name="organization" class="form-control required" placeholder="organization">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Microbiology
                                                    <input type="checkbox" name="areas_of_interest[]" value="Microbiology" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2"> Analytical Techniques
                                                    <input type="checkbox" name="areas_of_interest[]" value="Analytical Techniques" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Drug Delivery
                                                    <input type="checkbox" name="areas_of_interest[]" value="Drug Delivery" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Formulation Development
                                                    <input type="checkbox" name="areas_of_interest[]" value="Formulation Development" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Bioprocessing
                                                    <input type="checkbox" name="areas_of_interest[]" value="Bioprocessing" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            {{--  --}}
                                            <div class="form-group">
                                                <label class="container_check version_2">Manufacturing,
                                                    <input type="checkbox" name="areas_of_interest[]" value="Manufacturing" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2"> Quality Assurance /Quality Control,
                                                    <input type="checkbox" name="areas_of_interest[]" value="Quality Assurance /Quality Control," class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="container_check version_2">Biopharma
                                                    <input type="checkbox" name="areas_of_interest[]" value="Biopharma" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Packaging and Labelling
                                                    <input type="checkbox" name="areas_of_interest[]" value="Formulation Development" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Regulatory Affairs
                                                    <input type="checkbox" name="areas_of_interest[]" value="Regulatory Affairs" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Health Supply Chain Management
                                                    <input type="checkbox" name="areas_of_interest[]" value="Regulatory Affairs" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Artificial Intelligence
                                                    <input type="checkbox" name="areas_of_interest[]" value="Artificial Intelligence" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="container_check version_2">Other
                                                    <input type="checkbox" name="areas_of_interest[]" value="Other" class="required" onchange="getVals(this, 'areas_of_interest');">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group terms">
										<label class="container_check">Please accept our <a href="#" data-bs-toggle="modal" data-bs-target="#terms-txt">Terms and conditions</a>
											<input type="checkbox" name="terms" value="Yes" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
                                    {{--  --}}
								</div>
								<!-- /step-->


								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Prev</button>
								<button type="button" name="forward" class="forward">Next</button>
								<button type="submit" name="process" class="submit">Submit</button>
							</div>
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

	<a href="#0" class="cd-nav-trigger">Menu<span class="cd-icon"></span></a>
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
                    <p>Now Lets do the lorem ipsum for Pharvers</p>
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

</body>

</html>
