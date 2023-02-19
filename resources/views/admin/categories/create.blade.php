@extends('admin.layouts.head')
@section('admin-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Category</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Categories</a></li>
                            <li class="breadcrumb-item active">Create category</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.category.store')}}" method="POST">
                            @csrf
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="title" placeholder="Enter name of category">
                                    @error('title')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->
                <!-- Main row -->

                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
