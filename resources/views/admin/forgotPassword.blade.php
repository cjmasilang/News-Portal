@include('admin.includes.header')


    <body class="account-page">

		<!-- Main Wrapper -->
        <div class="main-wrapper">

			<div class="account-content">
				<div class="container">

					<!-- Account Logo -->
					<div class="account-logo">
						<a href="index.html"><img src="{{ asset('public/adminpanel/assets/img/logo.png') }}"></a>
					</div>
					<!-- /Account Logo -->

					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Forgot Password?</h3>
							<p class="account-subtitle">Enter your email to get a password reset link</p>

							<!-- Account Form -->
							<form>
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="text">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-dark" type="submit">Reset Password</button>
								</div>
								<div class="account-footer">
									<p>Remember your password? <a href="{{ route('adminLogin')}}">Login</a></p>
								</div>
							</form>
							<!-- /Account Form -->

						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>

		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>

    </body>
</html>
