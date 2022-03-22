<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>

        <title>Jeopardy!</title>

        <link type = "text/css" rel = "stylesheet" href = "style.css"/>
        <link rel="icon" type="image/x-icon" href="jeopardyPageLogo.jpeg">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    </head>
    <body>

    <?php
            session_start();
        ?>

        <?php
            if(isset($_SESSION['loginFail'])){
                //Notification to the user that their Username or Password is not correct. 
                //The flag is checked and unset so future login attempts/signins do not show this message if the error is repeated.
                if($_SESSION['loginFail'] == TRUE){
                    echo "<h2>Incorrect username or password, please try again.</h2>";
                    $_SESSION['loginFail'] = FALSE;
                }
            }
        ?>
        



<form action = "login-submit.php" method = "POST">
            <fieldset>
                <h1>Sign in!</h1>
                <label for = "username"><strong>Username:</strong></label>
                <input type = "text" placeholder="@UserName" size = "16" name = "Username" required></br>
                <label for = "password"><strong>Password:</strong></label>
                <input type = "password" placeholder="Password" size = "16" name = "Password" required></br>
                <input type = "submit" name="Submit" value = "Login"/>
                <p>Don't have an account? <a href = "signup.php">SIGN UP</a></p>
            </fieldset>
            
        </form>
        
    </body>
</html>
