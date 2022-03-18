<html>
<head>
<link rel="stylesheet" href="jeopardy.css">
<title> Jeporady Question Page</title>
</head>
<body>

<?php 

    $data = array(
        "1",
        "Question HERE",
        "Ans1",
        "Ans 2",
        "Ans 3",
        "Ans 4",
        "Ans 1",

   );
   $parameter = $_SERVER['QUERY_STRING'];
   session_start();

   $txt_file  = file_get_contents('questions.txt');
    $rows = explode("\n", $txt_file);
    foreach($rows as $row => $v)
    {
        $row_data = explode(',', $v);
        if($row_data[0] == $parameter){
            $data = $row_data;

        }
    }
   $selected = -1;
   if (isset($_POST['ans'])) {
    $answer = $_POST['ans'];  
    if ($answer == $data[6]) {    
        $val = (int)$_SESSION['Points'] + (int)$data[7];
        $_SESSION['Points'] = $val;
        header('Location: /GameScreen.php');
    }
    else {
        $val = (int)$_SESSION['Points'] - (int)$data[7];
        $_SESSION['Points'] = $val;
        header('Location: /GameScreen.php');
    } 
    }
?>
<h1> JEOPARDY !</h1>


<div class="submittion">
<h1><?php echo $data[1] ?></h1>
<div class = "Answers">
<form method="post" >
  <h2> <?php echo $data[2] ?> <input type="radio" name="ans" value="2"  /> </h2>
  <h2> <?php echo $data[3] ?> <input type="radio" name="ans" value="3"  /> </h2>
  <h2> <?php echo $data[4] ?><input type="radio" name="ans" value="4"  /> </h2>
  <h2> <?php echo $data[5] ?> <input type="radio" name="ans" value="5"? /> </h2>
  </div>
  <input type="submit" value="Submit" class = "submittionButton"/>

</form>


</div>



<!-- End of Table-->


</body>
</html>