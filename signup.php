
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Jeopardy! - Sign Up</title>
        <link type = "text/css" rel = "stylesheet" href = "style.css"/>
        <link rel="icon" type="image/x-icon" href="jeopardyPageLogo.jpeg">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    </head>
    <body>
    <?php
            session_start();
        ?>
        
        <form action = "signup-submit.php" method = "POST">
            <fieldset>
                <h1>Sign Up!</h1>
                <label for = "username"><strong>Username:</strong></label>
                <input type = "text" size = "16" name = "Username" placeholder="@Username" required></br>
                <label for = "password"><strong>Password:</strong></label>
                <input type = "password" size = "16" name = "Password" placeholder="Password" required></br>
                <label for = "name"><strong>Name:</strong></label>
                <input type = "text" size = "16" name = "USER" placeholder="Name" required></br>
                <input type = "submit" name ="Submit" value = "Sign Up!">
                <p>Already have an account? <a href="index.php">Log in</a></p>
            </fieldset>
            
        </form>
      
    </body>
</html>