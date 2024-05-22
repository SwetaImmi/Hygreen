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
                            <a role="button" class="btn btn-primary" href="{{url('sub-category')}}">Create Sub Category</a>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($subCategory as $product)
                                    <tr>
                                        <td><img src="{{asset('/backend/subcategory/'.$product->sub_category_icon)}}" alt="image" style="width: 50px;    height: 50px;    border-radius: 20%" />
                                        </td>
                                        <td>{{$product->sub_category_name}}</td>
                                        <td>{{$product->sub_category_desc}}
                                        </td>
                                        @foreach($category as $categories)
                                        @if($categories->id == $product->category_id )

                                        <td>{{$product->category_id }} || {{$categories->category_name }}</td>

                                        <td>
                                            <!-- <a href="#" class="btn btn-info text-white view-btn" data-toggle="modal" data-target="#viewModal" data-details="{{ json_encode($product) }}">View</a> -->
                                            <a href="{{ url('sub-category-edit', $product->id) }}" class="btn btn-success ">Edit</a>
                                            <!-- <a href="{{ url('category-list') }}" class="btn " style="background-color: darkcyan;">Categories</a> -->
                                            <a href="{{ route('sub.delete', $product->id) }}" class="btn" style="background-color:tomato; color:red; "><i class="fa fa-trash"></i></a>

                                            <!-- <a href="#" class="btn btn-info text-white view-btn" data-toggle="modal" data-target="#viewModal" data-details="{{ json_encode($product) }}">Delete</a> -->

                                        </td>
                                    </tr>
                                    @else
                                    @endif
                                    @endforeach
                                    @endforeach


                                </tbody>

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