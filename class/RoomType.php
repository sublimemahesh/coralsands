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
        $this->roomType_g = $data['room_type_g'];
        $this->roomType_r = $data['room_type_r'];
        $this->roomType_c = $data['room_type_c'];
        $this->price = $data['price'];
        $this->shortDescription = $data['shortDescription'];
        $this->shortDescription_g = $data['shortDescription_g'];
        $this->shortDescription_r = $data['shortDescription_r'];
        $this->shortDescription_c = $data['shortDescription_c'];
        $this->description = $data['description'];
        $this->description_g = $data['description_g'];
        $this->description_r = $data['description_r'];
        $this->description_c = $data['description_c'];
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

        $query = "INSERT INTO `room-type` (`room_type`,`room_type_g`,`room_type_r`,`room_type_c`,`main_photo`,`price`,`shortDescription`,`shortDescription_g`,`shortDescription_r`,`shortDescription_c`,`description`,`description_g`,`description_r`,`description_c`,`num_of_room`) VALUES('" . mysql_real_escape_string($this->roomType) . "','" . mysql_real_escape_string($this->roomType_g) . "','" . mysql_real_escape_string($this->roomType_r) . "','" . mysql_real_escape_string($this->roomType_c) . "','" . mysql_real_escape_string($imgName) . "','" . mysql_real_escape_string($this->price) . "','" . mysql_real_escape_string($this->shortDescription) . "','" . mysql_real_escape_string($this->shortDescription_g) . "','" . mysql_real_escape_string($this->shortDescription_r) . "','" . mysql_real_escape_string($this->shortDescription_c) . "','" . mysql_real_escape_string($this->description) . "','" . mysql_real_escape_string($this->description_g) . "','" . mysql_real_escape_string($this->description_r) . "','" . mysql_real_escape_string($this->description_c) . "','" . mysql_real_escape_string($this->numofRoom) . "')";

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
        $this->roomType_g = $data['room_type_g'];
        $this->roomType_r = $data['room_type_r'];
        $this->roomType_c = $data['room_type_c'];
        $this->price = $data['price'];
        $this->shortDescription = $data['shortDescription'];
        $this->shortDescription_g = $data['shortDescription_g'];
        $this->shortDescription_r = $data['shortDescription_r'];
        $this->shortDescription_c = $data['shortDescription_c'];
        $this->description = $data['description'];
        $this->description_g = $data['description_g'];
        $this->description_r = $data['description_r'];
        $this->description_c = $data['description_c'];
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
                . "`room_type_g` = '" . mysql_real_escape_string($this->roomType_g) . "',"
                . "`room_type_r` = '" . mysql_real_escape_string($this->roomType_r) . "',"
                . "`room_type_c` = '" . mysql_real_escape_string($this->roomType_c) . "',"
                . "`price` = '" . mysql_real_escape_string($this->price) . "',"
                . " `shortDescription` = '" . mysql_real_escape_string($this->shortDescription) . "',"
                . " `shortDescription_g` = '" . mysql_real_escape_string($this->shortDescription_g) . "',"
                . " `shortDescription_r` = '" . mysql_real_escape_string($this->shortDescription_r) . "',"
                . " `shortDescription_c` = '" . mysql_real_escape_string($this->shortDescription_c) . "',"
                . "`description` = '" . mysql_real_escape_string($this->description) . "',"
                . "`description_g` = '" . mysql_real_escape_string($this->description_g) . "',"
                . "`description_r` = '" . mysql_real_escape_string($this->description_r) . "',"
                . "`description_c` = '" . mysql_real_escape_string($this->description_c) . "',"
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
