<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Jeopardy! - Login</title>
        <link type = "text/css" rel = "stylesheet" href = "styles.css"/>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
    </head>
    <body>
        <?php
            function console_log( $data ){
                echo '<script>';
                echo 'console.log('. json_encode( $data ) .')';
                echo '</script>';
              }
    $userData = array(
         $_POST['Username'],
         $_POST['Password'],
    );
    $loginFailed  = TRUE;
    $currentUser;
    session_start();
    $txt_file  = file_get_contents('UsersInfo.txt');
    $rows = explode("\n", $txt_file);
    foreach($rows as $row => $data)
    {
        //get row data
        $row_data = explode(',', $data);
        if($row_data[0] == $userData[0] && $row_data[1] == $userData[1]){
            $loginFailed = FALSE;
            $currentUser = $row_data;
        }
    }
    if($loginFailed == TRUE){
        $_SESSION['loginFail'] = TRUE;
        $_SESSION['info'] = $users;
        header("Location: index.php");
    }
    else{
        $_SESSION["USER"] = $currentUser;
        header("Location: main.php");
    }
        ?>
    </body>
</html>