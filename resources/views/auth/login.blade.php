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
	<title>Ptit's-Flocons | Connexion</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-md">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-2">
									<div class="mb-3 text-center">
										<img src="{{ asset('assets/auth/images/logo-ptits-flocons.png') }}" width="180" alt="" />
									</div>
									<div class="text-center mb-4">
										<h5 class="">Connectez-vous</h5>
									</div>
									<div class="form-body">
										<form class="row g-3" method="POST" action="{{ route('login') }}">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="jhon@example.com">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Mot de passe</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Se souvenir de moi</label>
												</div>
											</div>
											<div class="text-end">	<a href="auth-basic-forgot-password.html">Mot de passe oublié ?</a></div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary">Se connecter</button>
												</div>
											</div>
											<div class="col-12">
												<div class="text-center ">
													<p class="mb-0">Pas encore de compte? <a href="{{ route('register') }}">S'inscrire ici</a></p>
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
