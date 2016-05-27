<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	Новости
	
	<form action="../php/logout.php" method="POST">
	<button  action type="submit" value="Войти" class="login__btn">Выйти</button>
	</form>
	
 <?php 

	include "../php/func.inc";
	conect_DB();
	
	$sql=mysql_query("SELECT * FROM `teacher` INNER JOIN `news` ON `teacher`.`id_teacher` = `news`.`id_teacher`");
	
	$err = '';
	
	
	while ($row = mysql_fetch_array($sql)) {
		
		$sql_user=mysql_query("SELECT * FROM `users` INNER JOIN `teacher` ON `users`.`id_user` = `teacher`.`user`");
		$row_user = mysql_fetch_array($sql_user);
		
		$id_news = $row['id_news'];
		$title = $row['title'];
		$context = $row['context'];
		$time = $row['current_time'];
		$image = $row['image'];
		$name = $row_user['name'];
		$lastname = $row_user['lastname'];
			
		print("<div class=\"center_content\">"); 

		print("<div class=\"leftbox\">"); 

		print("<h2>$title</h2>");

		if(isset($image)){
					print("<img src=\"$image\" />"); 
		}else{
			//TODO:Добавть плейс холдер
		}

		print("<p>"); 
		print("$context <br>");
		print("<form action=\"description.php\" method=post>");
		print("<input type=hidden name=\"id_news\" value=$id_news>");
		print("<input type=\"submit\" value=\"Читать полностью\"/>");
		print("</form>");
		print("</p>"); 
		
		print("$name ");
		print("$lastname ");
		print("$time <br>");

		print("</div>"); 
	}
?>


</body>
</html>