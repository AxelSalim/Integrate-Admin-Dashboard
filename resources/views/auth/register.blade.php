<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/auth/images/favicon-32x32.png') }}" type="image/png">
	<!--plugins-->
	<link href="{{ asset('assets/auth/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
	<!-- loader-->
	<link href="{{ asset('assets/auth/css/pace.min.css') }}" rel="stylesheet">
	<script src="{{ asset('assets/auth/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets/auth/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/auth/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/auth/sass/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/auth/sass/dark-theme.css') }}">
	<link href="{{ asset('assets/auth/css/icons.css') }}" rel="stylesheet">
	<title>Ptit's-Flocons | Inscription</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="d-flex align-items-center justify-content-center my-5">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-2">
									<div class="mb-3 text-center">
										<img src="{{ asset('assets/auth/images/logo-ptits-flocons.png') }}" width="180" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Créer votre compte</h5>
									</div>
									<div class="form-body">
										<form class="row g-3">
											<div class="col-12">
												<label for="inputUsername" class="form-label">Username</label>
												<input type="email" class="form-control" id="inputUsername" placeholder="Jhon">
											</div>
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address</label>
												<input type="email" class="form-control" id="inputEmailAddress" placeholder="example@user.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-12">
												<label for="inputSelectCountry" class="form-label">Country</label>
												<select class="form-select" id="inputSelectCountry" aria-label="Default select example">
													<option selected>India</option>
													<option value="1">United Kingdom</option>
													<option value="2">America</option>
													<option value="3">Dubai</option>
												</select>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">S'inscrire</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Déjà un compte? <a href="{{ route('login') }}">Connectez-vous ici</a></p>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				 </div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets/auth/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets/auth/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/auth/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="{{ asset('assets/auth/js/app.js') }}"></script>
</body>

</html>
