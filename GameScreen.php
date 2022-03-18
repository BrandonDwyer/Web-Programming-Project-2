<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="jeopardy.css">
<title> Jeporady Main Page</title>
</head>
<body>
<?php
// Start the session
    session_start();
    //$_SESSION["USER"];
    $info = "";
    if(!isset($_SESSION['USER'])){
        header('Location: /index.php');
    }else{
        $info = "{$_SESSION['USER']} You Have Earned {$_SESSION['Points']} Dollars";
    }


?>
<h1> JEOPARDY !</h1>

<h1> <?php  echo $info ?></h1>


<!-- Creating Game Board Table -->
<table>

<!-- Creating Category Row For Game Board -->
<tr>
<td> Sports</td> 
<td> History</td> 
<td> Science</td> 
<td> Geography</td> 
<td> Cars</td> 
<td> Animals</td>
</tr>

<!-- Creating $200 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?1">200</a> </td> 
</tr>

<!-- Creating $400 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?4"> 400</a> </td> 
</tr>

<!-- Creating $600 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?2"> 600</a> </td> 
</tr>

<!-- Creating $800 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?5"> 800</a> </td> 
</tr>

<!-- Creating $1000 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?2"> 1000</a> </td> 
</tr>
</table>
<!-- End of Game Board Table-->


</body>
</html>