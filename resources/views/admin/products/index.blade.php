@extends('admin.layouts.main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section("")


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">


                    <div class="card">
                        <div class="card-header">
                            <!-- alert -->
                            @if ($message = Session::get('success'))
                            <div style="background-color: #d4edda;" class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            @if ($message = Session::get('error'))
                            <div style="background-color: #f8d7da;" class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif

                            <!-- alert -->
                            <!-- <h3 class="card-title">DataTable with default features</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a role="button" class="btn btn-primary" href="{{url('products/create')}}">Create Product</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->product_price}}
                                        </td>
                                        <td>{{$product->product_details}}</td>
                                        <td>{{$product->product_quantity}}</td>
                                        <td>{{$product->product_image}}</td>
                                        <td>
                                            <!-- <a href="#" class="btn btn-info text-white view-btn" data-toggle="modal" data-target="#viewModal" data-details="{{ json_encode($product) }}">View</a> -->
                                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success ">Edit</a>
                                            <hr>
                                            <a href="{{ route('products.delete', $product->id) }}" class="btn" style="background-color:tomato; color:red; "><i class="fa fa-trash"></i></a>
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
                                        <th>Quantity</th>
                                        <th>Image</th>
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