<html>
<head><title>Register</title></head>
<link rel="stylesheet" href="registration.css" type="text/css">
<body>
<div class="logo"><a href="index.php"><img src="images/logo.png" 10px 10px></a>
</div>
<div class="heading">Free Blood Source</div>
<header>
<nav>
<ul class="nav__links">
<li><a href="donate.php">Back</a></li>
 <li><a href="index.php">Home</a></li>
</ul>


</nav>
</header>

<?php
if($_POST["dsubmit"])
{	
$dname=$_POST["dname"];
$dgender=$_POST["dgender"];
$dage=$_POST["dage"];
$dwt=$_POST["dwt"];
$dbg=$_POST["dblood"];
$darea=$_POST["dloc"];
$dmob=$_POST["dphno"];
$demail=$_POST["dmail"];
$dtat=$_POST["dtat"];
$dadd=$_POST["dadd"];
$cdbg=$_POST["cdblood"];
$cdarea=$_POST["cdloc"];
if($dtat=='Yes' || $dage<18 || $dage>60 || $dwt<50)
{
	echo("<h2 align='center' class='h24'>Thank You for your Interest!<br/></h2>");
	echo("<img src='images/RegF.png' class='img4'>");
	echo("<h2 align='center' class='h25'>We Regret to inform you that you are not eligible to donate blood.<br/></h2>");
}
else if($dbg != $cdbg || $darea != $cdarea)
{	
	echo("<img src='images/RegM.png' class='img3'>");
	echo("<h1 align='center' class='h23'>Details mismatch</h1>");
}
else
{
	$servername="localhost";
	$username="root";
	$password="";
	$db="bs";
	$conn=new mysqli($servername,$username,$password,$db);
	if(!$conn)
	{
		echo($conn->connect_error);
		echo("&nbsp&nbsp<a href='index.php'>Home</a> &nbsp&nbsp<a href='index.php'>Back</a>");
	}
	else
	{
		$sql1="SELECT mobile,email FROM donor WHERE mobile='$dmob' OR email='$demail'";
		$res1=$conn->query($sql1);
		if($res1->num_rows>0)
		{
			echo("<img src='images/RegU.png' class='img2'>");
			echo("<h2 align='center' class='h22'> Mobile or e-Mail Already Registered</h2>");
		}
		else{
			
		$sql="INSERT INTO donor(dname,gender,age,weight,mobile,email,blood,area,address)
		VALUES('$dname','$dgender','$dage','$dwt','$dmob','$demail','$dbg','$darea','$dadd')";
		if($conn->query($sql)==TRUE)
		{
			echo("<img src='images/RegS.png' class='img1'>");
			echo("<h2 align='center' class='h21'>You have been Registered successfully!</h2>");
		}
		
		else
		{
			echo($conn->error);
		}
		}
		
		$conn->close();
		echo("<br/><br/>_");
	}
	
	
}
}
?>
</body>
</html>