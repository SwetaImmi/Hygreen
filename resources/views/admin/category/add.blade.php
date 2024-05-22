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
                        <li class="breadcrumb-item"><a href="{{('/admin')}}">Home</a></li>
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
                            <h3 class="card-title">Category Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('category-add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                            <input type="hidden" name="user_id" value="1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Title</label>
                                    <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name">
                                     <span> @error('category_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category Discription</label>
                                    <input  type="text" class="form-control" name="category_desc" id="category_desc" placeholder="Enter Category Description">
                                     <span> @error('category_desc')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                     
                                    <!-- </textarea> -->
                             
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file"  class="form-control" name="category_image" id="category_image">
                                            <!-- <label class="custom-file-label" for="exampleInputFile">Enter Category Image</label> -->
                                            <span> @error('category_image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
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