<html>
	<head>
	<link rel="stylesheet" type="text/css" href="admin_index.css">
	<script>
     function fun(x)
	{
	 document.getElementById('12').style.backgroundColor=x;
	}
     function hv1(x)
	{
	 document.getElementById('fname').style.backgroundColor=x;
	}
	function hv2(x)
	{
	  document.getElementById('address').style.backgroundColor=x;
	}
	function hv3(x)
	{
	   document.getElementById('city').style.backgroundColor=x;
	}
	function hv4(x)
	{
	    document.getElementById('date').style.backgroundColor=x;
	}
	function hv5(x)
	{
		 document.getElementById('time').style.backgroundColor=x;
	}
	function hv6(x)
	{
		 document.getElementById('date').style.backgroundColor=x;
	}
	function hv7(x)
	{
		 document.getElementById('date2').style.backgroundColor=x;
	}
	function a1(x)
	{
		 document.getElementById('s1').style.backgroundColor=x;
	}
	function a2(x)
	{
		 document.getElementById('s2').style.backgroundColor=x;
	}
	function a3(x)
	{
		 document.getElementById('qty').style.backgroundColor=x;
	}
	function alrt() 
	{
	alert("Succesfully Choosen");
	}
		function orgcamp(c)
		{
			if(c == 'a')
			{	
				document.getElementById('container').style.visibility="visible";
				document.getElementById('cot').style.visibility="hidden";
				document.getElementById('req').style.visibility="hidden";
				document.getElementById('cot2').style.visibility="hidden";
			}
		}
		function check(d)
		{
			if(d == 'b')
			{	
				document.getElementById('cot').style.visibility="visible";
				document.getElementById('container').style.visibility="hidden";
				document.getElementById('req').style.visibility="hidden";
				document.getElementById('cot2').style.visibility="hidden";
			}
		}
		function check2(d)
		{
			if(d == 'b')
			{	
				document.getElementById('cot2').style.visibility="visible";
				document.getElementById('container').style.visibility="hidden";
				document.getElementById('req').style.visibility="hidden";
				document.getElementById('cot').style.visibility="hidden";
			}
		}
		function transfer(e)
		{
			if(e == 'c')
			{	
				document.getElementById('req').style.visibility="visible";
				document.getElementById('container').style.visibility="hidden";
				document.getElementById('cot').style.visibility="hidden";
				document.getElementById('cot2').style.visibility="hidden";
			}
		}
		
	</script>
	</head>
	<body bgcolor="cyan">
	    
		<div class="navbar">
			<a href="#" onclick="window.location='Main.html';">Logout</a>
			<a onclick="check('b')">Inventory</a>
			<a onclick="check2('b')">Donor List</a>
			<a onclick="orgcamp('a')">Organise Camp</a>
			<a onclick="transfer('c')">Transfer</a>
			<a href="#" style="float:left">Blood Bank</a>
		</div>
		<div id="req">
		<center>
		<form method="POST" action="id.php">
		<label>Choose The Blood Bank</label>	
		<select id="s1" name="s1" onmouseover="a1('red')" onmouseout="a1('#FFF685')">
		<option>Blood Cross Society</option>
		<option>The Blood Association</option>
		<option>Athar Blood Bank</option>
        </select><br><br>
		<label>Choose The Blood Group</label>
		<select id="s2" name="s2" onmouseover="a2('red')" onmouseout="a2('#FFF685')">
		<option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        </select><br>
		<label>Choose The Blood Quantity</label>
		<input type="text" id="qty" name="qty" placeholder="Quantity" onmouseover="a3('red')" onmouseout="a3('#FFF685')"><br>
		<input type="submit" name="submit" value="Request">
		</form>
		</center>
		</div>
<div id="cot">
<center>
<label for="blood_groups">Choose a Blood Group:</label>
<center>
<form method="POST" action="displayblood.php">
<select onmouseover="fun('red')" onmouseout="fun('#FFF685')" id="12" name="selectblood">
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
  <option value="AB+">AB+</option>
  <option value="AB-">AB-</option>
</select>
<input type="submit" name="submit1" value="Check Availability"><br><br>
</form>
<form method="POST" action="displayblood.php">
<label>Enter Expiry date:</label><br>
<input type="date" id="date" name="date" onmouseover="hv6('red')" onmouseout="hv6('#FFF685')" required><br><br>
<input type="submit" name="submit2" value="Check Quality"><br><br><br><br>
</form>
</div>
		<div id="container">
			<h1><center>Fill This Form To Organise a Blood Donation Camp</h1></center>
			<form id="b1" method="POST" action="organisecamp.php">
			<center>
				<label>Name</label><br>
				<input type="text" id="fname" size="40" name="firstname" placeholder="First Name" onmouseover="hv1('red')" onmouseout="hv1('yellow')"required><br>
				<label>Address for the Camp</label><br>
				<textarea id="address" name="address" placeholder="Address" style="height:140px;padding:20px" onmouseover="hv2('red')" onmouseout="hv2('yellow')" required></textarea><br>
				<label>City</label><br>
				<input type="text" id="city" name="city" placeholder="City" onmouseover="hv3('red')" onmouseout="hv3('yellow')" required><br>
				<label>Date</label><br>
				<input type="date" id="date" name="date" onmouseover="hv4('red')" onmouseout="hv4('yellow')" required><br>
				<label>Time</label><br>
				<input type="time" id="time" name="time" onmouseover="hv5('red')" onmouseout="hv5('yellow')" required><br>	
			<input type="submit" name="submit3" value="Organise"><br><br>
			</center>
			</form>
		</div>
		<div id="cot2">
		<center>
			<form method="POST" action="donor_list.php">
			<label>Enter a date:</label><br>
			<input type="date" id="date2" name="date" onmouseover="hv7('red')" onmouseout="hv7('#FFF685')" required><br><br>
			<input type="submit" name="submit4" value="Confirm"><br><br>
			</form>
		</center>
		</div>
		
	</body>
</html>
