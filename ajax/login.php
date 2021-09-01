<?php 

    define('__CONFIG__', true);
    require_once "../inc/config.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        //header('Content-Type: application/json');
        
        $return = [];

        $email = Filter::String($_POST['email']);
        $password = $_POST['password'];

        $user_found = User::Find($email, true);

        if($user_found) {
            //user exists
            $user_id = (int) $user_found['user_id'];
            $hash = (string) $user_found['password'];

            if(password_verify($password, $hash)) {
                //User is signed in
                $return['redirect'] = "/LoginRegistration/dashboard.php";

                $_SESSION['user_id'] = $user_id;
            } else {
                //invalid sign in
                $return['error'] = "Invalid user email/password combo";
            }
        } else {
            $return['error'] = "You do not have an account. <a href='/LoginRegistration/register.php'>Create one now?</a>";
        }

        echo json_encode($return, JSON_PRETTY_PRINT); exit;
    } else {
        exit('Invalid URL');
    }
?>