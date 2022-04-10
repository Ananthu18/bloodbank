<?php 

	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username == 'admin' && $password == 'admin123')
	{	 echo "<h3><center> Login successful </center></h3>";    
		 header("Refresh: 1; url=admin.php"); 
	}	
	else
	{
		echo "<h3><center> Login failed </center></h3>";
		header("Refresh: 1; url=Main.html");
	}
?>