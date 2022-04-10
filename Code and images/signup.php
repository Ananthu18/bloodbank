<?php

	include ("qconn.php");
	
	$flag=1;
	$sql="SELECT * FROM `user_table`";
	$result=$connect->query($sql);
	if(isset($_POST['sngp']))
	{
		$name = $_POST['nm'];
		$password= $_POST['pass'];
		$email= $_POST['em'];
		$phone=$_POST['pn'];
		$user=$_POST['user'];
		$pass=$_POST['pass'];
	}
	if ($result->num_rows > 0) 
	{
	 while($row = $result->fetch_assoc())
	{
		if($row['Username'] == $user)
		{
			$flag=0;
		    echo "<h3><center>This username has been taken</center></h3>"; 
			 
			  header("Refresh: 1; url=Main.html");
		}
		else if($row['Email'] == $email)
		{
			$flag=0;
		     echo "<h3><center>This Email has been taken</center></h3>";    
			 header("Refresh: 1; url=Main.html");
		}
		else if($row['Ph_no'] ==$phone)
		{
			$flag=0;
		     echo "<h3><center>This phone no has been taken</center></h3>";    
			   header("Refresh: 1; url=Main.html");
		}  
	}
	}
	if($flag==1)
	{
	$sql ="INSERT INTO `user_table`(`Name`,`Email`, `Ph_no`, `Username`, `Password`) VALUES ('$name','$email','$phone','$user','$pass')";
	if (mysqli_query($connect, $sql)) 
	{
		echo "New record created successfully !";
		header("Refresh: 1; url=Main.html");
	}
	else
	{
		echo "Error: " . $sql . "
		" . mysqli_error($connect);
	}
	mysqli_close($connect);
	}
?>