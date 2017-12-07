<?php
		$db=@new mysqli('localhost','root','','sinema');
			if($db->connect_errno)
			{
				die($db->connect_error);
			}
	?>