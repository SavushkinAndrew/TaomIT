<?php 

	include "func.inc";
	conect_DB();
	
	$title = trim($_POST[title]);
	$context = trim($_POST[context]);
	
	//TODO: Убрать exit() после сессии 
	$login = $_SESSION['sess_login'];

	$dt = new DateTime();
	
	$sql=mysql_query("SELECT * FROM `users` INNER JOIN `teacher` ON `users`.`id_user` = `teacher`.`user` WHERE name = '$login'");
		
	$row = mysql_fetch_array($sql);
		
	$id_teacher = $row['id_teacher'];
	
	$result=mysql_query("INSERT INTO news (id_teacher,title,context,image,current_time) VALUES ('$id_teacher','$title','$context','image','$dt->format('Y-m-d H:i:s')')");

?>

<title>ТАУ-IT</title><br><br>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="add_news.php" method="POST">

 <div align="center" style="padding: 100px 0 0 0">

  <table border="0" cellspacing="0" width="200">

   <caption><h9>Регистрация</h9><br><br><br></caption>

   <tr><td align="right"><h9>Title:</h9><br></td>

   <td><input type="text" size="30" maxlength="30" name="title"></td><br><br></tr>

   <tr><td align="right"><h9>Context:</h9><br></td>

   <td><input type="text" size="30" maxlength="30" name="context"></td><br><br></tr>
   
   <tr><td align="center" colspan="2"><br><br>

     <?php echo $err;  ?>
   
    <input type="submit" value="Зарегистрироваться" class="b2">

  </td></tr></table>

 </div>

</form>

</body>