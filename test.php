<?php
$ly_title=$_POST["ly_title"];
$ly_content=$_POST["ly_content"];
$ly_time=$_POST["ly_time"];
$ly_author=$_POST["ly_author"];
$ly_email=$_POST["ly_email"];
$sql="insert into liuyan(ly_title,ly_content,ly_time,ly_author,ly_email) values('".$ly_title."','".$ly_content."','".$ly_time."','".$ly_author."','".$ly_email."')";
mysql_query($sql,$connec);
echo("<script type='text/javascript'> alert('添加成功！');location.href='index.php';</script>");
?>
