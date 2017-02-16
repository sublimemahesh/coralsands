<?php
include '../include.php';

$id = $_GET['id'];

$roomTypeId = RoomType::getAllRoomTypeById($id);
$imageold = $roomTypeId['main_photo'];

if (isset($_POST['send'])) {
    $room = new RoomType();
    $result = $room->edit($_POST, $_FILES, $imageold, $id);

    if ($result) {
        $status_message = "Edit Room Successfully";
    } else {
        $status_message = "oops! Something Wrong...";
    }
}

$roomType = RoomType::getAllRoomTypeById($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Coral Sand Hotel - Admin Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <link href="css/custome.css" rel="stylesheet" type="text/css"/>

        <script src="tinymce/js/tinymce/tinymce.min.js"></script>
        <script>

            tinymce.init({
                selector: ".longText",
                // ===========================================
                // INCLUDE THE PLUGIN
                // ===========================================

                plugins: [
                    "advlist autolink lists link image charmap print preview anchor",
                    "searchreplace visualblocks code fullscreen",
                    "insertdatetime media table contextmenu paste"
                ],
                // ===========================================
                // PUT PLUGIN'S BUTTON on the toolbar
                // ===========================================

                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
                // ===========================================
                // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
                // ===========================================

                relative_urls: false

            });

        </script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php include './header.php'; ?>
            <?php include './sidebar-menu.php'; ?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        Manage Rooms
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="add-room-type.php">Manage Room Type</a></li>
                        <li class="active">Edit Room Type</li>
                    </ol>
                </section>

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="col-md-12 content">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#eng" data-toggle="tab">English</a></li>
                                <li><a href="#ger" data-toggle="tab">Germen</a></li>
                                <li><a href="#rus" data-toggle="tab">Russia</a></li>
                                <li><a href="#chi" data-toggle="tab">China</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="eng">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type" id="room_type" placeholder="Room Type" required="TRUE" value="<?php echo $roomType['room_type']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="main_photo" class="col-sm-2 control-label">Main Photo</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="image" id="main_photo">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="price" class="col-sm-2 control-label">Price</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="price" id="price" placeholder="Price" required="TRUE" value="<?php echo $roomType['price']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="num_of_room" class="col-sm-2 control-label">Number Of Room</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="num_of_room" id="num_of_room" placeholder="Number Of Room" required="TRUE" value="<?php echo $roomType['num_of_room']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription" id="shortDecription" placeholder="Short Decription" required="TRUE" value="<?php echo $roomType['shortDescription']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description" class="form-control longText" rows="5"><?php echo $roomType['description']; ?> </textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="ger">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_g" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_g" id="room_type_g" placeholder="Room Type" required="TRUE" value="<?php echo $roomType['room_type_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_g" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_g" id="shortDecription_g" placeholder="Short Decription" required="TRUE" value="<?php echo $roomType['shortDescription_g']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_g" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_g" class="form-control longText" rows="5"> <?php echo $roomType['description_g']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rus">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_r" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_r" id="room_type_r" placeholder="Room Type" required="TRUE" value="<?php echo $roomType['room_type_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_r" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_r" id="shortDecription_r" placeholder="Short Decription" required="TRUE" value="<?php echo $roomType['shortDescription_r']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_r" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_r" class="form-control longText" rows="5"><?php echo $roomType['description_r']; ?> </textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="chi">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="room_type_c" class="col-sm-2 control-label">Room Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="room_type_c" id="room_type_c" placeholder="Room Type" required="TRUE" value="<?php echo $roomType['room_type_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="shortDecription_c" class="col-sm-2 control-label">Short Description</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="shortDescription_c" id="shortDecription_c" placeholder="Short Decription" required="TRUE" value="<?php echo $roomType['shortDescription_c']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="description_c" class="col-sm-2 control-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea name="description_c" class="form-control longText" rows="5"> <?php echo $roomType['description_c']; ?></textarea> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <button type="submit" name="send" id="send" class="btn btn-info pull-right">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>

        <?php include './footer.php'; ?>

        <div class="control-sidebar-bg"></div>

        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/fastclick/fastclick.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/demo.js"></script>
    </body>
</html>
