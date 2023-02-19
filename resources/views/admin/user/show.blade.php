@extends('admin.layouts.head')
@section('admin-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 flex">{{$user->name}}
                            <span class="ml-2 mr-2 ">
                                <a href="{{route('admin.user.edit', $user->id)}}">
                                    <i class="fa fa-pen"></i>
                                </a>
                            </span>
                            <span class="ml-2 mr-2 ">
                            <form action="{{route('admin.user.delete', $user->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="border-0 bg-transparent" type="submit">
                                    <a class="text-danger" ><i class="fa fa-trash" role="button"></i></a>
                                </button>
                            </form>
                            </span>
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a></li>
                            <li class="breadcrumb-item active">User {{$user->name}}</li>
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
                    <div class="col-5">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-sm">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$user->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>{{$user->role}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date to add</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
