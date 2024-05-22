@extends('admin.layouts.main')
@section("")
<!-- alert -->
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

<!-- alert -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>General Form</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8" style="margin-left: 100px;">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #57bf35;">
                            <h3 class="card-title">Sub Category Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('sub-category-add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <input type="hidden" name="user_id" value="1">
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                    <select   class="form-control" name="category_id" id="category_id " placeholder="Enter Category">
                                    <option value="">Select</option>   
                                    @foreach($category as $catg)
                                        <option value="{{$catg->id}}">{{$catg->id}}  {{$catg->category_name}}</option>
                                        @endforeach
                                    </select>
                                    <span> @error('category_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    <!-- <input type="text" class="form-control" name="category_id " id="category_id " placeholder="Enter Product Category"> -->
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Title</label>
                                    <input type="text" class="form-control" name="sub_category_name" id="category_name" placeholder="Enter Sub Category Name">
                                    <span> @error('sub_category_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Discription</label>
                                    <input  type="text" class="form-control" name="sub_category_desc" id="category_desc" placeholder="Enter Sub Category Discription">
                                    <span> @error('sub_category_desc')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                     
                                    <div class="form-group">
                                    <label for="exampleInputFile">Icon</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="sub_category_image" id="sub_category_image">
                                            <span> @error('category_desc')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                            <label class="custom-file-label" for="exampleInputFile">Enter Sub Category Image</label>
                                        </div>

                                    </div>
                                </div>
                             
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" style="background-color: #57bf35;">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection