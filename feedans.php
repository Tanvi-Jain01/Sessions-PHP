<html>
</head>
	<title> feedback answers </title>
</head>
<body>
<h2>


<?php session_start();
if(!(isset($_SESSION['suggestion'])) || !(isset($_SESSION['givensuggestion'])) )
{
	header("location:homescreen.html");
}

	if(isset($_POST['done']))
{



	echo $_SESSION['loved_it'];

	//echo $lovedit;
	print"<br>";
	
	
	echo $_SESSION['yeah'];
	
	//echo $yeah;
	
	print"<br>";
	echo $_SESSION['rate'];
	
	//echo $rate;
	
	print"<br>";
	



	
	
	if (isset($_SESSION['problem']))
{
	$v=$_SESSION['problem'];
	//echo $_SESSION['problem'];
	
echo $v;	
}

else if (isset($_SESSION['problemfaced']))
{
	$d=$_SESSION['problemfaced'];
//	echo $_SESSION['problemfaced'];

	echo $d;
}

else
{ echo "nothing chosen";}


echo"<br>";




if (isset($_SESSION['suggestion']))
{	

$f=$_SESSION['suggestion'];
echo $f;
}

else if (isset($_SESSION['givensuggestion']))
{

	$r=$_SESSION['givensuggestion'];
	echo $r;
}

else
{ echo "nothing chosen";}


	
	print"<br>";
	print"<br>";
	print "<br>";
	
	
}

else
{
	echo "no data found";
}


	$lovedit=$_SESSION['loved_it'];
	$yeah=$_SESSION['yeah'];
	$rate=$_SESSION['rate'];
	
	
	
	
	

$con=mysqli_connect("localhost","root","","dwpd project");

if(mysqli_connect_errno())
{
echo"failed to connect to database";
mysqli_connect_error();
}
else
echo"connected successfully<br>";

	$v=mysqli_real_escape_string($con,$_SESSION['problem']);
	$d=mysqli_real_escape_string($con,$_SESSION['problemfaced']);
	
	$f= mysqli_real_escape_string($con,$_SESSION['suggestion']);
	$r= mysqli_real_escape_string($con,$_SESSION['givensuggestion']);
	

if(isset($_POST['done']))
{

$query="insert into feedback (`Howisit`, `interface`, `rateus`, `problem`, `problemfaced`, `suggestion`, `givensuggestion`) values ('$lovedit','$yeah','$rate','$v','$d','$f','$r')";

$result=mysqli_query($con, $query);

	
if($result)
{
	echo"record insert successfully";
}
else
{
	echo"nooo";
}
mysqli_close($con);
	
}
	
	


session_destroy();

?>