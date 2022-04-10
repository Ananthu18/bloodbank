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

	include ("qconn.php");
	$sql="SELECT * FROM blood_table";
	$result=$connect->query($sql);
	if(isset($_POST['submit1']))
	{
		$selected = $_POST['selectblood'];
		while($row = $result->fetch_assoc())
		{
			if($selected == $row['Blood Group'])
				echo "<center><h1>Available Quantity :".$row['Quantity in Units']."</h2></center>";
		}
	}
	else if(isset($_POST['submit2']))
	{
		$date = $_POST['date'];
		if ($result->num_rows > 0)
		{
			echo "<table><tr><th>B_ID</th><th>Blood Group</th><th>pH</th><th>Quantity in Units</th><th>Expiry date</th></tr>";
			while($row = $result->fetch_assoc())
			{
				if($date <= $row['Expiry date'])
				{
					echo "<tr><td>".$row['B_id']."</td><td>".$row['Blood Group']."</td><td>".$row['ph']."</td><td>".$row['Quantity in Units']."</td><td>".$row['Expiry date']."</td></tr>";		
				}
				else
				{
					$new=$row['Quantity in Units']-1;
					$blood = $row['Blood Group'];
					$sql1 = "UPDATE `blood_table` SET `Quantity in Units`='$new' WHERE `Blood Group`='$blood'";
					mysqli_query($connect, $sql1);
				}
			}
		}
	}
?>