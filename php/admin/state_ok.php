<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
include("../conn/conn.php");
$conn = dbConnect();
$id=$_GET['id'];
$type=$_GET['type'];
$state=$_GET['state'];
$sql=$conn->query("update tb_info set checkstate=1 where id=$id");
if($sql){
	echo "<script>alert('该信息已经通过审核！');window.location.href='findFree.php?type=$type&state=$state';</script>";
}
else{
	echo "<script>alert('该信息审核操作失败！');history.back();</script>";
}
?>
