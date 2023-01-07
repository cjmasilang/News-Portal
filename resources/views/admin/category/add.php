@extends('admin.includes.admin_home')

@section('title') Add New Category - {{ config('app.name', 'Laravel') }} @endsection

@section('content')
 <!-- Page Wrapper -->
 <div class="page-wrapper">
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Add Category</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add Category</li>
                    </ul>
                </div>

                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('category.index') }}" class="btn btn-dark" ><i class="fa fa-eye"></i> View All Category</a>
                </div>
            </div>
        </div>

@include('admin.includes.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name">Under Category <span class="text-danger">*</span></label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="0">Main Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{$category->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category_name">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="category_name" id="category_name">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="category_name">Category Description <span class="text-danger">*</span></label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control "></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check" data-children-count="1">
                                            <input class="form-check-input" type="checkbox" value="1" name="status" id="status" checked>
                                            <label class="form-check-label" for="invalidCheck">
                                                Mark as Active
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="text-left">
                                <button type="submit" class="btn btn-dark">Add Category</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>

@endsection


@section('js')
    <!-- Datatable JS -->
    <script src="{{ asset('public/adminpanel/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/adminpanel/assets/js/dataTables.bootstrap4.min.js') }}"></script>
@endsection
