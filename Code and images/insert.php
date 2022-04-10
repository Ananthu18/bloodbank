<body bgcolor="cyan">
</body>
<?php

	include ("qconn.php");
	
    if(isset($_POST['confirm']))
	{
		$fname=$_POST['firstname'];
		
		$lname=$_POST['lastname'];
		$dob=$_POST['DOB'];
		$gend=$_POST['gender'];
		$blood_grp=$_POST['qq'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$mobile=$_POST['mobile'];
		$date=$_POST['date'];
	}
	$sql ="INSERT INTO `donor_table`(`First_Name`, `Last_Name`, `DOB`, `Gender`, `Blood_grp`, `Address`, `City`, `Mobile`, `Suitable_date`) VALUES ('$fname','$lname','$dob','$gend','$blood_grp','$address','$city','$mobile','$date')";

 if (mysqli_query($connect, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($connect);
	 }
	 mysqli_close($connect);
?>
