<?php

class User {

    public function isUser($data) {

        $db = new DB();

        $query = "SELECT `name`,`username`,`password` FROM `user` WHERE `username` = '" . $data['username'] . "' AND `password` = '" . $data['password'] . "' ";

        $result = $db->readQuery($query);

        if (!mysql_fetch_array($result)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getUser() {

        $db = new DB();

        $query = "SELECT * FROM `user`";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {

            $array_res['id'] = $row['id'];
            $array_res['name'] = $row['name'];
            $array_res['username'] = $row['username'];
            $array_res['password'] = $row['password'];
        }

        return $array_res;
    }

    public function isExists($data) {

        $db = new DB();

        $query = "SELECT * FROM `user` WHERE `password` = '" . $data['oldpassword'] . "' ";

        $result = $db->readQuery($query);

        if (!mysql_fetch_array($result)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function edit($data) {
        
        $db = new DB();

        $query = "UPDATE `user` SET `name` = '" . $_POST['name'] . "', `username` = '" . $_POST['username'] . "', `password` = '" . $_POST['comfirmpass'] . "' WHERE `id` = '1' ";

        $result = $db->readQuery($query);

        return $result;
    }

}
