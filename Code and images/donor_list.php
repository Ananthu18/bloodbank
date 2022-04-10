<style>
table, th, td {
	
    border: 2px solid black;
	background:orange;
	color:black;
	margin-left: auto;
    margin-right: auto;
	border-collapse: collapse;
	 padding: 15px;
}
</style>
<body bgcolor="cyan">
</body>
<?php

	$connect = mysqli_connect("localhost", "root" , "", "bloodbank");
	if(!$connect )
	{
		die('Could not connect: ' . mysqli_error());
	}
	$sql="SELECT * FROM donor_table";
	$result=$connect->query($sql);
	$flag=0;
	if(isset($_POST['submit4']))
	{
		$date = $_POST['date'];
		echo "<table><tr><th>D_ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Blood Group</th><th>Address</th><th>City</th><th>Mobile</th><th>Suitable date</th></tr>";
			while($row = $result->fetch_assoc())
			{
				if($date == $row['Suitable_date'])
				{
					echo "<center><br>";
					echo "<tr><td>".$row['d_id']."</td><td>".$row['First_Name']."</td><td>".$row['Last_Name']."</td><td>".$row['DOB']."</td><td>".$row['Gender']."</td><td>".$row['Blood_grp']."</td><td>".$row['Address']."</td><td>".$row['City']."</td><td>".$row['Mobile']."</td><td>".$row['Suitable_date']."</td></tr>";
					$flag=1;
				}
			}
			if($flag==0)
				echo "No record Found";

	}
?>
