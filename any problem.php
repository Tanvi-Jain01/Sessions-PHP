<?php session_start(); 
if (isset($_POST['rate']))
{
	$_SESSION['rate']=$_POST['rate'];
	//echo $_SESSION['rate'];
}
else
{ echo "nothing chosen";}






?>

<html>
<head>

<style>

body
{
	
	 background: url('Waterfall_5899.jpeg')  no-repeat;
	background-position:center;
	background-size:cover;
	height:150vh;
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
	height:670px;
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
		opacity 0.7;
		
		transform:rotateY(360deg);
	}
	30%
	{
		opacity 0;
		
		transform:rotateY(0deg);
	}
	
	

}



#submit
{
	width:450px;
	height:50px;
	align:center;
	color:white;
	font-size:20;
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
	width:500px;
	font-size:22;
}

.mast
{
	border:3px solid white;
	border-radius:30px;
	box-shadow:4px 4px grey;
	height:250px;
	width:400;
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

p
{
	//background-color:white;
	width:500px;
	color:linear-gradient(red, white);
	align:center;
	border-radius:70px;
	text-transform:uppercase;
	
}

#sub
{
	width:150px;
	height:30px;
	align:center;
	left:150px;
	margin-left:270px;
	color:white;
	font-size:20;
	border:3px  solid white;
	border-radius:50px;
	background-color:red;
	font-weight:bold;
	letter-spacing: 4px	;
	
}
#sub:hover
{
	width:170px;
	font-size:22;
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
<font color="black"> <h2>Do you Faced Any Problem? </font> </h2>
<img src="error.gif" class="mast" >
<br>
<br>



<form name="f1" action="Any Suggestions.php" method="POST">
<input id="submit" type="textbox"  name="problemfaced" placeholder="Enter what problems you faced..."   autofocus>
<br>
<input type="submit" value="Done" id="sub" name="doneproblem">
<br>
<br>
<input id="submit" type="submit" name="problem"  value="No Problems!">

</form>






</div>
</body>
</html>