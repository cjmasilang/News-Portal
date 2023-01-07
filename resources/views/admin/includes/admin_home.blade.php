<!DOCTYPE html>
<html lang="en">
  @include('admin.includes.header')

    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo">
						<img src="{{ asset('public/adminpanel/assets/img/logo.png')}}" width="40" height="40" alt="">
					</a>
                </div>


				<a id="toggle_btn" href="javascript:void(0);">
					<span class="bar-icon">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</a>

                <div class="page-title-box">
					<h3>EHSS SYSTEM</h3>
                </div>


				<a id="mobile_btn" class="mobile_btn" href="index.html#sidebar"><i class="fa fa-bars"></i></a>
				<ul class="nav user-menu">

                    @php
                        $current_user = Auth::guard('admin')->user();
                    @endphp



					<li class="nav-item dropdown has-arrow main-drop">
						<a href="index.html#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="status online"></span>
							<span>{{ $current_user->name }}</span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ route('profile')}}">My Profile</a>
							<a class="dropdown-item" href="{{ route('changePassword')}}">Change Password</a>
							<a class="dropdown-item" href="{{ route('adminLogout')}}">Logout</a>
						</div>
					</li>
				</ul>


				<div class="dropdown mobile-user-menu">
					<a href="index.html#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="{{ route('profile')}}">My Profile</a>
						<a class="dropdown-item" href="{{ route('changePassword')}}">Change Password</a>
						<a class="dropdown-item" href="{{ route('adminLogout')}}">Logout</a>
					</div>
				</div>

            </div>

@include('admin.includes.sidebar')

            @yield('content')

        </div>
@include('admin.includes.script')

