@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show user</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Главная</li>
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
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <a class="btn btn-outline-primary mr-3" href="{{ route('user.edit', $user->id) }}">Edit user</a>

                            <form action="{{route('user.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('delete')

                                <button class="btn btn-outline-danger" type="submit">delete</button>
                            </form>

                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">

                                <tbody>

                                <tr>
                                    <td>Id</td>
                                    <td>{{$user->id}}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{$user->name}}</td>
                                </tr>
                                <tr>
                                    <td>surname</td>
                                    <td>{{$user->surname}}</td>
                                </tr>
                                <tr>
                                    <td>age</td>
                                    <td>{{$user->age}}</td>
                                </tr>
                                <tr>
                                    <td>address</td>
                                    <td>{{$user->address}}</td>
                                </tr>
                                <tr>
                                    <td>patronymic</td>
                                    <td>{{$user->patronymic}}</td>
                                </tr>
                                <tr>
                                    <td>gender</td>
                                    <td>{{$user->genderTitle}}</td>
                                </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
