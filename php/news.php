<?php 

	include "func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT id_teacher,title,context FROM news");
	
	$err = '';
	
	while ($row = mysql_fetch_array($sql)) {
		
		$id_teacher = $row['id_teacher'];
						
		$sql_teacher=mysql_query("SELECT user FROM teacher WHERE id_teacher = $id_teacher");
		$row_teacher = mysql_fetch_array($sql_teacher);

		$id_user = $row_teacher['user'];
			
		$sql_user=mysql_query("SELECT name,lastname FROM users WHERE id_user = '$id_user' ");
		$row_user = mysql_fetch_array($sql_user);
			
		echo $row_user['name'];
		print("   ");
		echo $row_user['lastname'];
		print("   ");
		echo $row['title'];
		print("   ");
		echo $row['context'];
		print("   ");
		echo $row['id_teacher'];
		print("<br>");
			
			
			
			
	}
?>
