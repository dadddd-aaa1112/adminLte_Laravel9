@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add user</h1>
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
                <form action="{{route('user.store')}}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" placeholder="title" value="{{old('name')}}" class="form-control" name="name">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="email"  value="{{old('email')}}" class="form-control" name="email">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="password"  value="{{old('password')}}" class="form-control" name="password">
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" placeholder="password confirm"  value="{{old('password_confirmation')}}" class="form-control" name="password_confirmation">
                    </div>
                    <div class="form-group mb-3">
                        <input type="integer" placeholder="age" value="{{old('age')}}"  class="form-control" name="age">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="address" value="{{old('address')}}"  class="form-control" name="address">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="surname"  value="{{old('surname')}}" class="form-control" name="surname">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" placeholder="patronymic" value="{{old('patronymic')}}"  class="form-control" name="patronymic">
                    </div>
                    <div class="form-group mb-3">
                        <select name="gender">
                            <option {{ old('gender') == 1 ? 'selected' : '' }} value="1">мужчина</option>
                            <option {{ old('gender') == 2 ? 'selected' : '' }} value="2">женщина</option>
                        </select>

                    </div>

                    <button class="btn btn-success" type="submit">Add</button>
                </form>


            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
