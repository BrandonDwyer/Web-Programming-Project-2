<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="jeopardy.css">
<title> Jeporady Main Page</title>
</head>
<body>

<h1> Welcome <?php echo $currentUser; ?> </h1>

<?php
// Set session variables
$_SESSION["user1"] = " User1 - $1,500";
$_SESSION["user2"] = " User2 - $1,300";
$_SESSION["user3"] = " User3 - $900";
echo $user1;
?>

<h2> LeaderBoard</h2>
<ol>
  <li> <?php echo $_SESSION["user1"]; ?> </li>
  <li> <?php echo $_SESSION["user2"]; ?> </li>
  <li> <?php echo $_SESSION["user3"]; ?> </li>
</ol>

<form method="POST" action="main.php">
<button class="button"> PLAY</button>
</form>

</body>
</html>