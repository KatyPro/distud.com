<?PHP
function connectBD()
{
	$dblocation = "localhost"; // ��� �������
$dbuser = "root";          // ��� ������������
$dbpasswd = "";            // ������
$dbcnx = @mysql_connect($dblocation,$dbuser,$dbpasswd);
if (!$dbcnx) // ���� ���������� ����� 0 ���������� �� �����������
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
	$user=$resultset->fetch_assoc(); //������� ������� ��������� ������ �� �������
	closeBD($mysqli);
			return $user['pass']==$password;
}
?>