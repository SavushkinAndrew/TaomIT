<?php

	include "../php/func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT * FROM `teacher` INNER JOIN `news` ON `teacher`.`id_teacher` = `news`.`id_teacher` WHERE id_news = $_POST[id_news]");	
	$row = mysql_fetch_array($sql);
		
	$sql_user=mysql_query("SELECT * FROM `users` INNER JOIN `teacher` ON `users`.`id_user` = `teacher`.`user`");
	$row_user = mysql_fetch_array($sql_user);
		
	$context = $row['context'];
	$title = $row['title'];
	$date = $row['current_time'];
	$name = $row_user['name'];
	$lastname = $row_user['lastname'];
			
	print("$title <br>");
	print("$context <br>");
	print("$name  ");
	print("$lastname <br>");
	print("$date <br>");

	print("</div>"); 
?>
