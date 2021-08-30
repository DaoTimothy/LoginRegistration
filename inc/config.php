<?php
    //if constant isn't defined, do not load the file
    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    //include DB.php
    include_once "classes/DB.php";

    $con = DB::getConnection();
?>