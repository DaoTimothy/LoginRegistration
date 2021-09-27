<?php 

    define('__CONFIG__', true);
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //header('Content-Type: application/json');
        
        $return = [];

        $email = Filter::String($_POST['email']);

        $friend_found = User::friendList($email);

        if ($friend_found) {
            //show friends
            $return['friends_list'] = $friend_found
        } else {
            //say you have no friends
            $return['error'] = "You have no friends";
        }


        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        exit('Invalid URL');
    }
?>