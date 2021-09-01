<?php
    function ForceLogin() {
        if(isset($_SESSION['user_id'])) {
            //allowed
        } else {
            header("Location: /LoginRegistration/login.php"); exit;
        }
    }

    function ForceDash() {
        if(isset($_SESSION['user_id'])) {
            header("Location: /LoginRegistration/dashboard.php"); exit;
        } else {
            
        }
    }
?>