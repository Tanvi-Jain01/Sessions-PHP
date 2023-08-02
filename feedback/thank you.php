<?php session_start();

if (isset($_POST['suggestion']))
{
	$_SESSION['suggestion']=$_POST['suggestion'];
	//echo $_SESSION['suggestion'];
}

else if (isset($_POST['donesuggestion']))
{
	$_SESSION['givensuggestion']=$_POST['givensuggestion'];
	echo $_SESSION['givensuggestion'];
}

else
{ echo "nothing chosen";}


 ?>
 
 -------------HTML------------

<html>
<head>
<style>
body
{
	 
		background-position:center;
		background-size:cover;
		height:100vh;
		margin:0px;
		padding:0px;
	font-family:sans-serif;
	font-weight:bold;
	font-size:24px;
	display: flex;
	justify-content:center;
	align-items: center;
	letter-spacing: 4px;
}
</style>


<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div class="divv" align="center">
<center>
<img src="PicsArt heart.png" class="image">
<br>
<br>

<img src="completed.gif" class="mast" >
<br>
<br>


<div id="submit" style="width:600px; height:50px; padding-top:15px; cursor:pointer;"> Hey there, Thankyou for your FeedBack!</div></h2>


<form name="f1" action="feedans.php" method="POST">
<input type="submit" id="submit" value="DONE" name="done">

</form>




</div>
</body>
</html>
