<?php
header ( "Content-type: text/html; charset=utf-8" ); //�����ļ������ʽ
include("../conn/conn.php");
$id=$_GET[id];
$flag=$_GET[flag];
$sql=mysql_query("update tb_advertising set flag=1 where id=$id");
if($sql){
	echo "<script>alert('����Ϣ�ѱ��Ƽ���');window.location.href='findgg.php?flag=$flag';</script>";
}
else{
	echo "<script>alert('����Ϣ�Ƽ�����ʧ�ܣ�');history.back();</script>";
}
?>
