@extends('admin.layouts.main')

@section("")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

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
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">DataTable with default features</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a role="button" class="btn btn-primary" href="{{url('category')}}">Create Category</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $product)
                                    <tr>
                                        <td>{{$product->category_name}}</td>
                                        <td>{{$product->category_desc}}
                                        </td>
                                        <!-- <td>{{$product->user_id }}</td> -->

                                        <td>
                                            <!-- <a href="#" class="btn btn-info text-white view-btn" data-toggle="modal" data-target="#viewModal" data-details="{{ json_encode($product) }}">View</a> -->
                                            <a href="{{ route('category.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                            <a href="{{ url('sub-category-list'.'?'.'cat'.'='.$product->id) }}" class="btn " style="background-color: darkcyan;" name="cat">Sub Categories</a>
                                            <a href="{{ route('category.delete', $product->id) }}" class="btn" style="background-color:tomato; color:red; "><i class="fa fa-trash"></i></a>

                                            <!-- <a href="#" class="btn btn-info text-white view-btn" data-toggle="modal" data-target="#viewModal" data-details="{{ json_encode($product) }}">Delete</a> -->

                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection