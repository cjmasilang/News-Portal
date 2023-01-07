@extends('admin.includes.admin_home')

@section('title') Profile - {{ config('app.name', 'Laravel') }} @endsection

@section('content')

        	<!-- Page Wrapper -->
            <div class="page-wrapper">

				<!-- Page Content -->
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">

							<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Profile Settings</h3>
									</div>
								</div>
							</div>
							<!-- /Page Header -->

@include('admin.includes.message')

							<form method="post" action="{{ route('profileUpdate', $admin->id) }}" enctype="multipart/form-data">
                                @csrf
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="name" value="{{ $admin->name }}">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email Address <span class="text-danger">*</span></label>
											<input class="form-control " type="text" name="name" value="{{ $admin->email }}" disabled>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Address <span class="text-danger">*</span></label>
											<input class="form-control " type="text" name="address" value="{{ $admin->address }}">
										</div>
									</div>

                                    <div class="col-sm-6">
										<div class="form-group">
											<label>Phone Number <span class="text-danger">*</span></label>
											<input class="form-control " type="text" name="phone_number" value="{{ $admin->phone_number }}">
										</div>
									</div>


								</div>



								<div class="submit-section">
									<button class="btn btn-dark submit-btn">Update</button>
								</div>
							</form>
						</div>
					</div>
                </div>
				<!-- /Page Content -->

            </div>
			<!-- /Page Wrapper -->
@endsection

@section('js')
    <script>
         function readURL(input){
             if(input.files && input.files[0]){
                 var reader = new FileReader();
                 reader.onload = function (e){
                     $("#one").attr('src', e.target.result).width(150)
                 };
                 reader.readAsDataURL(input.files[0]);
             }
         }
    </script>
    @endsection
