<?php

class DB {

    private $databaseHost = "localhost";
    private $databaseName = "coral-sand-hotel";
    private $databaseUser = "root";
    private $databasePassword = "";

    public function __construct() {
        mysql_connect($this->databaseHost, $this->databaseUser, $this->databasePassword);
        mysql_select_db($this->databaseName) or die("Unable to Select Database");
    }

    public function readQuery($query) {
        $result = mysql_query($query) or die(mysql_error());
        return $result;
    }

}

function dd($data) {
    var_dump($data);
    exit();
}
