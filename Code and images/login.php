<?php

	include ("qconn.php");
	$flag=0;
	$sql="SELECT * FROM `user_table`";
	$result=$connect->query($sql);
	if ($result->num_rows > 0) 
	{
	 while($row = $result->fetch_assoc())
	{
		if(isset($_POST['kk']))
		{
		$username = $_POST['user'];
		$password= $_POST['pass'];
		
		if($row['Username'] == $username && $row['Password'] == $password )
		{
			$flag=1;
		     echo "<h3><center> Login successful </center></h3>";    
			 header("Refresh: 1; url=frame.html"); 
		}
		}  
	}
	}
	if($flag==0)
	{	echo "<h3><center> Login failed </center></h3>";
		header("Refresh: 1; url=Main.html");
	}
?>