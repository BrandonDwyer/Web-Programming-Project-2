<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Jeopardy! - Sign in</title>
        <link type = "text/css" rel = "stylesheet" href = "style.css"/>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    </head>
    <body>

       
        <form action = "login-submit.php" method = "POST">
            <fieldset>
                <h1>Sign in!</h1>
                <label for = "username"><strong>Username:</strong></label>
                <input type = "text" placeholder="@UserName" size = "16" name = "username" required></br>
                <label for = "password"><strong>Password:</strong></label>
                <input type = "password" placeholder="Password" size = "16" name = "password" required></br>
                <input type = "submit" value = "Login"/>
                <p>Don't have an account? <a href = "signup.php">Sign up</a></p>
            </fieldset>
            
        </form>
        
    </body>
</html>