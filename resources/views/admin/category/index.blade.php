@extends('admin.includes.admin_home')

@section('title') All Categories - {{ config('app.name', 'Laravel') }} @endsection


@section('content')

	<!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">View All Categories</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">All Categories</li>
                        </ul>
                    </div>

                    <div class="col-auto float-right ml-auto">
                        <a href="{{ route('category.add') }}" class="btn btn-dark" ><i class="fa fa-plus"></i> Add Category</a>
                    </div>


                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-0">

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="datatable table table-stripped mb-0">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Category Name</th>
                                            <th>Main Category</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $loop->index +1}}</td>
                                            <td>{{ $category->category_name }}</td>
                                            <td>
                                                @if($category->parent_id == 0)
                                                    Main Category
                                                @else
                                                    {{ $category->subCategory->category_name }}
                                                @endif
                                            </td>

                                            <td>
                                                @if($category->status == 1 )
                                                    <p><a href="#" class="text-success">Active</a></p>
                                                @else
                                                    <p><a href="#" class="text-dark">In Active</a></p>
                                                @endif
                                            </td>

                                            <td>
                                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info btn-sm">
                                                    <i class="la la-edit"></i>
                                                </a>

                                                <a href="javascript:" class="btn btn-danger btn-sm deleteRecord" rel="{{ $category->id }}" rel1="delete-category">
                                                    <i class="la la-trash"></i>
                                                </a>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->


@endsection

@section('js')
    <!-- Datatable JS -->
    <script src="{{ asset('public/adminpanel/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $('body').on('click', '.deleteRecord', function (event) {
            event.preventDefault();
            var SITEURL = '{{ URL::to('') }}';
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                title: "Are You Sure? ",
            text: "You will not be able to recover this record again",
            type: "warning",
            showCancelButton: true,
                confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Delete it!"
        },
            function () {
                window.location.href =  SITEURL + "/admin/" + deleteFunction + "/" + id;
            });
        });
    </script>
    @endsection
