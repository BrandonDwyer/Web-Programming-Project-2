<?php
// Start the session
session_start();
if(!isset($_SESSION['USER'])){
  header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="jeopardy.css">
<title> Jeporady Main Page</title>
</head>
<body>

<div class="jeo">JEOPARDY!</div>

<p> Welcome <?php echo $_SESSION["USER"]; ?>! </p>

<?php
// Set session variables
$_SESSION["user1"] = " User1 - $1,500";
$_SESSION["user2"] = " User2 - $1,300";
$_SESSION["user3"] = " User3 - $900";
?>

<div id="d1">
<h3> LeaderBoard</h3>
<pre>
   <?php echo $_SESSION["user1"]; ?> </li>
   <?php echo $_SESSION["user2"]; ?> </li>
   <?php echo $_SESSION["user3"]; ?> </li>
<pre>

</div>

<form method="POST" action="GameScreen.php">
<button class="button"> PLAY</button>
<a class="link" href = "logout.php">LOG OUT</a>
</form>


</body>
</html>s