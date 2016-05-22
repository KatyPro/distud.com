<?PHP
function connectBD()
{
	$dblocation = "localhost"; // Имя сервера
$dbuser = "root";          // Имя пользователя
$dbpasswd = "";            // Пароль
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) // Если дескриптор равен 0 соединение не установлено
{ return false; }
$dbname="distud";
if (!@mysql_select_db($dbname, $dbcnx)) 
{  return false; }
return $dbcnx;
}
function closeBD($dbcnx){
	if(mysql_close($dbcnx))
		{return true;}
	else{ return false; }
}
function reg_user($login, $mail, $password)
{
	$dbcnx=connectBD();
	$ath = mysql_query("INSERT INTO users ('login','pass','email') VALUES('$login','$password','$mail')");
	closeBD($dbcnx);
}
function login($login, $password)
{
	$mysqli=connectBD();
	$resultset=$mysqli->query ("SELECT pass FROM users WHERE login='$login'");
	$user=$resultset->fetch_assoc(); //Финкция изымает следующую строку из массива
	closeBD($mysqli);
			return $user['pass']==$password;
}
?>