<!-- <link href="css/style.css" rel="stylesheet"> -->
<?php 
error_reporting(E_ERROR);
include_once("conn/conn.php");
$type = $_GET['type'];
switch($type)
{
  case 'recuit':
    $type = '招聘信息';
    break;
  case 'foster':
    $type = '培训信息';
    break;
  case 'house':
    $type = '房屋信息';
    break;
  case 'seekbuy':
    $type = '求购信息';
    break;
  case 'recruitbusiness':
    $type = '招商引资';
    break;
  case 'seekjob':
    $type = '求职信息';
    break;
  case 'teaching':
    $type = '家教信息';
    break;
  case 'car':
    $type = '车辆信息';
    break;
  case 'sale':
    $type = '出售信息';
    break;
  case 'search':
    $type = '寻人/寻物启示';
    break;
  default:
    $type = '公寓信息';
    break;
}
?>
<div class="vip">
  <div class="rightTitle">
    <p>付费专区</p>
  </div>
  <div class="rightContent">
<?php
	$date1=date("Y-m-d");
  $conn = dbConnect();
	$result=$conn->query("select * from tb_leaguerinfo where type='$type' and showday>='$date1' and checkstate=1 ");
	
	if($result->num_rows == 0)
    echo "<div>暂无".$type."资源！</div>";
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
// $result=$conn->query("select count(*) as total from tb_info where type='公寓信息' and checkstate=1");
$query = "select * from tb_info where type='$type'";
$result = $conn->query($query);
if($result->num_rows == 0)
  echo "<div>暂无".$type."资源！</div>";
else
{
  while($info=$result->fetch_array())
  {
?>
    <table width="540" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><?php echo $info['title']; ?></td>
        <td><?php echo $info['edate']; ?></td>
      </tr>
      <tr>
        <td colspan="2" ><?php echo $info['content']; ?></td>
      </tr>
      <tr>
        <td><?php echo $info['linkman']; ?></td>
        <td><?php echo $info['tel']; ?></td>
      </tr>
    </table><br /><br />
<?php
  }
  // var_dump($info);
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
