<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/auth/images/favicon-32x32.png') }}" type="image/png">
	<!--plugins-->
	<link href="{{ asset('assets/auth/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
	<!-- loader-->
	<link href="{{ asset('assets/auth/css/pace.min.css') }}" rel="stylesheet"/>
	<script src="{{ asset('assets/auth/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/auth/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">

	<link href="{{ asset('assets/auth/sass/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/css/icons.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/css/boxicons.min.css') }}" rel='stylesheet'>
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets/auth/sass/dark-theme.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/auth/sass/semi-dark.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/auth/sass/bordered-theme.css') }}">

	<title>Ptit's-Flocons | Tableau de bord</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/auth/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Syndron</h4>
				</div>
				<div class="mobile-toggle-icon ms-auto"><i class='bx bx-x'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Tableau de bord</div>
					</a>
				</li>

				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class='bx bx-envelope'></i>
						</div>
						<div class="menu-title">Contacts</div>
					</a>
				</li>

				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class='bx bx-user'></i>
						</div>
						<div class="menu-title">Utilisateurs</div>
					</a>
				</li>

				<li>
					<a href="javascript:;">
						<div class="parent-icon"><i class='bx bx-cog'></i>
						</div>
						<div class="menu-title">Rôles</div>
					</a>
				</li>
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar">
				<nav class="navbar navbar-expand gap-2 align-items-center">
					<div class="mobile-toggle-menu d-flex"><i class='bx bx-menu'></i>
					</div>

					  <div class="search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
					     <a href="avascript:;" class="btn d-flex align-items-center"><i class="bx bx-search"></i>Search</a>
					  </div>

					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							<li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="{{ asset('assets/auth/images/county/02.png') }}" width="22" alt="">
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/01.png') }}" width="20" alt=""><span class="ms-2">English</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/02.png') }}" width="20" alt=""><span class="ms-2">Catalan</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/03.png') }}" width="20" alt=""><span class="ms-2">French</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/04.png') }}" width="20" alt=""><span class="ms-2">Belize</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/05.png') }}" width="20" alt=""><span class="ms-2">Colombia</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/06.png') }}" width="20" alt=""><span class="ms-2">Spanish</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/07.png') }}" width="20" alt=""><span class="ms-2">Georgian</span></a>
									</li>
									<li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{ asset('assets/auth/images/county/08.png') }}" width="20" alt=""><span class="ms-2">Hindi</span></a>
									</li>
								</ul>
							</li>
							<li class="nav-item dark-mode d-none d-sm-flex">
								<a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="{{ asset('assets/auth/images/avatars/avatar-2.png') }}" class="user-img" alt="user avatar">
							<div class="user-info">
								<p class="user-name mb-0">Pauline Seitz</p>
								<p class="designattion mb-0">Web Designer</p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li>
                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
                            {{-- <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center"><i class="bx bx-log-out-circle"></i><span>Logout</span></button>
                                </form>
							</li> --}}
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">


				<div class="">
					<div class="">

					  <div class="row g-4">
						<div class="col-12 col-xl-4">
						  <div class="card rounded-4 mb-0">
							 <div class="card-body">
							  <div class="hstack align-items-center gap-3">
								<div class="mb-1 widgets-icons bg-light-success text-success rounded-3 d-flex align-items-center justify-content-center">
									<i class='bx bx-printer'></i>
								</div>
								 <hr class="vr">
								 <div class="">
								  <h4 class="mb-0 d-flex align-items-center gap-2">$84,256 <span class="dash-lable d-flex align-items-center gap-1 rounded mb-0 bg-light-danger text-danger bg-opacity-10"><i class='bx bx-up-arrow-alt' ></i>8.6%</span></h4>
								  <p class="mb-0">Total Income</p>
								</div>
							  </div>
								<div id="chart1"></div>
							 </div>
						  </div>
						</div>
						<div class="col-12 col-xl-2">
						  <div class="card rounded-4 mb-0">
							<div class="card-body">
							  <div class="d-flex align-items-start justify-content-between mb-0">
								<div class="">
								  <h6 class="mb-0">Active Users</h6>
								</div>
								<div class="dropdown">
								  <a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
									data-bs-toggle="dropdown">
									<i class='bx bx-dots-vertical-rounded'></i>
								  </a>
								  <ul class="dropdown-menu">
									<li><a class="dropdown-item" href="javascript:;">Action</a></li>
									<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
									<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
								  </ul>
								</div>
							  </div>
							  <div class="chart-container2">
								<div id="chart2"></div>
							  </div>
							  <div class="text-center">
								<div class="">
									<h4 class="mb-1">42.5K</h4>
								  </div>
								<p class="mb-0"><span class="text-success">+37.5K</span> from last month</p>
							  </div>
							</div>
						 </div>
					   </div>
					   <div class="col-12 col-xl-4">
						<div class="card rounded-4 mb-0">
						  <div class="card-body">
							<div class="d-flex align-items-start justify-content-between mb-3">
							  <div class="">
								<h6 class="mb-0">Sales & Views</h6>
							  </div>
							  <div class="dropdown">
								<a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
								  data-bs-toggle="dropdown">
								  <i class='bx bx-dots-vertical-rounded'></i>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
								  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
								  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
								</ul>
							  </div>
							 </div>
							  <div id="chart3"></div>
						   </div>
						 </div>
					   </div>
					   <div class="col-12 col-xl-2">
						<div class="card rounded-4 mb-0 overflow-hidden mb-0">
						  <div class="card-body">
							<div class="d-flex align-items-start justify-content-between mb-1">
							  <div class="">
								<h4 class="mb-0">87.4K</h4>
								<p class="mb-0">Total Clicks</p>
							  </div>
							  <div class="dropdown">
								<a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
								  data-bs-toggle="dropdown">
								  <i class='bx bx-dots-vertical-rounded'></i>
								</a>
								<ul class="dropdown-menu">
								  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
								  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
								  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
								</ul>
							  </div>
							</div>
						  </div>
						  <div class="chart-container">
							<div id="chart4"></div>
						  </div>
					   </div>
					 </div>
					 <div class="col-12 col-xl-4">
					  <div class="card border-0 rounded-4 shadow-none mb-0 bg-transparent mb-0">
						<div class="card-body p-0">
						  <div class="d-flex flex-column gap-4">
							<div class="card rounded-4 mb-0">
							  <div class="card-body">
								<div class="d-flex align-items-start justify-content-between mb-1">
									<div class="">
									  <h6 class="mb-4">Card Data</h6>
									</div>
									<div class="dropdown">
									  <a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
										data-bs-toggle="dropdown">
										<i class='bx bx-dots-vertical-rounded'></i>
									  </a>
									  <ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a></li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
									  </ul>
									</div>
								  </div>
								  <div class="d-flex align-items-center gap-3 mb-4">
									<div class="mb-0 widgets-icons bg-light-primary text-primary rounded-circle d-flex align-items-center justify-content-center">
										<i class='bx bx-credit-card-alt'></i>
									</div>
									  <div class="">
										 <h3 class="mb-0">$68,452</h3>
										 <p class="mb-0">Total Card Transactions</p>
									  </div>
								   </div>

								   <div class="row row-cols-1 row-cols-lg-2 g-3">
									  <div class="col">
										<div class="border rounded-4 p-3">
											<div class="fs-3 text-success"><i class='bx bx-credit-card'></i></div>
											<h5 class="my-1">$9478</h5>
											<p class="mb-0">Transactions</p>
										 </div>
									  </div>
									  <div class="col">
										<div class="border rounded-4 p-3">
											<div class="fs-3 text-primary"><i class='bx bx-shower'></i></div>
											<h5 class="mb-1">$6482</h5>
											<p class="mb-0">Total Cashback</p>
										 </div>
									  </div>
									  <div class="col">
										<div class="border rounded-4 p-3">
											<div class="fs-3 text-warning"><i class='bx bx-pie-chart'></i></div>
											<h5 class="mb-1">$5784</h5>
											<p class="mb-0">Credit Balance</p>
										 </div>
									  </div>
									  <div class="col">
										<div class="border rounded-4 p-3">
											<div class="fs-3 text-danger"><i class='bx bx-credit-card-alt'></i></div>
											<h5 class="mb-1">$3652</h5>
											<p class="mb-0">Debit Money</p>
										 </div>
									  </div>
								   </div><!--end row-->
							  </div>
							</div>
							<div class="card rounded-4 mb-0">
							  <div class="card-body">
								<div class="d-flex flex-column align-items-start justify-content-around border p-3 rounded-4 gap-4">
								<div class="d-flex align-items-center gap-4">
								  <div class="">
									<p class="mb-0 data-attributes">
									  <span
										data-peity='{ "fill": ["#2196f3", "#eee"], "innerRadius": 32, "radius": 40 }'>5/7</span>
									</p>
								  </div>
								  <div class="">
									<p class="mb-1 fs-6">New Visitors</p>
									<h3 class="mb-0">65,127</h3>
									<p class="mb-0"><span class="text-success me-2">+16.5%</span><span>55.21 USD</span></p>
								  </div>
								</div>

								<div class="d-flex align-items-center gap-4">
								  <div class="">
									<p class="mb-0 data-attributes">
									  <span
										data-peity='{ "fill": ["#ffd200", "#eee"], "innerRadius": 32, "radius": 40 }'>5/7</span>
									</p>
								  </div>
								  <div class="">
									<p class="mb-1 fs-6">Old Visitors</p>
									<h3 class="mb-0">984,246</h3>
									<p class="mb-0"><span class="text-danger me-2">-24.9%</span><span>267.35 USD</span></p>
								  </div>
								</div>
							  </div>
							  </div>
							</div>
							<div class="card rounded-4 mb-0">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Total Accounts</p>
											<h4 class="my-1">58.4K</h4>
											<p class="mb-0 font-13 text-success">+14% Since last Month</p>
										</div>
										<div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='bx bxs-group'></i></div>
									</div>
									<div id="chart8"></div>
								</div>
							</div>
							<div class="card rounded-4">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0 text-secondary">Bounce Rate</p>
											<h4 class="my-1">36.7%</h4>
											<p class="mb-0 font-13 text-success">+17% Since last Month</p>
										</div>
										<div class="widgets-icons bg-light-primary text-primary ms-auto"><i class='bx bx-bar-chart-alt-2'></i></div>
									</div>
									<div id="chart9"></div>
								</div>
							</div>
						  </div>
						</div>
					  </div>
					 </div>
					 <div class="col-12 col-xl-4">
					  <div class="card border-0 rounded-4 shadow-none mb-0 bg-transparent mb-0">
						<div class="card-body p-0">
						  <div class="d-flex flex-column gap-4">
							<div class="card rounded-4 mb-0">
								<div class="card-body">
									<div class="d-flex align-items-center">
										<div>
											<p class="mb-0">Total Orders</p>
											<h4 class="mb-0">78.6K</h4>
										</div>
										<div class="ms-auto"><i class="bx bx-cart fs-1"></i>
										</div>
									</div>
									<div class="progress radius-10 my-4" style="height:6px;">
										<div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
									</div>
									<p class="mb-0"><span class="text-success">+37.5K</span> from last month</p>
								</div>
							</div>
							<div class="card rounded-4 mb-0">
							  <div class="card-body">
								 <div class="d-flex align-items-center justify-content-between">
									<div class="">
									  <p class="mb-0">Total Clicks</p>
									  <h4 class="mb-0 d-flex align-items-center gap-2">256.7K
										<span class="dash-lable d-flex align-items-center gap-1 rounded mb-0 bg-light-success text-success bg-opacity-10">
											<i class='bx bx-up-arrow-alt'></i>12.9%</span>
									  </h4>
									</div>
									<div class="status">
									   <form>
										  <select class="form-select form-select-sm rounded-4">
											 <option>Weekly</option>
											 <option>Monthly</option>
											 <option>Yearly</option>
										  </select>
									   </form>
									</div>
								 </div>
								 <div id="chart5"></div>
								 <div class="d-flex flex-column gap-0 mt-4">
									<div class="hstack align-items-center gap-3">
										<div class="mb-0 widgets-icons bg-light-primary text-primary rounded-3 d-flex align-items-center justify-content-center">
											<i class='bx bx-happy-heart-eyes'></i>
										</div>
										 <div class="flex-grow-1">
										  <p class="mb-0">Total Views</p>
										  <h5 class="mb-0 d-flex align-items-center gap-2">98547</h5>
										</div>
										<p class="mb-0"><span class="text-success"><i class="bx bx-up-arrow-alt"></i>+41.3%</span></p>
									  </div>
									  <hr>
									  <div class="hstack align-items-center gap-3">
										<div class="mb-0 widgets-icons bg-light-info text-info rounded-3 d-flex align-items-center justify-content-center">
											<i class='bx bx-mouse' ></i>
										</div>
										 <div class="flex-grow-1">
										  <p class="mb-0">User Clicks</p>
										  <h5 class="mb-0 d-flex align-items-center gap-2">67258</h5>
										</div>
										<p class="mb-0"><span class="text-danger"><i class="bx bx-down-arrow-alt"></i>-34.7%</span></p>
									  </div>
									  <hr>
									  <div class="hstack align-items-center gap-3">
										<div class="mb-0 widgets-icons bg-light-success text-success rounded-3 d-flex align-items-center justify-content-center">
											<i class='bx bx-lemon'></i>
										</div>
										 <div class="flex-grow-1">
										  <p class="mb-0">Page Enteries</p>
										  <h5 class="mb-0 d-flex align-items-center gap-2">45972</h5>
										</div>
										 <p class="mb-0"><span class="text-success"><i class="bx bx-up-arrow-alt"></i>+72.6%</span></p>
									  </div>
								</div>
							  </div>
							</div>
							<div class="card rounded-4">
								<div class="card-body">
									<div class="d-flex align-items-start justify-content-between mb-1">
										<div class="">
										  <h6 class="mb-4">Card Data</h6>
										</div>
										<div class="dropdown">
										  <a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
											data-bs-toggle="dropdown">
											<i class='bx bx-dots-vertical-rounded'></i>
										  </a>
										  <ul class="dropdown-menu">
											<li><a class="dropdown-item" href="javascript:;">Action</a></li>
											<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
											<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										  </ul>
										</div>
									  </div>
									<div class="table-responsive">
									  <div class="d-flex flex-column gap-4">
										<div class="d-flex align-items-center gap-3">
										  <div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											<img src="{{ asset('assets/auth/images/app/behance.png') }}" width="40" alt="">
											<div>
											  <h6 class="mb-0">Behance</h6>
											  <p class="mb-0">Social Media</p>
											</div>
										  </div>
										  <h5 class="mb-0">45,689</h5>
										  <div class="dash-lable bg-light-success text-success rounded-3">
											<p class="text-success mb-0">+28.5%</p>
										  </div>
										</div>
										<div class="d-flex align-items-center gap-3">
										  <div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											<img src="{{ asset('assets/auth/images/app/twitter.png') }}" width="40" alt="">
											<div>
											  <h6 class="mb-0">Twitter</h6>
											  <p class="mb-0">Social Media</p>
											</div>
										  </div>
										  <h5 class="mb-0">34,248</h5>
										  <div class="dash-lable bg-light-danger text-danger rounded-3">
											<p class="text-red mb-0">-14.5%</p>
										  </div>
										</div>
										<div class="d-flex align-items-center gap-3">
										  <div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											<img src="{{ asset('assets/auth/images/app/envato.png') }}" width="40" alt="">
											<div>
											  <h6 class="mb-0">Envato</h6>
											  <p class="mb-0">Digital Products</p>
											</div>
										  </div>
										  <h5 class="mb-0">45,689</h5>
										  <div class="dash-lable bg-light-success text-success rounded-3">
											<p class="text-green mb-0">+28.5%</p>
										  </div>
										</div>
										<div class="d-flex align-items-center gap-3">
										  <div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											<img src="{{ asset('assets/auth/images/app/figma.png') }}" width="40" alt="">
											<div>
											  <h6 class="mb-0">Figma</h6>
											  <p class="mb-0">Designing</p>
											</div>
										  </div>
										  <h5 class="mb-0">67,249</h5>
										  <div class="dash-lable bg-light-danger text-danger rounded-3">
											<p class="text-red mb-0">-43.5%</p>
										  </div>
										</div>
										<div class="d-flex align-items-center gap-3">
											<div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											  <img src="{{ asset('assets/auth/images/app/apple.png') }}" width="40" alt="">
											  <div>
												<h6 class="mb-0">Apple</h6>
												<p class="mb-0">Software</p>
											  </div>
											</div>
											<h5 class="mb-0">67,249</h5>
											<div class="dash-lable bg-light-success text-success rounded-3">
											  <p class="text-red mb-0">-43.5%</p>
											</div>
										  </div>
										<div class="d-flex align-items-center gap-3">
										  <div class="social-icon d-flex align-items-center gap-3 flex-grow-1">
											<img src="{{ asset('assets/auth/images/app/github.png') }}" width="40" alt="">
											<div>
											  <h6 class="mb-0">Linkedin</h6>
											  <p class="mb-0">Conversation</p>
											</div>
										  </div>
										  <h5 class="mb-0">89,178</h5>
										  <div class="dash-lable bg-light-danger text-danger rounded-3">
											<p class="text-green mb-0">+24.7%</p>
										  </div>
										</div>
									  </div>
									</div>
								  </div>
							</div>
						  </div>
						</div>
					  </div>
					 </div>
					 <div class="col-12 col-xl-4">
					  <div class="card border-0 rounded-4 shadow-none mb-0 bg-transparent">
						<div class="card-body p-0">
						  <div class="d-flex flex-column gap-4">
							<div class="card rounded-4 mb-0">
							  <div class="card-body">
								<div class="d-flex align-items-start justify-content-between mb-1">
									<div class="">
									  <h6 class="mb-4">Rvenue Goal</h6>
									</div>
									<div class="dropdown">
									  <a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
										data-bs-toggle="dropdown">
										<i class='bx bx-dots-vertical-rounded'></i>
									  </a>
									  <ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a></li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
									  </ul>
									</div>
								  </div>
								  <div class="position-relative">
									<div class="piechart-legend">
									  <h2 class="mb-0">68%</h2>
									  <p class="mb-0">Total Profit</p>
									</div>
									<div id="chart7"></div>
								  </div>
								  <div class="d-flex align-items-start justify-content-between mb-1">
									<div class="">
									  <h6 class="mb-0">Plan Completed</h6>
									</div>
									<div class="">
									  <h4 class="mb-0">$8796</h4>
									</div>
								  </div>
							  </div>
							</div>
							<div class="card rounded-4 mb-0">
								<div class="card-body">
								  <div class="d-flex align-items-start justify-content-between mb-1">
									  <div class="">
										<h6 class="mb-0">Overall Information</h6>
									  </div>
									  <div class="dropdown">
										<a href="javascript:;" class="dropdown-toggle-nocaret more-options dropdown-toggle"
										  data-bs-toggle="dropdown">
										  <i class='bx bx-dots-vertical-rounded'></i>
										</a>
										<ul class="dropdown-menu">
										  <li><a class="dropdown-item" href="javascript:;">Action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
										  <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
										</ul>
									  </div>
									</div>

									<div class="hstack align-items-center gap-3 my-4">
										<h3 class="mb-0">89</h3>
										<div class="vr"></div>
										<h3 class="mb-0 d-flex align-items-center gap-2">276 <span class="font-13 align-self-end">task done</span></h3>
									</div>
									<div class="d-flex align-items-center justify-content-between gap-3">
									   <div class="card shadow-none rounded-4 bg-info w-100 mb-0">
										  <div class="card-body">
											  <div class="text-center">
													<p class="mb-3 text-dark"><i class='bx bx-bowl-hot fs-1'></i></p>
													<h4 class="mb-0 text-dark">64</h4>
													<p class="mb-0 text-dark">Projects</p>
											  </div>
										  </div>
									   </div>
									   <div class="card shadow-none rounded-4 bg-warning w-100 mb-0">
										  <div class="card-body">
											  <div class="text-center">
													<p class="mb-3 text-dark"><i class='bx bx-line-chart fs-1'></i></p>
													<h4 class="mb-0 text-dark">48</h4>
													<p class="mb-0 text-dark">In Progress</p>
											  </div>
										  </div>
									   </div>
									   <div class="card shadow-none rounded-4 bg-success w-100 mb-0">
										  <div class="card-body">
											  <div class="text-center">
													<p class="mb-3 text-dark"><i class='bx bx-cloud-download fs-1'></i></p>
													<h4 class="mb-0 text-dark">96</h4>
													<p class="mb-0 text-dark">Completed</p>
											  </div>
										  </div>
									   </div>
									</div>

								</div>
							  </div>
							<div class="card rounded-4 mb-0">
							  <div class="card-body">
								<div class="d-flex align-items-center justify-content-between">
									<div class="">
										<p class="mb-0 fs-6">Orders Last 30 Days</p>
									  <h4 class="mb-2 d-flex align-items-center gap-2">98,546
										<span class="dash-lable py-1 d-flex align-items-center gap-1 rounded mb-0 bg-light-success text-success bg-opacity-10">
											<i class='bx bx-up-arrow-alt'></i>26.7%</span>
									  </h4>
									</div>
								 </div>
								 <div id="chart6"></div>
								 <div class="d-flex flex-column gap-3 mt-4">

									<div class="">
										<div class="d-flex align-items-center justify-content-between mb-1">
											<p class="mb-0">India</p>
											<p class="mb-0">648</p>
										</div>
										<div class="progress radius-10" style="height:5px;">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-center justify-content-between mb-1">
											<p class="mb-0">Dubai</p>
											<p class="mb-0">472</p>
										</div>
										<div class="progress radius-10" style="height:5px;">
											<div class="progress-bar bg-danger" role="progressbar" style="width: 75%"></div>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-center justify-content-between mb-1">
											<p class="mb-0">USA</p>
											<p class="mb-0">365</p>
										</div>
										<div class="progress radius-10" style="height:5px;">
											<div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-center justify-content-between mb-1">
											<p class="mb-0">United Kingdom</p>
											<p class="mb-0">875</p>
										</div>
										<div class="progress radius-10" style="height:5px;">
											<div class="progress-bar bg-warning" role="progressbar" style="width: 55%"></div>
										</div>
									</div>
									<div class="">
										<div class="d-flex align-items-center justify-content-between mb-1">
											<p class="mb-0">China</p>
											<p class="mb-0">248</p>
										</div>
										<div class="progress radius-10" style="height:5px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: 45%"></div>
										</div>
									</div>

								 </div>
							  </div>
							</div>

						  </div>
						</div>
					  </div>
					 </div>
					 </div><!--end row-->

					</div>
				  </div>


			</div><!--end page content -->
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay mobile-toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2024. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->


	<!-- search modal -->
    <div class="modal" id="SearchModal" tabindex="-1">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
		  <div class="modal-content">
			<div class="modal-header gap-2">
			  <div class="position-relative popup-search w-100">
				<input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search" placeholder="Search">
				<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i class='bx bx-search'></i></span>
			  </div>
			  <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="search-list">
				   <p class="mb-1">Html Templates</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i class='bx bxl-angular fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Web Designe Company</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-windows fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-dropbox fs-4' ></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Software Development</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
				   </div>
				   <p class="mb-1 mt-3">Online Shoping Portals</p>
				   <div class="list-group">
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-slack fs-4'></i>Best Html Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-skype fs-4'></i>Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
					  <a href="javascript:;" class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
				   </div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
    <!-- end search modal -->



