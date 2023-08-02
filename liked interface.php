<?php 
session_start();



 if (isset($_POST['loved_it']))
{
	$t=$_SESSION['loved_it']=$_POST['loved_it'];

}

else
{
	echo"nothing choosen";
}	

 ?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

body
{
	
	 background: url('sun leaf.jpg')  no-repeat;
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
<font color="black"  style="text-transform:uppercase; "><h2>Did You Liked the Interface?</font></h2>
<img src="black man.gif" class="mast"  >
<br>
<br>

<form name="f2" action="rate this.php" method="POST">


<input id="submit" name="yeah" type="submit"  value="Oh,Yeah!">
<br>
<br>
<input id="submit" name="yeah" type="submit"  value="Somewhat Yes!">

</form>






</div>
</body>
</html>