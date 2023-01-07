@extends('admin.includes.admin_home')

@section('title') Theme Settings - {{ config('app.name', 'Laravel') }} @endsection

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
                                    <h3 class="page-title">Theme Settings</h3>
                                </div>
                            </div>
                        </div>
                        <!-- /Page Header -->

@include('admin.includes.message')

                        <form method="post" action="{{ route('themeUpdate', $theme->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Website Name<span class="text-danger">*</span></label>
                                <div class="col-lg-9">
                                    <input name="site_title" class="form-control" type="text" value="{{ $theme->site_title }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Header Logo<span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <input type="file" class="form-control" name="header_logo">
                                </div>

                                <div class="col-lg-4">
                                    <div class="img-thumbnail float-right"><img src="{{ asset('public/uploads/'.$theme->header_logo) }}" alt="" width="100" height="50"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Footer Logo<span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <input type="file" class="form-control" name="footer_logo">
                                </div>

                                <div class="col-lg-4">
                                    <div class="img-thumbnail float-right"><img src="{{ asset('public/uploads/'.$theme->footer_logo) }}" alt="" width="100" height="50"></div>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Favicon<span class="text-danger">*</span></label>
                                <div class="col-lg-5">
                                    <input type="file" class="form-control" name="favicon">
                                </div>
                                <div class="col-lg-4">
                                    <div class="settings-image img-thumbnail float-right"><img src="{{ asset('public/uploads/'.$theme->favicon) }}" class="img-fluid" width="16" height="16" alt=""></div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->


@section('js')

@endsection
