<?php 

	include "func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT * FROM news");
	
	$err = '';
	
	while ($row = mysql_fetch_array($sql)) {
		
		$id_teacher = $row['id_teacher'];
						
		$sql_teacher=mysql_query("SELECT user FROM teacher WHERE id_teacher = $id_teacher");
		$row_teacher = mysql_fetch_array($sql_teacher);

		$id_user = $row_teacher['user'];
			
		$sql_user=mysql_query("SELECT name,lastname FROM users WHERE id_user = '$id_user' ");
		$row_user = mysql_fetch_array($sql_user);
			
		$title = $row['title'];
		$context = $row['context'];
		$time = $row['current_time'];
		$image = $row['image'];
		$name = $row_user['name'];
		$lastname = $row_user['lastname'];
			
		print("<div class=\"center_content\">"); 

		print("<div class=\"leftbox\">"); 

		print("<h2>$title</h2>");
				

		print("<img src=\"http://cs543104.vk.me/v543104766/ef18/UAfy-frPW24.jpg\" />"); 

		print("<p>"); 
		print("$context <br>");
		print("<a href=\"#\" class=\"more\">читать полностью</a>");
		print("</p>"); 
		
		print("$name ");
		print("$lastname ");
		print("$time <br>");

		 

		print("</div>"); 
			
		// echo $row_user['name'];
		// print("   ");
		// echo $row_user['lastname'];
		// print("   ");
		// echo $row['title'];
		// print("   ");
		// echo $row['context'];
		// print("   ");
		// echo $row['id_teacher'];
		// print("<br>");
			
	}
?>
