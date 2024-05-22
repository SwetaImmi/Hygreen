@extends('admin.layouts.main')
@section("")
<!-- Content Wrapper. Contains page content -->

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
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
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
                            <h3 class="card-title">Banner Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('banner-add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Banner Name">
                                    <span> @error('title')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Banner Discription</label>
                                    <input type="text" class="form-control" name="description" id="description" placeholder="Enter Banner Discription">
                                    <span> @error('description')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror</span>
                                    <!-- </textarea> -->

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="banner_image" id="banner_image">
                                            <label class="custom-file-label" for="exampleInputFile">Enter Banner Image</label>
                                            
                                        </div>
                                       
                                    </div>
                                    <span> @error('banner_image')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror</span>
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