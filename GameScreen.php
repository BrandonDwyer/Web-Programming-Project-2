<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="jeopardy.css?ver=1.0">
<title> Jeporady Main Page</title>
</head>
<body>

 <?php
   // Start the session
   $money  = 0;
    session_start();
  //  $_SESSION["USER"];
    if(!isset($_SESSION['USER'])){
       header('Location: index.php');
    }else{
         if( $_SESSION['Points'] > 0){
         $money = $_SESSION['USER']." You Have Earned $".$_SESSION['Points']." Dollars";
        }else if($_SESSION['Points'] < 0){
         $money = $_SESSION['USER']." You Have Lost ".$_SESSION['Points']." Dollars";
     	}else{
            $money = $_SESSION['USER']." You Have ".$_SESSION['Points']." Dollars";
         }

         
    }
 ?>



<div class="jeo"> JEOPARDY !</div>
<h1> <?php  echo $money?></h1>


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
<td>
    <?php if(!isset($_SESSION['1' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?1"> $200</a> </td> 
    <?php endif; ?>
<td> 
    <?php if(!isset($_SESSION['6' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?6"> $200</a> </td> 
    <?php endif; ?>
</td> 

<td> 
    <?php if(!isset($_SESSION['11' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?11"> $200</a>
    <?php endif; ?>
</td> 

<td> 
    <?php if(!isset($_SESSION['16' .$_SESSION["USER"]])):?>
    <a href="QuestionScreen.php?16"> $200</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['21' .$_SESSION["USER"]])):?>
    <a href="QuestionScreen.php?21"> $200</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['26' .$_SESSION["USER"]])):?>
    <a href="QuestionScreen.php?26"> $200</a>  
    <?php endif; ?>
</td>

</tr>

<!-- Creating $400 Value Row For Game Board -->
<tr>
<td> 
    <?php if(!isset($_SESSION['2' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?2"> $400</a> 
    <?php endif; ?>
</td>

<td>
    <?php if(!isset($_SESSION['7' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?7"> $400</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['12' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?12"> $400</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['17' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?17"> $400</a>  
    <?php endif; ?>
</td>

<td>
    <?php if(!isset($_SESSION['22' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?22"> $400</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['27' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?27"> $400</a>  
    <?php endif; ?>
</td>

</tr>

<!-- Creating $600 Value Row For Game Board -->
<tr>
<td> 
    <?php if(!isset($_SESSION['3' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?3"> $600</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['8' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?8"> $600</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['13' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?13"> $600</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['18' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?18"> $600</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['23' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?23"> $600</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['28' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?28"> $600</a> 
    <?php endif; ?>
</td>

</tr>

<!-- Creating $800 Value Row For Game Board -->
<tr>

<td> 
    <?php if(!isset($_SESSION['4' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?4"> $800</a>  
    <?php endif; ?>
</td>

<td>
    <?php if(!isset($_SESSION['9' .$_SESSION["USER"]])):?> 
   <a href="QuestionScreen.php?9"> $800</a>  
   <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['14' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?14"> $800</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['19' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?19"> $800</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['24' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?24"> $800</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['29' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?29"> $800</a>  
    <?php endif; ?>
</td>

</tr>

<!-- Creating $1000 Value Row For Game Board -->
<tr>
<td> 
    <?php if(!isset($_SESSION['5' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?5"> $1000</a>  
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['10' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?10"> $1000</a>  
    <?php endif; ?>
</td>

<td>
    <?php if(!isset($_SESSION['15' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?15"> $1000</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['20' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?20"> $1000</a> 
    <?php endif; ?>
</td>

<td> 
    <?php if(!isset($_SESSION['25' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?25"> $1000</a>  
    <?php endif; ?>
</td>

<td>
    <?php if(!isset($_SESSION['30' .$_SESSION["USER"]])):?> 
    <a href="QuestionScreen.php?30"> $1000</a> 
    <?php endif; ?>
</td>

</tr>

<tr>
	
<td> Total Score: </td>


<td rowspan="5"> 

<?php 
	
		$currentPoints = $_SESSION['Points'];
		$totalScore = $currentPoints;
		
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
<div><a class="link" href ="logout.php">LOG OUT</a>
     <a class="link" href = "jeopardyHomepage.php">HOMEPAGE</a></div>

</body>
</html>