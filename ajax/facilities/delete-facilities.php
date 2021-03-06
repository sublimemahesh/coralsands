<?php

include '../../include.php';

if(isset($_POST['Facilities'])){
    
    $facilities = new Facilities();
    
    $imgfac = $facilities->getById($_POST['Id']);
    
    $deletefac = $facilities->deleteById($_POST);
    
    if($deletefac){
        unlink('../../images/facilities/' . $imgfac['image_name']);
        unlink('../../images/facilities/thumb/' . $imgfac['image_name']);
    }
    
    header('Content-type: application/json');
    echo json_encode(['status' => $deletefac]);
    exit();
}

