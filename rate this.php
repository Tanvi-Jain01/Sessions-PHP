<?php  
session_start();



if (isset($_POST['yeah']))
{
	$yeah=$_SESSION['yeah']=$_POST['yeah'];
	
	

	//echo $_SESSION['yeah'];
}
else
{ echo "nothing chosen";}



?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<style>

body
{
	
	 background: url('red.jpg')  no-repeat;
	background-position:center;
	background-size:cover;
	height:130vh;
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
</head>
<body>

<div class="divv" align="center">
<center>
<img src="PicsArt heart.png" class="image">
<br>
<br>
<font color="black" size="20px">Rate This!</font>
<img src="marching.gif" class="mast" >
<br>
<br>



<form name="f1" action="any problem.php" method="POST">
<input id="submit" type="submit" name="rate"  value="5" style="background-color:red;" autofocus>
<br>
<br>
<input id="submit" type="submit"  name="rate" value="4" style="background-color:orange;">
<br>
<br>
<input id="submit" type="submit"  name="rate" value="3"  style="background-color:blue;">

</form>






</div>
</body>
</html>