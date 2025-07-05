<html>
<head><title>Donate Blood</title>
<link rel="stylesheet" href="donate.css" type="text/css">
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
<form action="registration.php" method="post">
<table align="center">
<th colspan="2" align="center"><h2>Donor Registration</h2></th>
<tr>
<td><label>Name:</td>
<td><input type="text" id="dname" name="dname" placeholder="ex:Narendra Modi" Required /></td>
</tr><tr>
<td><label>Gender:</label></td>
<td><input type="radio" id="dgender" name="dgender" value="Male" Required />Male
<input type="radio" id="dgender" name="dgender" value="Female" Required />Female
<input type="radio" id="dgender" name="dgender" value="Others" Required />Others</td>
</tr><tr>
<td><label>Age:</label></td>
<td><input type="number" id="dage" name="dage" Required /></td>
</tr><tr>
<td><label>Weight:</label></td>
<td><input type="number" id="dwt" name="dwt" Required /></td>
</tr><tr>
<td><label>Blood Group:</label></td>
<td><select id="dblood" name="dblood" Required>
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
</tr>
<tr>
<td><label>Confirm Blood Group:</label></td>
<td><select id="cdblood" name="cdblood" Required>
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
<td><label>Area:</label></td>
<td><select id="dloc" name="dloc" Required>
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
<tr>
<td><label>Confirm Area:</label></td>
<td><select id="cdloc" name="cdloc" Required>
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
</tr><tr>
<td><label>Mobile</label></td>
<td><input type="tel" id="dphno" name="dphno" pattern="[6789][0-9]{9}" placeholder="ex:9848012345" Required /></td>
</tr><tr>
<td><label>e-mail</label></td>
<td><input type="email" id="dmail" name="dmail" Required /></td>
</tr>
<tr>
<td><label>Address</label></td>
<td><textarea id="dadd" name="dadd" maxlength="100" Required ></textarea>
</tr>
<tr>
<td><label>Any Tattoos?</label></td>
<td><input type="radio" id="dtat" name="dtat" value="Yes" Required />Yes<input type="radio" id="dtat" name="dtat" value="No" Required />No</td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" id="dsubmit" name="dsubmit" >
</td></tr>
</table>
</form>
</div>
</div>
</body>


</html>