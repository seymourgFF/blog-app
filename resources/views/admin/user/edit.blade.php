@extends('admin.layouts.head')
@section('admin-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit user</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <form action="{{route('admin.user.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input value="{{$user->name}}" type="text" class="form-control" id="exampleInputName" name="name" placeholder="Enter name of user">
                                    @error('name')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="exampleInputName">Email</label>
                                    <input value="{{$user->email}}" type="email" class="form-control" id="exampleInputmail" name="email" placeholder="Enter email">
                                    @error('email')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="form-group">
                                    <label for="exampleInputName">Role</label>
                                    <select class="form-control" id="exampleInputRol" name="role" >
                                        @foreach($roles as $id =>$role){
                                        <option {{$id == $user->role ? 'selected' : ''}} value="{{$id}}">{{$role}}</option>
                                        }
                                        @endforeach
                                    </select>
                                    @error('role')
                                    <div class="danger text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
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
