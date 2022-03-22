<?php
// Start the session
session_start();
require_once('functions.php');
if(!isset($_SESSION['USER'])){
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="jeopardy.css">
<link rel="icon" type="image/x-icon" href="jeopardyPageLogo.jpeg">
<title> Jeporady Main Page</title>
</head>
<body>

<div class="jeo">JEOPARDY!</div>

<p> Welcome <?php echo $_SESSION["USER"]; ?>! </p>

<?php
// Set session variables
$_SESSION["user1"] = 1500;
$_SESSION["user2"] = 1000;
$_SESSION["user3"] = 900;



if($_SESSION['max'] > $_SESSION["user1"]){
  $_SESSION["user1"] = $_SESSION["USER"]." - ".$_SESSION['max'];
}
else if($_SESSION['max'] > $_SESSION["user2"]){
  $_SESSION["user2"] = $_SESSION["USER"]." - ".$_SESSION['max'];
}
else if($_SESSION['max'] > $_SESSION["user3"]){
  $_SESSION["user3"] = $_SESSION["USER"]." - ".$_SESSION['max'];
}
?>

<div id="d1">
<h3> LeaderBoard</h3>
<ol class="list">
   <li> <?php echo $_SESSION["user1"]; ?> </li>
   <li> <?php echo $_SESSION["user2"]; ?> </li>
   <li> <?php echo $_SESSION["user3"]; ?> </li>
</ol>

</div>

<form method="POST" action="GameScreen.php">
<button class="button"> PLAY</button>
<a class="link" href = "logout.php">LOG OUT</a>
</form>

</body>
</html>