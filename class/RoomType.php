<?php

class RoomType {

    public $roomname;
    public $mainphoto;
    public $price;
    public $shortDescription;
    public $description;
    public $numofroom;

    public function filename() {

        $serial = '';
        $tokens = '0123456789';
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $serial .= $tokens[rand(0, 9)];
            }
            if ($i < 2) {
                $serial .= '_';
            }
        }
        return $serial;
    }

    public function add($data, $file) {

        $db = new DB();

        $this->roomType = $data['room_type'];
        $this->price = $data['price'];
        $this->shortDescription = $data['shortDescription'];
        $this->description = $data['description'];
        $this->numofRoom = $data['num_of_room'];

        $dir_dest = '../images/room-type/';
        $dir_dest_thumb = '../images/room-type/thumb/';

        $handle = new Upload($file['image']);

        $newImgName = RoomType::filename();

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->file_new_name_body = $newImgName;
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 900;
            $handle->image_y = 600;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }

            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->file_new_name_body = $newImgName;
            $handle->image_ratio_crop = 'C';
            $handle->image_x = 300;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
            }
        }

        $query = "INSERT INTO `room-type` (`room_type`,`main_photo`,`price`,`shortDescription`,`description`,`num_of_room`) VALUES('" . mysql_real_escape_string($this->roomType) . "','" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($this->price) . "','" . mysql_real_escape_string($this->shortDescription) . "','" . mysql_real_escape_string($this->description) . "','" . mysql_real_escape_string($this->numofRoom) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAllRoomType() {

        $db = new DB();

        $query = "SELECT * FROM `room-type` ORDER BY sort ASC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            $type = array(
                'id' => $row['id'],
                'room_type' => $row['room_type'],
                'main_photo' => $row['main_photo'],
                'shortDescription' => $row['shortDescription'],
                'description' => $row['description'],
                'num_of_room' => $row['num_of_room']
            );

            array_push($array_res, $type);
        }

        return $array_res;
    }

    public function getAllRoomTypeById($id) {

        $db = new DB();

        $query = "SELECT * FROM `room-type` WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function edit($data, $file, $imageold, $id) {

        $db = new DB();

        $this->roomType = $data['room_type'];
        $this->price = $data['price'];
        $this->shortDescription = $data['shortDescription'];
        $this->description = $data['description'];
        $this->numofRoom = $data['num_of_room'];

        $dir_dest = '../images/room-type/';
        $dir_dest_thumb = '../images/room-type/thumb/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imageold;
            $handle->image_x = 900;
            $handle->image_y = 600;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }


            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imageold;
            $handle->image_x = 300;
            $handle->image_y = 200;

            $handle->Process($dir_dest_thumb);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `room-type` SET "
                . "`room_type` = '" . mysql_real_escape_string($this->roomType) . "',"
                . "`price` = '" . mysql_real_escape_string($this->price) . "',"
                . " `shortDescription` = '" . mysql_real_escape_string($this->shortDescription) . "',"
                . "`description` = '" . mysql_real_escape_string($this->description) . "',"
                . " `num_of_room` = '" . mysql_real_escape_string($this->numofRoom) . "'"
                . " WHERE `id` = '" . $id . "' ";

        $result = $db->readQuery($query);

        return $result;
    }
    
    public function deleteRoomTypeById($id){
        
        $db = new DB();
        
        $query = "DELETE FROM `room-type` WHERE `id` = '".$id."' ";
        
        $result = $db->readQuery($query);
        
        return $result;
    }

}
