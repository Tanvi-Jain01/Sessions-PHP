<?php
$con=mysqli_connect("localhost","root","","dwpd project");

if(mysqli_connect_errno())
{
echo"failed to connect to database";
mysqli_connect_error();
}
else
echo"connected successfully";


/* if (isset($_POST['loved_it']))
{
	$t=$_POST['loved_it'];


$query="insert into example (`name`) values ('$t')";

$result=mysqli_query($con, $query);

	//echo $_SESSION['loved_it'];
}*/







mysqli_close($con);
?>



<html>
<head>

<style>
a
{
	text-decoration:none;
	color:white;
}

body
{
	
	 background: url('Guitar.jpg')  no-repeat;
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
	opacity:.9;
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
	width:500px;
	height:50px;
	align:center;
	color:white;
	font-size:20;
	border:3px  solid white;
	border-radius:70px;
	background-color:red;
	letter-spacing: 4px;
	
	font-weight:bold;
}
#submit:hover
{
	width:570px;
	font-size:22;
}

.mast
{
	border:3px solid white;
	border-radius:30px;
	box-shadow:4px 4px grey;
	height:250px;
	width:400;
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




</style>
</head>
<body>

<div class="divv" align="center">
<center>
<img src="PicsArt heart.png" class="image">
<br>
<font color="black"  style="text-transform:uppercase;"> <h2>How is it?</font></h2>
<img src="guitarist.gif" class="mast"  >
<br>
<br>

<form name="f1" action="liked interface.php" method="POST">
<input type="submit" id="submit" name="loved_it" value="I Loved it!"> 
<br>
<br>
<input  type="submit" id="submit" name="loved_it" value="I Liked it!"> 

</form>






</div>
</body>
</html>