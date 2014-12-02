<?php  
function dbConnect()
{
	$db = new mysqli('localhost', 'pursey', 'password', 'pursey');
	if(!$db)
		return false;
	$db->query('set names gb2312');
	return $db;	
}
    // $conn=mysqli_connect("localhost","root","lingchen") or die("数据库服务器连接错误".mysql_error());
    // mysqli_select_db($conn, "pursey") or die("数据库访问错误".mysql_error());
    // mysqli_query($conn, "set names gb2312");

?>