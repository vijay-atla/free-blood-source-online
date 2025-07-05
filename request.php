<html>
<head><title>Request Blood</title>
<link rel="stylesheet" href="request.css" type="text/css">
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
<div class="main">
<div class="register">
<form action="req.php" method="post">
<table align="center">
<th colspan="2" align="center"><h2>Blood Request</h2></th>
<tr>
<td>Name:</td>
<td><input type="text" id="rname" name="rname" placeholder="ex:Narendra Modi" Required /></td>
</tr><tr>
<td>Blood Group:</td>
<td><select id="rblood" name="rblood" Required >
		<option value="">---Select---</option>
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
	</select>
</td>	
</tr><tr>
<td>Gender:</td>
<td><input type="radio" id="rgender" name="rgender" value="Male" Required />Male
<input type="radio" id="rgender" name="rgender" value="Female" Required />Female
<input type="radio" id="rgender" name="rgender" value="Others" Required />Others</td>
</tr><tr>
<td>Mobile</td>
<td><input type="tel" id="rphno" name="rphno" pattern="[6789][0-9]{9}" placeholder="ex:9848012345" Required /></td>
</tr><tr>
<td>e-mail</td>
<td><input type="email" id="rmail" name="rmail" Required /></td>
</tr><tr>
<td>Area:</td>
<td><select id="rloc" name="rloc" Required>
		<option value="">---Select---</option>
		<option value="Adilabad">Adilabad</option>
		<option value="Bhadradri Kothagudem">Bhadradri Kothagudem</option>
		<option value="Hyderabad">Hyderabad</option>
		<option value="Jagitial">Jagitial</option>
		<option value="Jangaon">Jangaon</option>
		<option value="Jayashankar Bhupalpally">Jayashankar Bhupalpally</option>
		<option value="Jogulamba Gadwal">Jogulamba Gadwal</option>
		<option value="Kamareddy">Kamareddy</option>
		<option value="Karimnagar">Karimnagar</option>
		<option value="Khammam">Khammam</option>
		<option value="Komaram Bheem">Komaram Bheem</option>
		<option value="Mahabubabad">Mahabubabad</option>
		<option value="Mahabubnagar">Mahabubnagar</option>
		<option value="Mancherial">Mancherial</option>
		<option value="Medak">Medak</option>
		<option value="Medchal–Malkajgiri">Medchal–Malkajgiri</option>
		<option value="Mulugu">Mulugu</option>
		<option value="Nagarkurnool	">Nagarkurnool	</option>
		<option value="Narayanpet">Narayanpet</option>
		<option value="Nalgonda">Nalgonda</option>
		<option value="Nirmal">Nirmal</option>
		<option value="Nizamabad">Nizamabad</option>
		<option value="Peddapalli">Peddapalli</option>
		<option value="Rajanna Sircilla">Rajanna Sircilla</option>
		<option value="Ranga Reddy">Ranga Reddy</option>
		<option value="Sangareddy">Sangareddy</option>
		<option value="Siddipet">Siddipet</option>
		<option value="Suryapet">Suryapet</option>
		<option value="Vikarabad">Vikarabad</option>
		<option value="Wanaparthy">Wanaparthy</option>
		<option value="Warangal Rural">Warangal Rural</option>
		<option value="Warangal Urban">Warangal Urban</option>
		<option value="Yadadri Bhuvanagiri">Yadadri Bhuvanagiri</option>
	</select>
</td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" id="rsubmit" name="rsubmit">
</td></tr>
</table>
</form>
</div>
</div>
</body>


</html>