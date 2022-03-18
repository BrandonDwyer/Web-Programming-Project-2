<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Jeopardy! - Sign Up</title>
        <link type = "text/css" rel = "stylesheet" href = "style.css"/>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    </head>
    <body>
<?php 
            // session_start();
            $score = 0;
            $dataPush = array(
                'UserName' => $_POST['Username'],
                'Password' =>  $_POST['Password'],
                'Name' =>  $_POST['Name'],
                'Score' => $score
            );
            
            $user_details = $dataPush;
            $new_data = implode(",", $user_details);
            file_put_contents("UsersInfo.txt", PHP_EOL.$new_data, FILE_APPEND);
            header('Location: /index.php');
            ?>

</body>
</html>