<?php 

    define('__CONFIG__', true);
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('Content-Type: application/json');
        
        $return = [];

        //Make sure the user does not exist

        //Make sure the user can be added and is added

        //Redirect
        $return['redirect'] = '/LoginRegistration/dashboard.php';
        $return['name'] = "Timothy D";
        
        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        exit('test');
    }
?>