<!doctype html>
<html lang="en" dir="ltr">
	
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html5 template, admin panel html template,  html5 admin template, admin panel html, admin panel html template, html css admin templates, dashboard html5, html dashboard template, simple dashboard html template, html5 dashboard template, dashboard html5,  simple dashboard html, dashboard design template, bootstrap 4 admin template,  bootstrap admin template,  admin, premium admin templates, best bootstrap admin template, bootstrap dashboard template,   admin ui templates, modern admin template, admin panel template bootstrap 4 "  />
		<!--favicon -->
<link rel="icon" href="{{asset('app/images/brand/favicon.ico')}}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{asset('app/images/brand/favicon.ico')}}" type="image/x-icon"/>
<!-- TITLE -->
<title>Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template</title>
<!-- DASHBOARD CSS -->
<link href="{{asset('app/css/dashboard.css')}}" rel="stylesheet"/>
<link href="{{asset('app/css/dashboard-dark.css')}}" rel="stylesheet"/>
<link href="{{asset('app/css/style-modes.css')}}" rel="stylesheet"/>
<!-- HORIZONTAL-MENU CSS -->
<link href="{{asset('app/plugins/horizontal-menu/dropdown-effects/fade-down.css')}}" rel="stylesheet">
<link href="{{asset('app/plugins/horizontal-menu/horizontal-menu.css')}}" rel="stylesheet">
<!--C3.JS CHARTS PLUGIN -->
<link href="{{asset('app/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
<!-- SINGLE-PAGE CSS -->
<link href="{{asset('app/plugins/single-page/css/main.css')}}" rel="stylesheet" type="text/css">
<!-- PERFECT SCROLL BAR CSS-->
<link href="{{asset('app/plugins/pscrollbar/perfect-scrollbar.css')}}" rel="stylesheet" />
<!--- FONT-ICONS CSS -->
<link href="{{asset('app/css/icons.css')}}" rel="stylesheet"/>
<!-- SELECT2 CSS -->
<link href="{{asset('app/plugins/select2/select2.min.css')}}" rel="stylesheet"/>
<!-- Skin css-->
<link href="{{asset('app/skins/skins-modes/color1.css')}}"  id="theme" rel="stylesheet" type="text/css" media="all" />
<!-- SIDEBAR CSS -->
<link href="{{asset('app/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

<!-- Switcher CSS -->
<link href="{{asset('app/switcher/css/switcher.css')}}" rel="stylesheet">
<link href="{{asset('app/switcher/demo.css')}}" rel="stylesheet">	</head>
		
	<body class="default-header">	    
				<!-- BACKGROUND-IMAGE -->
		<div class="login-img">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{asset('app/images/svgs/loader.svg')}}" class="loader-img" alt="Loader">
			</div>

			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="{{asset('app/images/brand/logo-2.png')}}" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-6">
							<form class="login100-form validate-form" action="{{route('login')}}" method="post">
                                @csrf
								<span class="login100-form-title">
									Member Login
								</span>
								<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
									<input class="input100" type="text" name="email" placeholder="Email">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-email" aria-hidden="true"></i>
									</span>
								</div>
								<div class="wrap-input100 validate-input" data-validate = "Password is required">
									<input class="input100" type="password" name="password" placeholder="Password">
									<span class="focus-input100"></span>
									<span class="symbol-input100">
										<i class="zmdi zmdi-lock" aria-hidden="true"></i>
									</span>
								</div>
								<div class="text-right pt-1">
									<p class="mb-0"><a href="forgot-password.html" class="text-primary ml-1">Forgot Password?</a></p>
								</div>
								<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn btn-primary">
										Login
									</a>
								</div>
							</form>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->
		
		<!-- JQUERY SCRIPTS -->
<script src="{{asset('app/js/vendors/jquery-3.2.1.min.js')}}"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="{{asset('app/js/vendors/bootstrap.bundle.min.js')}}"></script>
<!-- SPARKLINE -->
<script src="{{asset('app/js/vendors/jquery.sparkline.min.js')}}"></script>
<!-- CHART-CIRCLE -->
<script src="{{asset('app/js/vendors/circle-progress.min.js')}}"></script>
<!-- RATING STAR -->
<script src="{{asset('app/plugins/rating/jquery.rating-stars.js')}}"></script>
<!-- SELECT2 JS -->
<script src="{{asset('app/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('app/js/select2.js')}}"></script>
<!-- INPUT MASK PLUGIN-->
<script src="{{asset('app/plugins/input-mask/jquery.mask.min.js')}}"></script>
<!-- CUSTOM SCROLL BAR JS-->
<script src="{{asset('app/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- CUSTOM JS-->
<script src="{{asset('app/js/custom.js')}}"></script>	
	</body>

</html>