<?php
include "func.inc";
conect_DB();

	$firstName = trim($_POST[name]);
	$lastName = trim($_POST[lastname]);
	$email = trim($_POST[email]);
	$password = trim($_POST[passw]);
	$confirmPassword = trim($_POST[confirmPassword]);
	
	echo $firstName;
	
	if($password == confirmPassword){
	
		$result=mysql_query("INSERT INTO users (name,lastname,email,password) VALUES ('$firstName','$lastname','$email','$password')");
		
		if($result == 'true'){
			session_start();
					
					$_SESSION['sess_login'] = $_POST['login'];

					$_SESSION['sess_pass'] = $_POST['passw'];

					header('Location: pages/news.html');

					exit();
		}else{
			echo "Информация не добавлена в базу данных";
		}
	
	}else {
		
		$err = '<span style="color: red"><b>';

		$err .= 'Пароли не совпадают!';
		
		$err .= '</b></span><br>';
	}
	
	$err = '';
?>

<title>ТАУ-IT</title><br><br>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<body>

<form action="registration.php" method="POST">

 <div align="center" style="padding: 100px 0 0 0">

  <table border="0" cellspacing="0" width="200">

   <caption><h9>Регистрация</h9><br><br><br></caption>

   <tr><td align="right"><h9>Name:</h9><br></td>

   <td><input type="text" size="30" value=$lastName maxlength="30" name="name"></td><br><br></tr>

   <input type=hidden name=\"FirstName\" value=$_POST[lastName]>
   
   <tr><td align="right"><h9>Surname:</h9><br></td>

   <td><input type="text" size="30" value=<?php echo $lastName;?> maxlength="30" name="lastname"></td><br><br></tr>
   
   <tr><td align="right"><h9>Email:</h9><br></td>

   <td><input type="text" size="30" value=<?php echo $email;?> maxlength="30" name="email"></td><br><br></tr>
   
   <tr><td align="right"><br><br><h9>Password:</h9></td>

   <td><br><br><input type="password" size="30" maxlength="30" name="passw"></td></tr>
 
	<tr><td align="right"><h9>Confirm password:</h9><br></td>

   <td><input type="password" size="30" maxlength="30" name="confirmPassword"></td><br><br></tr>
   
   <tr><td align="center" colspan="2"><br><br>

     <?php echo $err;  ?>
   
    <input type="submit" value="Зарегистрироваться" class="b2">

  </td></tr></table>

 </div>

</form>

</body>