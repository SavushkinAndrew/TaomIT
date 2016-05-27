<?php 
	session_start();
	
	require_once('php/data.php');
	
	$sql=mysql_query("SELECT id_user,name,password FROM users");
		
		$err = '';
		
		while ($row = mysql_fetch_array($sql)) {
			
			if (isset($_POST['login']) && isset($_POST['passw'])) {
			
				if ($_POST['login']===$row['name'] && 

					$_POST['passw']===$row['password']) {

					session_start();
					
					$_SESSION['sess_login'] = $_POST['login'];

					$_SESSION['sess_pass'] = $_POST['passw'];

					header('Location: pages/mainscreen.php');

					exit();
		  
				}else {

					$err = '<font size=2px><span style="color: red"><b>';

					$err .= 'Неправильный логин или пароль!';

					$err .= '</b></span><br></font>';
				}
			}
		}
		
	$firstName = trim($_POST[reg_name]);
	$lastName = trim($_POST[reg_lastname]);
	$email = trim($_POST[reg_email]);
	$password = trim($_POST[reg_password]);
	$confirmPassword = trim($_POST[reg_confirm_password]);
	
	if($password == $confirmPassword & $password != ""){
	
		$result=mysql_query("INSERT INTO users (name,lastname,email,password) VALUES ('$firstName','$lastName','$email','$password')");
		
		if($result == 'true'){
					session_start();
					
					$_SESSION['sess_login'] = $_POST['reg_name'];

					$_SESSION['sess_pass'] = $_POST['reg_password'];

					header('Location: pages/news.php');

					exit();
		}
	}else {
		if($password != "" & $confirmPassword != ""){
			$err = '<font size=2px><span style="color: red"><b>';

			$err .= 'Пароли не совпадают!';
		
			$err .= '</b></span><br></font>';
		}
		
	}
		
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>TaomIT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
     
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>

        <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
  
    <div class="cont">
    <form action="index.php" method="POST">
  <div class="demo">
    <div class="login">
      <div class="login__check"><img src="images/logo.png" alt="Togliatty of the management"></div>
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name"  name="login" placeholder="Логин" />
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" name="passw" placeholder="Пароль" required />
		  <?php echo $err; ?>
        </div>
        <button  type="submit" value="Войти" class="login__btn">Войти</button>
        <p class="login__signup">Забыли пароль? &nbsp;<a class="login__submit">Регистрация</a></p>
      </div>
    </div>
    </form> 
	<form action="index.php" method="POST">
    <div class="app">
   
      <div class="app__reg">
     
        <p class="app__hello">Регистрация</p><br>
          <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" name="reg_name" class="login__input name" placeholder="Имя" required/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" name="reg_lastname" class="login__input name" placeholder="Фамилия" required/>
        </div>
        <div class="login__row">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,1z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" name="reg_email" class="login__input name" placeholder="E-mail" required/>
        </div>
         <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="reg_password" class="login__input pass" placeholder="Пароль" required/>
        </div>
         <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="reg_confirm_password" class="login__input pass" placeholder="Повторите пароль" required/>
          <button type="submit" value="Зарегистрироваться" class="login__btn">Зарегистрироваться</button>
        </div>  
       </form>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

			<script src="js/index.js"></script>
			<script type="text/javascript" src="js/animation.js"></script>
		

  </body>
</html>
