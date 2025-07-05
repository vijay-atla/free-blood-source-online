<html>
<head><title>Available Donors</title>
<link rel="stylesheet" href="req.css" type="text/css">

<style type="text/css">
table{
	border-collapse:collapse;
	width:75%;
	color:#fff;
	font-family:monospace;
	font-size:20px;
	text-align:left;
	
	}
th{
	background-color:#588c7e;
	color:white;
}
tr:nth-child(even).{ background-color:#f2f2f2;}

</style>

</head>


<body>
<div class="logo"><a href="index.php"><img src="images/logo.png" 10px 10px></a>
</div>
<div class="heading">Free Blood Source</div>
<header>
<nav>

<ul class="nav__links">
<li><a href="index.php">Back</a></li>
 <li><a href="index.php">Home</a></li>
</ul>


</nav>
</header>


<form>
<table align="center">

<?php
if($_POST["rsubmit"])
{
$rname=$_POST["rname"];
$rbg=$_POST["rblood"];
$rarea=$_POST["rloc"];
$rgender=$_POST["rgender"];
$rmob=$_POST["rphno"];
$remail=$_POST["rmail"];


$servername="localhost";
$username="root";
$password="";
$db="bs";
$conn=new mysqli($servername,$username,$password,$db);
	if(!$conn)
	{
		echo($conn->connect_error);
		echo("&nbsp&nbsp<a href='index.php'>Home</a> &nbsp&nbsp
			<a href='index.php'>Back</a>");
	}
	else
	{
		$sql="SELECT * FROM donor WHERE blood='$rbg' AND area='$rarea' ";
		$res=$conn->query($sql);
		if($res->num_rows>0)
		{
			echo("<tr><th>Name</th><th>MObile</th><th>e-mail</th><th>Area</th><th>Address</th></tr>");
			while($row=$res->fetch_assoc())
			{
				$message="Dear ".$row["dname"].",\n		"
											.$rname." is in your area and he/she needs your blood.".
								"If you can help him/her.\nPlease Contact:".
											"\n		Mobile : ".$rmob.
											"\n		e-mail : ".$remail;
				echo("<tr><td>".$row["dname"]."</td><td>".$row["mobile"]."</td><td>".$row["email"]."</td><td>".$row["area"]."</td><td>".$row["address"]."</td></tr>");
			$to_email = $row["email"];
			$subject = "Alert!!! Request for BLOOD";
			$body = $message;
			$headers = "From: xxxxxx@gmail.com";
			mail($to_email, $subject, $body, $headers);
			}
		}
		else
		{
			echo("<h1 align='center' class='h23'>Sorry!No Donors found in your Area</h1>");
		}
		
		
		echo("<br/><br/>&nbsp&nbsp<a href='donate.php'>Become a Donor</a>&nbsp&nbsp
		<a href='index.php'>Home</a> &nbsp&nbsp
				<a href='index.php'>Back</a>");
		$conn->close();
		echo("<br/><br/>_");
	}
	
}
?>

</table>
</form>
</body>

</html>