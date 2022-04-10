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
	if(isset($_POST['submit3']))
	{
		$fname = $_POST['firstname'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$date = $_POST['date'];
		$time = $_POST['time'];
	}
	
		$sql="INSERT INTO `blood_donation_camp`(`Name`, `Address for Camp`, `City`, `Date`, `Time`) VALUES ('$fname','$address','$city','$date','$time')";
		if(mysqli_query($connect,$sql))
		{
			echo "Records inserted successfully.";
		} 
		else
		{
			echo "ERROR: Could not able to execute" .$sql." ". mysqli_error($connect);
		}
		mysqli_close($connect);
?>