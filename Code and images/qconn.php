	<?php
			$connect = new mysqli("localhost", "root" , "", "bloodbank");
				  if(! $connect )
				  {

					  die('Could not connect: ' . mysql_error());
				  }
	?>