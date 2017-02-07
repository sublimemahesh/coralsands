<?php

session_start();

unset($_SESSION["coralsand"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION["password"]);

header('location: ./');
