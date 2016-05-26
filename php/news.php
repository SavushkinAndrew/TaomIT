<?php 

	include "func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT * FROM `teacher` INNER JOIN `news` ON `teacher`.`id_teacher` = `news`.`id_teacher`");
	
	$err = '';
	
	while ($row = mysql_fetch_array($sql)) {
		
		$title = $row['title'];
		$context = $row['context'];
		$time = $row['current_time'];
		$image = $row['image'];
		$name = $row['name'];
		$lastname = $row['lastname'];
			
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
	}
?>
