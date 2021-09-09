<?php 

    define('__CONFIG__', true);
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //header('Content-Type: application/json');
        
        $return = [];

        $email = Filter::String($_POST['email']);

        $user_found = User::Find($email);

        if($user_found) {
            //user exists
            $findUser = $con->prepare("SELECT user2 FROM friends WHERE user2 = LOWER(:email) LIMIT 1");
            $findUser->bindParam(':email', $email, PDO::PARAM_STR);
            $findUser->execute();
            if 

        } else {
            //user does not exist

        }

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        exit('Invalid URL');
    }
?>