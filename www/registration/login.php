<?
if(isset($_POST['reg']))
{error_reporting(0);
	$login =htmlspecialchars( $_POST['login']);
	$password = htmlspecialchars($_POST['password']);
	$mail = htmlspecialchars($_POST['email']);

	$bad=true;
	session_start();
	unset($_SESSION['error_login']);
	unset($_SESSION['error_password']);
	unset($_SESSION['error_success']);
	
	if(strlen($login)<3 || strlen($login)>50){
		$_SESSION['error_login']=1; $bad=false;
		}
	if(strlen($password)<3 ||strlen($password)>50){
		$_SESSION['error_password']=1;$bad=false;
		}
		if($bad!=false){
		
		$mysql=@mysql_connect('localhost','root','');
		$sqls=@mysql_select_db('distud', $mysql);
		$sql=mysql_query("SET NAMES utf8");
		$password=md5($password);
		$ask = "INSERT INTO users (login,pass,email) VALUES('$login','$password','$mail')";
		$sql = mysql_query($ask);
		
		$_SESSION['success']=1;
		header("Location: /index.php");
		
		
		}
		
}
?>
<!DOCTYPE html>
<head>

	<meta charset="ANCI">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
if($_SESSION['error_login']==1)
{echo "Incorrect login!";}
if($_SESSION['error_password']==1)
{echo "Incorrect password!";}
?>
	<div id="container">
		<form method="post">
        <center>
        <span class="logo"> Авторизация </span>
        </center>
        
			<label for="login">Логин:</label>
			<input type="login" name = "login">
         
			<label for="password">Пароль:</label>
			<input type="password" name = "password">
			<div id="lower">
				<input type="checkbox"><label class="check" for="checkbox">Запомнить меня</label>
				<input type="submit" name ="reg" value="Вход" >
               
			</div >
		</form>
	</div >
</body>
</html>
	
	
	
	
	
		
	