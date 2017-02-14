<?php

include '../../include.php';

if (isset($_POST['Activities'])) {

    $activities = new Activities();

    $actPhoto = new ActivityPhotos();

    $getbyid = $activities->getById($_POST['Id']);

    $details = $activities->deleteById($_POST);

    $photo = $actPhoto->deleteByActivityId($_POST);

    if ($details && $photo) {
        unlink('../images/activities/' . $getbyid['image_name']);
        unlink('../images/activities/thumb/' . $getbyid['image_name']);

        unlink('../images/activities/photos/' . $getbyid['image_name']);
        unlink('../images/activities/photos/thumb/' . $getbyid['image_name']);
    }

    header('Content-type: application/json');
    echo json_encode(['status' => $details]);
    exit();
}

