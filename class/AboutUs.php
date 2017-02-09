<?php

class AboutUs {

    public function update($data, $file, $imgOld) {

        $db = new DB();

        $dir_dest = '../images/about-us/';

        $handle = new Upload($file['image']);

        $imgName = null;

        if ($handle->uploaded) {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $imgOld;
            $handle->image_x = 1920;
            $handle->image_y = 800;

            $handle->Process($dir_dest);

            if ($handle->processed) {
                $info = getimagesize($handle->file_dst_pathname);
                $imgName = $handle->file_dst_name;
            }
        }

        $query = "UPDATE `about-us` SET "
                . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
                . "`description_g`= '" . mysql_real_escape_string($_POST['description_g']) . "',"
                . "`description_r` = '" . mysql_real_escape_string($_POST['description_r']) . "',"
                . "`description_c` = '" . mysql_real_escape_string($_POST['description_c']) . "'"
                . "WHERE `id` = 1 ";

        $result = $db->readQuery($query);

        return $result;
    }

    public function getAboutUs() {
        $db = new DB();

        $query = "SELECT * FROM `about-us` ";

        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        return $row;
    }

}
