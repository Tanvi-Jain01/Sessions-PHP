<?php  
session_start();

if (isset($_POST['yeah']))
{
	$_SESSION['yeah']=$_POST['yeah'];
	//echo $_SESSION['yeah'];
}
else
{ echo "nothing chosen";}

?>


<html>
<head>

<style>

body
{
	
	 background: url('red.jpg')  no-repeat;
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
	width:600px;
	height:650px;
	color:white;
	opacity:.8;
	position:absolute;	
	padding-top:0px;
	box-sizing:border-box;
	animation:transitiononpage 2s;
}
@keyframes transitiononpage
{
	from
	{
		opacity 0;
		transform:rotateX(-100deg);
	}
	to
	{
		opacity 1;
		transform:rotateX(0deg);
	}
}


#submit
{
	width:250px;
	height:50px;
	align:center;
	color:white;
	font-size:24;
	border:3px  solid white;
	border-radius:70px;
	//background-color:red;
	letter-spacing: 4px;
	
	font-weight:bold;
}
#submit:hover
{
	width:300px;
	font-size:26;
}

.mast
{
	border:3px solid white;
	border-radius:30px;
	box-shadow:4px 4px grey;
	height:270px;
	width:500;
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

p
{
	//background-color:white;
	width:500px;
	color:linear-gradient(red, white);
	align:center;
	border-radius:70px;
	text-transform:uppercase;
	
}

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