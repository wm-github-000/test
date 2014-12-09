<?php  
require('../conn/conn.php');
$conn = dbConnect();

$adminName = $_POST['adminName'];
$adminPwd = $_POST['adminPwd'];

$results = $conn->query("select * from tb_admin where name='$adminName' and pwd='$adminPwd'");
if(!$results)
	echo "<script type=text/javascript>alert('网络错误');history.back();</script>";
else if($results->num_rows == 0)
	echo "<script type=text/javascript>alert('账号名或密码错误');history.back();</script>";
else
	echo "<script type=text/javascript>alert('登陆成功');window.location.href='index.php';</script>";
?>