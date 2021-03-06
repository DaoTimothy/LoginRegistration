<?php
    //if constant isn't defined, do not load the file
    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    if(!isset($_SESSION)) {
        session_start();
    }

    error_reporting(-1);
    ini_set('display_errors', 'On');
    //include DB.php
    include_once "classes/DB.php";
    include_once "classes/Filter.php";
    include_once "classes/User.php";
    include_once "classes/Page.php";
    include_once "functions.php";

    $con = DB::getConnection();
?>