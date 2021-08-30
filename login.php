<?php 

    define('__CONFIG__', true);
    require_once "inc/config.php" 
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
                <form class="uk-form-stacked js-login">
                    <fieldset class="uk-fieldset">

                        <legend class="uk-legend">Email</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="email" required="required" placeholder="email@email.com">
                        </div>

                        <legend class="uk-legend">Password</legend>

                        <div class="uk-margin">
                            <input class="uk-input" type="password" required="required" placeholder="Your Password">
                        </div>

                        <div class="uk-margin">
                            <button class="uk-button uk-button-default" type="submit">Login</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <?php require_once "inc/footer.php"; ?>
    </body>
</html>