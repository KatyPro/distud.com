<?
require_once('lib/functions.php');
session_start();
if(isset($_POST['comein']))
{
	$login =htmlspecialchars( $_POST['login']);
	$password = md5(htmlspecialchars($_POST['password']));
	
	
	unset($_SESSION['success_comein']);
	unset($_SESSION['error_comein']);
	
	$uselogin = login($login,$password);
	if($uselogin==true){
	$_SESSION['login']= $login;
	$_SESSION['password']=$password;
	header("Location: blog.php");
	}elseif($uselogin==false){echo "������������ ���� �����/������!";}
		
}
?>
<!DOCTYPE html>
<head>

	<meta charset="windows-1251">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles_in.css">
</head>
<body>
<?php
if($_SESSION['error_comein']==1)
{echo "������������ ���� �����/������!";
unset($_SESSION['error_comein']);}
?>
	<div id="container">
		<form method="post">
        <center>
        <span class="logo"> ����������� </span>
        </center>
        
			<label for="login">�����:</label>
			<input type="login" name = "login">
         
			<label for="password">������:</label>
			<input type="password" name = "password">
			<div id="lower">
				<input type="checkbox"><label class="check" for="checkbox">��������� ����</label>
				<input type="submit" name ="comein" value="����" >
               
			</div >
		</form>
	</div >
</body>
</html>
	
	
	
	
	
		
	