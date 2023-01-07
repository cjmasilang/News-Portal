			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>

                           <!-- Dashboard -->
                            @if(Session::get('admin_page') == 'dashboard')
                                @php $active = 'active' @endphp
                                    @else
                                @php $active = '' @endphp
                            @endif

							<li class="{{ $active }}">
								<a href="{{ route ('adminDashboard') }}"><i class="la la-dashboard"></i> <span> Dashboard</span> </a>
							</li>

                            <span>UI Elements</span>
                            <!-- Category -->
                            @if(Session::get('admin_page') == 'category')
                            @php $active = 'active' @endphp
                                @else
                            @php $active = '' @endphp
                            @endif
                            <li class="{{ $active }}">
								<a href="{{ route ('category.index') }}"><i class="la la-list"></i> <span> Category</span> </a>
							</li>

                            <!-- News -->
                            @if(Session::get('admin_page') == 'news')
                            @php $active = 'active' @endphp
                                @else
                            @php $active = '' @endphp
                            @endif
                            <li class="{{ $active }}">
								<a href="{{ route ('news.index') }}"><i class="la la-newspaper-o"></i> <span> News Management</span> </a>
							</li>

						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->

