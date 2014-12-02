<!-- <link href="css/style.css" rel="stylesheet"> -->
<?php 
error_reporting(E_ERROR);
include_once("conn/conn.php");
?>
<div class="vip">
  <div class="rightTitle">
    <p>付费专区</p>
  </div>
  <div class="rightContent">
<?php
	$date1=date("Y-m-d");
  $conn = dbConnect();
	$result=$conn->query("select * from tb_leaguerinfo  where type='公寓信息' and showday>='$date1' and checkstate=1 ");
	
	if($result->num_rows == 0)
    echo '<div>暂无公寓信息资源！</div>';
  else
  {
    while($sgInfo=$result->fetch_array())
    {

    }
  }
?>
  </div>
</div>
<div class="free">
  <div class="rightTitle">免费专区</div>
  <div class="rightContent">
<?php
$result=$conn->query("select count(*) as total from tb_info where type='公寓信息' and checkstate=1");
if($result->num_rows == 0)
  echo '<div>暂无公寓信息资源！</div>';
else
{
// $info=$result->fetch_array();
// $total=$info[total];
// $pagesize=4;
//  if ($total<=$pagesize){
//     $pagecount=1;
//  } 
// if(($total % $pagesize)!=0){
//   $pagecount=intval($total/$pagesize)+1;
// }else{
//  $pagecount=$total/$pagesize;
// }
// if(($_GET[page])==""){
//   $page=1;
// }else{
// $page=intval($_GET[page]);
// }
// $gsql=mysql_query("select * from tb_info where type='公寓信息' and checkstate=1 order by edate desc limit ".($page-1)*$pagesize.",$pagesize");
// $ginfo=mysql_fetch_array($gsql);
// if($ginfo){
//   do{
}
?>
  </div>
</div>
