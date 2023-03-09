@extends('personal.layouts.head')
@section('personal-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 flex">Профиль
                            <span class="ml-2 mr-2 ">
                                <a href="{{route('personal.profile.edit')}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </span>
                            <span class="ml-2 mr-2 ">

                            </span>
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$user->name}}</li>
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

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center col-md-3">
                                    @if(empty($user->main_image))
                                    <img class="profile-user-img img-fluid img-circle" src="/storage/images/User-avatar.svg.png" >
                                    @else
                                        <img class="profile-user-img img-fluid img-circle" src="{{asset('/storage/'.$user->main_image)}}" >
                                    @endif
                                    <h3 class="profile-username text-center">{{$user->name}}</h3>
                                </div>



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Описание</b>
                                        @if(empty($user->description))
                                            <a class="float-right">Пусто</a>
                                        @else
                                            <a class="float-right">{{$user->description}}</a>
                                        @endif
                                    </li>
                                </ul>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


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
