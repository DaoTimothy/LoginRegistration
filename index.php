<?php 

    define('__CONFIG__', true);
    require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf.8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="follow" />

        <title> Page Title </title>

        <base href="/" />
        <link rel="stylesheet" href="/LoginRegistration/packages/uikit.min.css" />
    </head>
    <body>
        <div class="uk-section uk-container">
            <?php 
                echo "Hello world. Today is: ";
                echo date("Y m d");
            ?>
            <p>
                <a href="/LoginRegistration/login.php">Login</a>
                <a href="/LoginRegistration/register.php">Register</a>
            </p>
        </div>

        <?php require_once "inc/footer.php"; ?>
    </body>
</html>