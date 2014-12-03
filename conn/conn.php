<?php  
function dbConnect()
{
	$db = new mysqli('localhost', 'pursey', 'password', 'pursey');
	if(!$db)
		return false;
	$db->query("set names utf8");
	return $db;	
}
$db = dbConnect();
$db->query("insert into tb_info values(null, '凌晨', '凌晨', '凌晨', '凌晨', '12345', 0, '2014-12-03')");
    // $conn=mysqli_connect("localhost","root","lingchen") or die("数据库服务器连接错误".mysql_error());
    // mysqli_select_db($conn, "pursey") or die("数据库访问错误".mysql_error());
    // mysqli_query($conn, "set names gb2312");

?>