<!--start switcher-->
<button class="btn btn-primary position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
    <i class='bx bx-cog bx-spin'></i>Customize
  </button>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
    <div class="offcanvas-header border-bottom h-60">
      <div class="">
        <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
      </div>
	  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        <p>Theme variation</p>

        <div class="row g-3">
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="LightTheme" checked>
            <label class="btn btn-outline-secondary d-flex flex-column gap-2 align-items-center justify-content-center p-3" for="LightTheme">
				<span><i class='bx bx-sun fs-2'></i></span>
                <span>Light</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-2 align-items-center justify-content-center p-3" for="DarkTheme">
				<span><i class='bx bx-moon fs-2'></i></span>
                <span>Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-2 align-items-center justify-content-center p-3" for="SemiDarkTheme">
				<span><i class='bx bx-brightness-half fs-2'></i></span>
                <span>Semi Dark</span>
            </label>
          </div>
          <div class="col-12 col-xl-6">
            <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
            <label class="btn btn-outline-secondary d-flex flex-column gap-2 align-items-center justify-content-center p-3" for="BoderedTheme">
				<span><i class='bx bx-border-all fs-2'></i></span>
                <span>Bordered</span>
            </label>
          </div>
        </div><!--end row-->

      </div>
    </div>
  </div>
  <!--start switcher-->

	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/auth/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/auth/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets/auth/js/app.js') }}"></script>

	<script src="{{ asset('assets/auth/js/index.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/peity/jquery.peity.min.js') }}"></script>
    <script>
       $(".data-attributes span").peity("donut")
    </script>
</body>

</html>
