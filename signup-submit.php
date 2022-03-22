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
            $score = 0;
            $dataPush = array(
                'UserName' => $_POST['Username'],
                'Password' =>  $_POST['Password'],
                'Name' =>  $_POST['USER'],
                'Score' => $score
            );

            $handle = fopen("UsersInfo.txt", "r");
            $isValid = false;
            if($handle){
                while (!feof($handle)){
                    $line = fgets($handle);
                    $str_arr = preg_split("/\,/", $line);
                    if ($str_arr[0] == $dataPush['UserName']) {
                        $isValid = true;
                     
                        
                    }
                }
                if ($isValid != true){

                    $user_details = $dataPush;
                    $new_data = implode(",", $user_details);
                    file_put_contents("UsersInfo.txt", PHP_EOL.$new_data, FILE_APPEND);
                    header('Location: index.php');
                }
                else {
                    echo "
                    
                    <h3> Sorry, username already exist. Please try another 
                    <a href= signup.php>Sign up</a></h3>";
                    
                }
            fclose($handle);
            } else {
                echo "cannot read file";
            }
            
?>
</body>
</html>