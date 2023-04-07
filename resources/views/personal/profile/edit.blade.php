@extends('personal.layouts.head')
@section('personal-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit profile {{$user->name}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('personal.profile.show')}}">{{$user->name}}</a></li>
                            <li class="breadcrumb-item active">Edit profile {{$user->name}}</li>
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
                    <div class="col-md-8">
                        <form action="{{route('personal.profile.update',auth()->id())}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center col-md-3">
                                        @if(empty($user->main_image))
                                            <img class="profile-user-img img-fluid img-circle"
                                                 src="/storage/images/User-avatar.svg.png">
                                        @else
                                            <img class="profile-user-img img-fluid img-circle"
                                                 src="{{asset('/storage/'.$user->main_image)}}">
                                        @endif
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" value="{{$user->main_image}}" class="custom-file-input" name="main_image">
                                                    <label class="custom-file-label">Choose file</label>
                                                </div>
                                            </div>
                                            @error('main_image')
                                            <div class="danger text-danger">{{ $message }}</div>
                                            @enderror
                                        <h3 class="profile-username text-center">
                                            <label for="exampleInputName">Name</label>
                                            <input value="{{$user->name}}" type="text" class="form-control"
                                                   id="exampleInputName" name="name" placeholder="Enter your name"></h3>
                                        @error('name')
                                        <div class="danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Описание</b>
                                            <a >
                                                <textarea id="summernote_user" name="description" >{{$user->description}}</textarea>
                                                @error('description')
                                                <div class="danger text-danger">{{ $message }}</div>
                                                @enderror
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Номер телефона</b>
                                            <a>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="number" id="phone" name="phone" value="{{$user->phone}}" class="form-control" >
                                                </div>
                                                @error('phone')
                                                <div class="danger text-danger">{{ $message }}</div>
                                                @enderror
                                            </a>
                                        </li>
                                    </ul>
                                    <input value="{{$user->id}}" type="hidden" name="id" >
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Submit"/>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

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
