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
$_SESSION["user1"] = 1500;
$_SESSION["user2"] = 1300;
$_SESSION["user3"] = 900;

if($_SESSION['Score'] > $_SESSION["user1"]){
    $_SESSION["user1"] = $_SESSION['Score'];
}elseif ($_SESSION['Score'] > $_SESSION["user2"]) {
    $_SESSION["user2"] = $_SESSION['Score'];
}elseif ($_SESSION['Score'] > $_SESSION["user3"]) {
    $_SESSION["user3"] = $_SESSION['Score'];

}
?>

<div id="d1">
<h3> LeaderBoard</h3>
<pre>
   <?php echo "User 1 - $".$_SESSION["user1"]; ?> </li>
   <?php echo "User 2 - $".$_SESSION["user2"]; ?> </li>
   <?php echo "User 3 - $".$_SESSION["user3"]; ?> </li>
<pre>

</div>

<form method="POST" action="GameScreen.php">
<button class="button"> PLAY</button>
<a class="link" href = "logout.php">LOG OUT</a>
</form>


</body>
</html>