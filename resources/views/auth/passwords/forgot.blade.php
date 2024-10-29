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
	<title>Ptit's-Flocons | Mot de passe oublié</title>
</head>

<body class="">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-3">
						<div class="text-center">
							<img src="{{ asset('assets/auth/images/icons/forgot-2.png') }}" width="100" alt="" />
						</div>
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>
						<div class="my-4">
							<label class="form-label">Email id</label>
							<input type="text" class="form-control" placeholder="example@user.com" />
						</div>
						<div class="d-grid gap-2">
							<button type="button" class="btn btn-primary">Send</button>
							 <a href="auth-basic-signin.html" class="btn btn-light"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>
