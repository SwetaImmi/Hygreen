<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs Add | Admin Panel </title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- FavIcon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="css/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.3/daterangepicker.min.css" />
    <!-- Light Box CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" integrity="sha256-tBxlolRHP9uMsEFKVk+hk//ekOlXOixLKvye5W2WR5c=" crossorigin="anonymous" />
    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

    <!--  dropzone css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" />
    <!-- Latest compiled and minified CSS - http://bootstrap-table.wenzhixin.net.cn/getting-started/ -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">

    <script src="js/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/reorder-rows/bootstrap-table-reorder-rows.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/reorder-rows/bootstrap-table-reorder-rows.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/TableDnD/1.0.3/jquery.tablednd.js"></script>

    <script src="https://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/export/bootstrap-table-export.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/extensions/mobile/bootstrap-table-mobile.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.2/dist/jquery.fancybox.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.8.4/tinymce.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css" integrity="sha256-2kJr1Z0C1y5z0jnhr/mCu46J3R6Uud+qCQHA39i1eYo=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js" integrity="sha256-CgrKEb54KXipsoTitWV+7z/CVYrQ0ZagFB3JOvq2yjo=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css" integrity="sha256-2bAj1LMT7CXUYUwuEnqqooPb1W0Sw0uKMsqNH0HwMa4=" crossorigin="anonymous" />
    <script>
        function conf(msg) {
            if (typeof(msg) === 'undefined')
                msg = 'proceed';
            if (confirm('Are you sure?\nWant to ' + msg + '?')) {} else
                return false;
        }
    </script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="right_col" role="main">
                <!-- top tiles -->
                <br />
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Blogs Us <small>Blog content for App</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />

                                <div class="col-md-offset-1 col-md-6">
                                    <h4>Blog Us <small>Blog content for App Users</small></h4>
                                </div>
                                <div class="col-md-12">
                                    <hr style="margin-top: 5px;">
                                </div>
                                <form id="blog_form" method="POST" action="about-add-post" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="about_us" name="about_us" required value='1' />
                                    <!-- <input type="hidden" id="author" name="author" required value='' /> -->
                                    <input type="hidden" id="id" name="id" required value='1' />

                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="message">Blog Title</label>
                                        <div class="col-md-9">
                                            <input class='form-control' type="text" name="type" list="type_name" required>
                                            <datalist id="type_name">
                                                <option value="">Select Type</option>
                                                @foreach($setting as $type)
                                                <option value="{{$type->type}}">{{$type->type}}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                    </div>

                                    <!-- 
                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="message">Blog short Descrioption</label>
                                        <div class="col-md-9">
                                            <input class='form-control' type="text" name="short_description" required>
                                        </div>
                                    </div> -->


                                    <div class="form-group">
                                        <label class="control-label col-md-2" for="message">Blog Long Description</label>
                                        <div class="col-md-9">
                                            <textarea name='message' id='message' class='form-control' required></textarea>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="control-label col-md-2" for="message">Blog Image/vedio</label>
                                        <div class="col-md-9">
                                            <input class='form-control' type="file" name="image_vedio" required>
                                        </div>
                                    </div> -->

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button type="submit" id="submit_blog_btn" class="btn btn-success">Add Blogs </button>
                                        </div>
                                    </div>
                                </form>

                                <div class="row">
                                    <div class="col-md-offset-3 col-md-4" style="display:none;" id="blog_result">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script>
        tinymce.init({
            selector: '#message',
            height: 400,
            menubar: true,
            plugins: [
                'advlist autolink lists link charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime table contextmenu paste code help wordcount'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            setup: function(editor) {
                editor.on("change keyup", function(e) {
                    //tinyMCE.triggerSave(); // updates all instances
                    editor.save(); // updates this instance's textarea
                    $(editor.getElement()).trigger('change'); // for garlic to detect change
                });
            }
        });
    </script>
    <script>
        $('#blog_form').validate({
            rules: {
                name: "required"
            }
        });
        $('#blog_form').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            if ($("#blog_form").validate().form()) {
                if (confirm('Are you sure? Want to change the Blog  content? This will reflect to all app users')) {
                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        beforeSend: function() {
                            $('#submit_blog_btn').html('Please updating..');
                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function(result) {
                            console.log(result)
                            $('#message').html(result);
                            $('#blog_result').show().delay(3000).fadeOut();
                            $('#submit_blog_btn').html('Add message Us');
                        }
                    });
                }
            }
        });
    </script>
</body>

</html>