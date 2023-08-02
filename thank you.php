<?php session_start();

if (isset($_POST['suggestion']))
{
	$_SESSION['suggestion']=$_POST['suggestion'];
	//echo $_SESSION['suggestion'];
}

else if (isset($_POST['donesuggestion']))
{
	$_SESSION['donesuggestion']=$_POST['donesuggestion'];

	$_SESSION['givensuggestion']=$_POST['givensuggestion'];
	//echo $_SESSION['givensuggestion'];
}

else
{ echo "nothing chosen";} 





 ?>

<html>
<head>

<style>

body
{
	
	 background: url('girl.jpg')  no-repeat;
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

.divv
{
	
	border-radius:150px;
	border: 5px solid lightgrey;
	background-color: white;
//left:800px;
	width:650px;
	height:550px;
	color:white;
	opacity:.8;
	position:absolute;	
	padding-top:0px;
	box-sizing:border-box;
	animation:transitiononpage 2s;
}
@keyframes transitiononpage
{
	0%
	{
		opacity 0;
		transform:rotateX(-100deg);
	}
	20%
	{
		opacity 0;
		transform:rotateY(-100deg);
	}
	
	50%
	{
		opacity 0;
		transform:rotateX(-50deg);
	}
	100%
	{
		opacity 1;
		transform:rotateX(0deg);
	}
}


#submit
{
	width:300px;
	height:50px;
	align:center;
	color:white;
	font-size:18;
	border:3px  solid white;
	border-radius:70px;
	background-color:red;
	letter-spacing: 4px;
	cursor:pointer;
	font-weight:bold;
	transition: .7s;
}
#submit:hover
{
	width:350px;
	font-size:22;
}

.mast
{
	border:3px solid white;
	border-radius:30px;
	box-shadow:4px 4px grey;
	height:270px;
	width:500;
	pointer:none;
		
}

.image
{
	width:100px;
	//opacity:.7;
	height:80px;
	border-radius:30%;
	position:absolute;
	top:-40px;
	left:calc(50% - 50px);	
}

/*p
{
	//background-color:white;
	width:500px;
	color:linear-gradient(red, white);
	align:center;
	border-radius:70px;
	text-transform:uppercase;
	
}*/

/*#textbox
{	width:500px;
	height:70px;
	align:center;
	color:black;

border:3px  solid red;
	border-radius:70px;
}*/



</style>
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
<br>

<form name="f1"  method="POST" action="feedans.php">
<input type="submit" id="submit" value="DONE" name="done">

</form>






</div>

	


</body>
</html>