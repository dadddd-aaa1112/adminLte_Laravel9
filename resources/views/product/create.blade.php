@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add product</h1>
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
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="title" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="description" class="form-control" name="description">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="content" class="form-control" name="content"></textarea>

                    </div>

                    <div class="form-group">
                        <input type="number" placeholder="price" class="form-control" name="price">
                    </div>

                    <div class="form-group">
                        <input type="number" placeholder="old price" class="form-control" name="old_price">
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="count" class="form-control" name="count">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="product_images[]" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;"
                                data-placeholder="Select category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="select2-purple">
                            <select name="tags[]" class="tags" multiple="multiple" data-placeholder="Select tags"
                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                                @foreach($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="select2-purple">
                            <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Select colors"
                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                                @foreach($colors as $color)
                                <option value="{{$color->id}}">{{$color->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="select2-purple">
                            <select name="group_id" class="colors"  data-placeholder="Select group"
                                    data-dropdown-css-class="select2-purple" style="width: 100%;">
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->title}}</option>
                                @endforeach
                            </select>
                        </div>
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
