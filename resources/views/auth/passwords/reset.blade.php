<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('assets/auth/images/favicon-32x32.png') }}" type="image/png">
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
	<title>Ptit's-Flocons | Réinitialisé le mot de passe</title>
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
		 <div class="container">
			<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
				<div class="col mx-auto">
					<div class="card">
						<div class="card-body">
							<div class="p-4">
								<div class="mb-4 text-center">
									<img src="{{ asset('assets/auth/images/logo-icon.png') }}" width="60" alt="" />
								</div>
								<div class="text-start mb-4">
									<h5 class="">Genrate New Password</h5>
									<p class="mb-0">We received your reset password request. Please enter your new password!</p>
								</div>
								<div class="mb-3 mt-4">
									<label class="form-label">New Password</label>
									<input type="text" class="form-control" placeholder="Enter new password" />
								</div>
								<div class="mb-4">
									<label class="form-label">Confirm Password</label>
									<input type="text" class="form-control" placeholder="Confirm password" />
								</div>
								<div class="d-grid gap-2">
									<button type="button" class="btn btn-primary">Change Password</button> <a href="auth-basic-signin.html" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
