<?php

include '../../controller/DatabaseController.php';
include '../../model/User.php';
include '../../controller/UserController.php';

if (isset($_POST['deleteRoom'])) {
    $room = new Room();
    
    $result = $room->deleteRoomById($_POST);
    
    header('Content-type: application/json');
    echo json_encode(['status' => $result]);
    exit();
}