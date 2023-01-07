@section('title') Login - {{ config('app.name', 'Laravel') }} @endsection

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
							<h3 class="account-title">Login</h3>
							<p class="account-subtitle">Access to our dashboard</p>

@include('admin.includes.message')

							<!-- Account Form -->
							<form action="{{ route('adminLogin')}}" method="post">
                                @csrf
								<div class="form-group">
									<label>Email Address</label>
									<input class="form-control" type="text" name="email" >
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Password</label>
										</div>
									</div>

									<input class="form-control" type="password" name="password" ></div>

								<div class="form-group text-center">
									<button class="btn btn-dark" type="submit">Login</button>
								</div>

								<div class="account-footer">
									<p>Forgot Your Password? <a href="{{ route('forgotPassword') }}">Reset Password</a></p>
								</div>
							</form>
							<!-- /Account Form -->

						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- /Main Wrapper -->

@include('admin.includes.script')

    </body>
</html>
