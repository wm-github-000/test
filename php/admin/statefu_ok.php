<?php
header ( "Content-type: text/html; charset=utf-8" ); //�����ļ������ʽ
include("../conn/conn.php");
$id=$_GET[id];
$type=$_GET[type];
$state=$_GET[state];
$sql=mysql_query("update tb_leaguerinfo set checkstate=1 where id=$id");
if($sql){
	echo "<script>alert('����Ϣ�Ѿ�ͨ����ˣ�');window.location.href='findVip.php?type=$type&state=$state';</script>";
}
else{
	echo "<script>alert('����Ϣ��˲���ʧ�ܣ�');history.back();</script>";
}
?>
