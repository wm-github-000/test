<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>易查供求信息网</title>
</head>
<body>
	

<?php  
require_once('conn/conn.php');
$conn = dbConnect();
$type = $_REQUEST['type'];
$title = $_REQUEST['title'];
$content = $_REQUEST['content'];
$contact = $_REQUEST['contact'];
$tel = $_REQUEST['tel'];
$edate = date('Y-m-d H:i:s');
$query = "insert into tb_info values(null, '$type', '$title', '$content', '$contact', '$tel', 0, '$edate')";
$result = $conn->query($query);
if($result)
	echo "<script>alert('恭喜您，信息发布成功！');window.location.href='release.php';</script>";
else
	echo "<script>alert('对不起，信息发布失败！');history.back();</script>";
?>
</body>
</html>