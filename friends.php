<?php 

    define('__CONFIG__', true);
    require_once "inc/config.php";

    Page::ForceLogin();
    
    $User = new User($_SESSION['user_id']);

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
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid> 
                <div class="uk-section uk-container">

                    <h2>Friends</h2>
                    <legend class="uk-legend">Your Friends</legend>
                    
                    <br />
                    <form class="uk-form-stacked js-friendreq">
                        <fieldset class="uk-fieldset">

                            <legend class="uk-legend">Add Friend</legend>
                            <p>Input someone's email to request to add them as a friend.</p>

                            <div class="uk-margin">
                                <input class="uk-input" type="email" required="required" placeholder="email@email.com">
                            </div>

                            

                            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>

                            <div class="uk-margin">
                                    <button class="uk-button uk-button-default" type="submit">Find</button>
                            </div>
                        </fieldset>
                    </form>

                    <legend class="uk-legend">Requests</legend>

                    <br />
                    <p><a href="/LoginRegistration/dashboard.php">Dashboard</a> <a href="/LoginRegistration/logout.php">Logout</a></p>
                </div>
            </div>
        </div>

        <?php require_once "inc/footer.php"; ?>
    </body>
</html>