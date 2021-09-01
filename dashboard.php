<?php 

    define('__CONFIG__', true);
    require_once "inc/config.php";

    ForceLogin();
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
            Dashboard, you are signed in as user: <?php echo$_SESSION['user_id']; ?>
        </div>

        <?php require_once "inc/footer.php"; ?>
    </body>
</html>