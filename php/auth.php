<?php 

include "func.inc";
conect_DB();

$sql=mysql_query("SELECT id_user,name,password FROM users");
	
	$err = '';
	
	while ($row = mysql_fetch_array($sql)) {
		
		if (isset($_POST['login']) && isset($_POST['passw'])) {
		
			if ($_POST['login']===$row['name'] && 

				$_POST['passw']===$row['password']) {

				session_start();
				
				$_SESSION['sess_login'] = $_POST['login'];

				$_SESSION['sess_pass'] = $_POST['passw'];

				header('Location: ../pages/news.html');

				exit();
	  
			}else {

				$err = '<span style="color: red"><b>';

				$err .= 'Неправильный логин или пароль!';

				$err .= '</b></span><br>';
			}
		}
	}
?>

<title>ТАУ-IT</title><br><br>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="auth.php" method="POST">

 <div align="center" style="padding: 100px 0 0 0">

  <table border="0" cellspacing="0" width="200">

   <caption><h9>Привет</h9><br><br><br></caption>

   <tr><td align="right"><h9>Логин:</h9><br></td>

   <td><input type="text" size="30" maxlength="30" name="login"></td><br><br></tr>

   <tr><td align="right"><br><br><h9>Пароль:</h9></td>

   <td><br><br><input type="password" size="30" maxlength="30" name="passw"></td></tr>
 
   <tr><td align="center" colspan="2"><br><br>

     <?php echo $err; ?>
  
    <input type="submit" value="Войти" class="b2">

  </td></tr></table>

 </div>

</form>

</body>