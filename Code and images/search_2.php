<head>
<style>
table, th, td {
    border: 2px solid black;
	background:orange;
	color:black;
	margin-left: auto;
    margin-right: auto;
	border-collapse: collapse;
	 padding: 15px;
	
</style>
</head>
<body bgcolor="cyan">
</body>
<?php

	include ("qconn.php");
	
	$sql="SELECT * FROM `donor_table`";
	$result=$connect->query($sql);
	if ($result->num_rows > 0) {
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Blood_grp</th><th>Address</th><th>City</th><th>Mobile</th></tr>";	
	while($row = $result->fetch_assoc())
	{
		if(isset($_POST['cty']))
		{
		$city = $_POST['cty'];
		if(strcmp($row['City'],$city)==0)
		{
		       echo "<tr><td>" .$row["First_Name"]. "</td><td>" . " " . $row["Last_Name"]. "</td><td>" . " " . $row["DOB"]. "</td><td>" . " " . $row["Gender"]. "</td><td>" . " " . $row["Blood_grp"]. "</td><td>" . " " . $row["Address"]. "</td><td>" . " " . $row["City"]. "</td><td>" . " " . $row["Mobile"]. "</td></tr>";
		}
		}
	}  
	echo "</table>";
	}
	else {
    echo "0 results";
	}
?>
