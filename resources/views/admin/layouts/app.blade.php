<!doctype html>
<html lang="en" dir="ltr">
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<meta content="Solic – Bootstrap Responsive Modern Simple Dashboard Clean HTML Premium Admin Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html5 template, admin panel html template,  html5 admin template, admin panel html, admin panel html template, html css admin templates, dashboard html5, html dashboard template, simple dashboard html template, html5 dashboard template, dashboard html5,  simple dashboard html, dashboard design template, bootstrap 4 admin template,  bootstrap admin template,  admin, premium admin templates, best bootstrap admin template, bootstrap dashboard template,   admin ui templates, modern admin template, admin panel template bootstrap 4"   />
		<!--favicon -->
<link rel="icon" href="{{asset('app/images/brand/favicon.ico')}}" type="image/x-icon"/>
<link rel="shortcut icon" href="{{asset('app/images/brand/favicon.ico')}}" type="image/x-icon"/>
<!-- TITLE -->
<title>@yield('title') | {{config('app.name')}}</title>
<!-- DASHBOARD CSS -->
<link href="{{asset('app/css/dashboard.css')}}" rel="stylesheet"/>
<link href="{{asset('app/css/dashboard-dark.css')}}" rel="stylesheet"/>
<link href="{{asset('app/css/style-modes.css')}}" rel="stylesheet"/>
<!-- HORIZONTAL-MENU CSS -->
<link href="{{asset('app/plugins/horizontal-menu/dropdown-effects/fade-down.css')}}" rel="stylesheet">
<link href="{{asset('app/plugins/horizontal-menu/horizontal-menu.css')}}" rel="stylesheet">
<!--C3.JS CHARTS PLUGIN -->
<link href="{{asset('app/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
<!-- TABS CSS -->
<link href="{{asset('app/plugins/tabs/style-2.css')}}" rel="stylesheet" type="text/css">
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
		<!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="{{asset('app/images/svgs/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<div class="page">
			<div class="page-main">
				<!-- HEADER -->
				<div class="header">
					<div class="container">
						<div class="d-flex">
						    <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
							<a class="header-brand" href="index.html">
								<img src="{{asset('app/images/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="Solic logo">
								<img src="{{asset('app/images/brand/logo-1.png')}}" class="header-brand-img mobile-view-logo" alt="Solic logo">
							</a><!-- LOGO -->
							<div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
							    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="fa fa-search"></i></a>
								<div class="">
									<form class="form-inline">
										<div class="search-element">
											<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
											<button class="btn btn-primary-color" type="submit"><i class="fa fa-search"></i></button>
										</div>
									</form>
								</div><!-- SEARCH -->
								<div class="dropdown d-md-flex">
									<a class="nav-link icon full-screen-link nav-link-bg" id="fullscreen-button">
										<i class="fe fe-maximize-2" ></i>
									</a>
								</div><!-- FULL-SCREEN -->
								
								<div class="dropdown d-md-flex header-settings">
									<a href="#" class="nav-link " data-toggle="dropdown">
										<span><img src="{{asset('app/images/users/male/32.jpg')}}" alt="profile-user" class="avatar brround cover-image mb-0 ml-0"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading  text-center border-bottom pb-3">
											<h6 class="text-dark mb-1">{{Auth::user()->name}}</h6>
											<small class="text-muted">{{Auth::user()->email}}</small>
										</div>
										<form action="{{ route('logout') }}" method="post">
											@csrf
										<button class="sub-icon dropdown-item"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></button></form>
									</div>
								</div><!-- SIDE-MENU -->
								<!-- FULL-SCREEN -->
							</div>
						</div>
					</div>
				</div>
<!-- HEADER END -->
				<!-- HORIZONTAL-MENU -->
				<div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="{{route('dashboard')}}" class="sub-icon"><i class="fe fe-airplay"></i> Dashboard </a>
									</li>
									<li aria-haspopup="true"><a class="sub-icon"><i class="fe fe-database"></i> Shipments <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{route('create.shipment')}}">New Shipment</a>
											</li>
											<li aria-haspopup="true"><a href="{{route('shipments')}}">View Shipments</a>
											</li>
											
										</ul>
									</li>
								</ul>
							</nav>
							<!-- NAV END -->
						</div>
					</div>
				</div>
<!-- HORIZONTAL-MENU END -->
@yield('content')
            			<!-- FOOTER -->
                        <footer class="footer">
                            <div class="container">
                                <div class="row align-items-center flex-row-reverse">
                                    <div class="col-md-12 col-sm-12 text-center">
                                        Copyright © 2022 <a href="#">{{config('app.name')}}</a>. All rights reserved.
                                    </div>
                                </div>
                            </div>
                        </footer>
                    <!-- FOOTER END -->		</div><!-- End Page -->
                                <!-- BACK-TO-TOP -->
                    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
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
                    <!-- HORIZONTAL-MENU -->
                    <script src="{{asset('app/plugins/horizontal-menu/horizontal-menu.js')}}"></script>
                    <!-- PERFECT SCROLL BAR JS-->
                    <script src="{{asset('app/plugins/pscrollbar/perfect-scrollbar.js')}}"></script>
                    <script src="{{asset('app/plugins/pscrollbar/pscroll-1.js')}}"></script>
                    <!-- SIDEBAR JS -->
                    <script src="{{asset('app/plugins/sidebar/sidebar.js')}}"></script>
                    <!-- SELECT2 JS -->
                    <script src="{{asset('app/plugins/select2/select2.full.min.js')}}"></script>
                    <script src="{{asset('app/js/select2.js')}}"></script>
                    <!-- C3.JS CHART PLUGIN -->
                    <script src="{{asset('app/plugins/charts-c3/d3.v5.min.js')}}"></script>
                    <script src="{{asset('app/plugins/charts-c3/c3-chart.js')}}"></script>
                    <!-- INPUT MASK PLUGIN-->
                    <script src="{{asset('app/plugins/input-mask/jquery.mask.min.js')}}"></script>
                    <!-- CHARTJS CHART -->
                    <script src="{{asset('app/plugins/chart/Chart.bundle.js')}}"></script>
                    <script src="{{asset('app/plugins/chart/utils.js')}}"></script>
                    <!-- PIETY CHART -->
                    <script src="{{asset('app/plugins/peitychart/jquery.peity.min.js')}}"></script>
                    <script src="{{asset('app/plugins/peitychart/peitychart.init.js')}}"></script>
                    <!-- ECHART JS -->
                    <script src="{{asset('app/plugins/echarts/echarts.js')}}"></script>
                    <!-- INDEX-SCRIPTS -->
                    <script src="{{asset('app/js/index5.js')}}"></script>
                    <!-- STICKY JS -->
                    <script src="{{asset('app/js/stiky.js')}}"></script>
                    <!-- CUSTOM JS -->
                    <script src="{{asset('app/js/custom.js')}}"></script>
                    
                    <!-- Switcher JS -->
                    <script src="{{asset('app/switcher/js/switcher.js')}}"></script>
                    <script>
                        function logout() {
                            this.closest('form').submit();
                        }
                    </script>	
                        </body>
                    
                    </html>
