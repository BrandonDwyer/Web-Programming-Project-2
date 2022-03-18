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
             session_start();
            $user_file = fopen('users.txt','a');
            $dataPush = array(
                $_POST['Username'],
                $_POST['Password'],
                $_POST['Name']
            );
            $csv_file = file_get_contents('users.txt');
            $user_file = fopen("php://temp", 'r+');
            fputs($user_file,$csv_file);
            rewind($user_file);
            $users = [];
            while(($data = fgetcsv($user_file)) !== FALSE){
                $users[] = $data;
            }
            $_SESSION['signupFail'] = FALSE;
            for($a = 0; $a < count($users); $a++){
                if(!isset($users[$i][0])){ //Error handling in case of bad pushes to the csv.
                    continue;
                }
                elseif($_POST['Username'] == $users[$a][0]){
                        $_SESSION['signupFail'] = TRUE;
                        header("Location: signup.php");
                }
                else{
                    continue;
                }

            
            }
            fclose($user_file);
            $$user_file = fopen("users.txt", 'w');
            print_r($dataPush);
            fputcsv($user_file, $dataPush);
            header("Location: index.php?");
            fclose($user_file);
            ?>

</body>
</html>