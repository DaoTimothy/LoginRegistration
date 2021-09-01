<?php

    if(!defined('__CONFIG__')) {
        exit('You do not have a config file');
    }

    class Page {
        static function ForceLogin() {
            if(isset($_SESSION['user_id'])) {
                //allowed
            } else {
                header("Location: /LoginRegistration/login.php"); exit;
            }
        }

        static function ForceDash() {
            if(isset($_SESSION['user_id'])) {
                header("Location: /LoginRegistration/dashboard.php"); exit;
            } else {
                
            }
        }
    }

?>