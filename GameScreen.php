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
   $_SESSION["USER"];
   $moneyGain = "";
    $moneyLost = "";
  if(!isset($_SESSION['USER'])){
      header('Location: index.php');
   }else{
    
    if($_SESSION['Points'] > 0){
    $moneyGain = $_SESSION['USER']." You Have Earned $".$_SESSION['Points']." Dollars";
}
    if($_SESSION['Points'] < 0){
    $moneyLost = $_SESSION['USER']." You Have Lost ".$_SESSION['Points']." Dollars";
    }
  }
 ?>



<div class="jeo"> JEOPARDY !</div>
<h1> <?php  echo $moneyGain ?></h1>
<h1> <?php  echo $moneyLost ?></h1>



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
<td> <a href="QuestionScreen.php?1"> $200</a> </td> 

<td> <a href="QuestionScreen.php?6"> $200</a> </td> 

<td> <a href="QuestionScreen.php?11"> $200</a> </td> 

<td> <a href="QuestionScreen.php?16"> $200</a> </td> 

<td> <a href="QuestionScreen.php?21"> $200</a> </td> 

<td> <a href="QuestionScreen.php?26"> $200</a> </td> 
</tr>

<!-- Creating $400 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?2"> $400</a> </td> 

<td> <a href="QuestionScreen.php?7"> $400</a> </td> 

<td> <a href="QuestionScreen.php?12"> $400</a> </td> 

<td> <a href="QuestionScreen.php?17"> $400</a> </td> 

<td> <a href="QuestionScreen.php?22"> $400</a> </td> 

<td> <a href="QuestionScreen.php?27"> $400</a> </td> 

</tr>

<!-- Creating $600 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?3"> $600</a> </td> 

<td> <a href="QuestionScreen.php?8"> $600</a> </td> 

<td> <a href="QuestionScreen.php?13"> $600</a> </td> 

<td> <a href="QuestionScreen.php?18"> $600</a> </td> 

<td> <a href="QuestionScreen.php?23"> $600</a> </td> 

<td> <a href="QuestionScreen.php?28"> $600</a> </td> 

</tr>

<!-- Creating $800 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?4"> $800</a> </td> 

<td> <a href="QuestionScreen.php?9"> $800</a> </td> 

<td> <a href="QuestionScreen.php?14"> $800</a> </td> 

<td> <a href="QuestionScreen.php?19"> $800</a> </td> 

<td> <a href="QuestionScreen.php?24"> $800</a> </td> 

<td> <a href="QuestionScreen.php?29"> $800</a> </td> 

</tr>

<!-- Creating $1000 Value Row For Game Board -->
<tr>
<td> <a href="QuestionScreen.php?5"> $1000</a> </td> 

<td> <a href="QuestionScreen.php?10"> $1000</a> </td> 

<td> <a href="QuestionScreen.php?15"> $1000</a> </td> 

<td> <a href="QuestionScreen.php?20"> $1000</a> </td> 

<td> <a href="QuestionScreen.php?25"> $1000</a> </td> 

<td> <a href="QuestionScreen.php?30"> $1000</a> </td> 

</tr>

<tr>
	
<td> Total Score: </td>


<td rowspan="5"> 

<?php 
  
  $currentPoints = $_SESSION['Points'];
  $totalScore = 0;
  $_SESSION['Sum'];
  $totalScore = $_SESSION['Sum'] + $currentPoints;
  $_SESSION['Sum'] = $totalScore;

  if($totalScore > 0){
      echo "$".$totalScore;
  }
  else {
      echo "$"."(".$totalScore.")";
  }

?> 
</td>

</tr>
</table>
<!-- End of Game Board Table-->


</body>
</html>