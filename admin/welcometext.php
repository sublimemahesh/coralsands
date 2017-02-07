<!DOCTYPE html>
<html>

    <!-- Mirrored from almsaeedstudio.com/themes/AdminLTE/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Jan 2017 06:31:41 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | General Form Elements</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include './sidebar-menu.php'; ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Manage Welcome Note 
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Manage Welcome Note</a></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="box box-info">
                                <div class="box-header with-border">
                                    <h3 class="box-title"></h3>
                                </div>
                                <!-- /.box-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="image" class="col-sm-2 control-label">Image</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="slider-image" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="title" class="col-sm-2 control-label">Image Title</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="imagetitle" id="imagetitle" placeholder="Image Title" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="caption" class="col-sm-2 control-label">Caption</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="caption" id="caption" placeholder="Password" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="url" class="col-sm-2 control-label">URL</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="url" id="url" placeholder="URL" required="TRUE">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                                <button type="submit" class="btn btn-info pull-right">Add Slider</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box -->

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </section>

            </div>
            <!--/.col (right) -->
        </div>
        <?php include './footer.php'; ?>
        <div class="control-sidebar-bg"></div>

        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>
