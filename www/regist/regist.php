<?
require_once('lib/functions.php');
session_start();
if(isset($_POST['reg']))
{
	$login =htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);
	$mail = htmlspecialchars($_POST['email']);

	$bad=true;
	
	unset($_SESSION['error_login']);
	unset($_SESSION['error_password']);
	unset($_SESSION['success']);
	
	if(strlen($login)<3 || strlen($login)>50){
		$_SESSION['error_login']=1; $bad=false;
		}
	if(strlen($password)<3 ||strlen($password)>50){
		$_SESSION['error_password']=1;$bad=false;
		}
		if($bad!=false){
		reg_user($login, $mail, $password);
		echo "Test !";
		
		//$_SESSION['success']=1;
		//header("Location: /index.php");
		}	
}
?>
<!DOCTYPE html>
<head>

	<meta charset="windows-1251">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
if($_SESSION['error_login']==1)
{echo "Incorrect login!";
unset ($_SESSION['error_login']);}
if($_SESSION['error_password']==1)
{echo "Incorrect password!";
unset ($_SESSION['error_password']);}
?>
	<div id="container">
		<form method="post">
        <center>
        <span class="logo"> Регистрация </span>
        </center>
        
			<label for="login">Логин:</label>
			<input type="login" name = "login">
            <label for="email">Почтовый ящик:</label>
            <input type="email" name = "email">
			<label for="password">Пароль:</label>
			<input type="password" name = "password">
			<div id="lower">
				<input type="checkbox"><label class="check" for="checkbox">Запомнить меня</label>
				<input type="submit" name ="reg" value="Готово" >
               
			</div >
		</form>
	</div >
</body>
</html>
	
	
	
	
	
		
	