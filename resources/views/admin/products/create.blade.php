@extends('admin.layouts.mainPrdt')

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
    <section class="content-header" style="margin-top: -50px;">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1>General Form</h1> -->
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li> -->
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
                <div class="col-md-10" style="margin-left: 80px;">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #57bf35;">
                            <h3 class="card-title">Product Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('product_add')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter Product Name">
                                        <span> @error('product_name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Product Code</label>
                                        <input type="text" class="form-control" name="product_code" id="product_code" placeholder="Enter Product Code">
                                        <span> @error('product_code')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Category</label>
                                        <select type="text" class="form-control" name="category_id" id="category_id" placeholder="Enter Product Category">
                                            <option>Select</option>
                                            @foreach($category as $catg)
                                            <option value="{{$catg->id}}">{{$catg->category_name}}</option>

                                            @endforeach
                                          
                                        </select>
                                      
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Sub Category</label>
                                        <select name="sub_category_id" id="subcategory" class="form-control get_subcategory"></select>
                                        <span> @error('sub_category_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                        <!-- <select type="text" class="form-control" name="category_id" id="category_id" placeholder="Enter Product Category">
                                            <option>Select</option>
                                            @foreach($subCategory as $catg)
                                            <option value="{{$catg->id}}">{{$catg->id}} {{$catg->sub_category_name}}</option>
                                            @endforeach
                                        </select> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Per Product Price</label>
                                        <input type="number" class="form-control" name="product_price" id="product_price" placeholder="Enter Product Price">
                                        <span> @error('product_price')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Brand</label>
                                        <input type="text" class="form-control" name="product_brand" id="product_brand" placeholder="Enter Product Brand">
                                        <span> @error('product_brand')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                        <!-- <label for="exampleInputPassword1">Total Quantity</label>
                                        <input type="text" class="form-control" name="product_quantity" id="product_quantity" placeholder="Enter Product Quantity"> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Country of Origin</label>
                                        <input type="text" class="form-control" name="product_origin_country" id="product_origin_country" placeholder="Enter Country of Origin">
                                        <span> @error('product_origin_country')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Total Packaging</label>
                                        <input type="text" class="form-control" name="product_packging_quantity" id="product_packging_quantity" placeholder="Enter Product Packaging">
                                        <span> @error('product_packging_quantity')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputPassword1">Product Details</label>
                                        <input type="text" class="form-control" name="product_details" id="product_details" placeholder="Enter Product Details">
                                        <span> @error('product_details')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror</span>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="product_image" id="product_image">
                                                <span> @error('product_image')
                                                    <span class="text-danger">{{$message}}</span>
                                                    @enderror</span>
                                                <!-- <label class="custom-file-label" for="exampleInputFile">Enter Product Image</label> -->
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                    </div>
                    <!-- /.card-body -->
                    <!-- <input type="hidden" name="user_id" value="1">  -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" style="background-color: #57bf35;">Submit</button>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('change', '#category_id', function() {
            let category = $(this).val();
            $('#subcategory_info').show();
            $.ajax({
                method: 'post',
                url: "{{ route('get.subcategory') }}",
                data: {
                    category: category
                },
                success: function(res) {
                    console.log(res)
                    if (res.status == 'success') {
                        let all_options = "<option value=''>Select Sub Category</option>";
                        let all_subcategories = res.subcategories;
                        $.each(all_subcategories, function(index, value) {
                            all_options += "<option value='" + value.id +
                                "'>" + value.sub_category_name + "</option>";
                        });
                        $(".get_subcategory").html(all_options);
                    }
                }
            })
        });
    });
</script>
@endsection