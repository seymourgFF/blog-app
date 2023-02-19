@extends('admin.layouts.head')
@section('admin-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Post</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Posts</a></li>
                            <li class="breadcrumb-item active">Create post</li>
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
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName" name="title" placeholder="Enter name of post">
                                    @error('title')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea id="summernote" name="content"></textarea>
                                    @error('content')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="main_image" >
                                            <label class="custom-file-label" >Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    @error('main_image')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option {{$category->id == old('category_id') ? 'selected': ''}} value="{{$category->id}}">{{$category->Title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Tags</label>
                                    <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Select tags"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                                <option {{ is_array( old('tag_ids') && in_array($tag->id, old('tag_ids'))) ? 'selected' : '' }} value="{{$tag->id}}">{{$tag->Title}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                @error('tag_ids')
                                    <div class="danger text-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group">
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
