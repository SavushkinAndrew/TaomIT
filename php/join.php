<?php 

	include "func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT * FROM `users` INNER JOIN `teacher` ON `users`.`id_user` = `teacher`.`user`");
		
	while ($row = mysql_fetch_array($sql)) {
		
		$phone = $row['phone'];
		$name = $row['name'];
		$lastname = $row['lastname'];
		
		echo $phone;
		print("   ");
		echo $name;
		print("   ");
		echo $lastname;
		print("  <br> ");
	}
?>
