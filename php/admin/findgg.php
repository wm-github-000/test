<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<?php
error_reporting(E_ERROR);
include("../conn/conn.php");
$conn = dbConnect();
$flag=$_POST['commend'];
if($_POST['commend']==""){
$flag=$_GET['flag'];
}
if($flag=="all"){
	$results=$conn->query("select count(*) as total from tb_advertising order by flag desc");
}else{
	$results=$conn->query("select count(*) as total from tb_advertising where flag='$flag' order by flag desc");
}
$minfo=$results->fetch_array();
$total=$minfo['total'];
$pagesize=10;
if($total<=$pagesize){
    $pagecount=1;
}
if(($total%$pagesize)!=0){
    $pagecount=intval($total/$pagesize)+1;
}else{
    $pagecount=$total/$pagesize;
}
if(($_GET['page'])==""){
    $page=1;
}else{
 	$page=intval($_GET['page']);
}
if($flag=="all"){
	$results=$conn->query("select * from tb_advertising order by flag desc limit ".($page-1)*$pagesize.",$pagesize");
}else{
	$results=$conn->query("select * from tb_advertising where flag='$flag' order by flag desc limit ".($page-1)*$pagesize.",$pagesize");
}
$info=$results->fetch_array();
?>
<table width="776" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="32" background="images/right_line.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�����ڵ�λ�ã��ײ鹩����Ϣ��&nbsp;&gt;&nbsp;��̨����ϵͳ</td>
  </tr>
  <tr>
    <td height="32" background="images/right_top.gif">&nbsp;</td>
  </tr>
  <tr>
  <td height="488" align="center" valign="top" background="images/right_middle.gif">      <table width="700" border="1" cellpadding="0" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FFCC33">
    <tr align="center" bgcolor="#FFCC33">
      <td width="141"  bgcolor="#FFCC33">������</td>
      <td width="291">�������</td>
      <td width="123">����ʱ��</td>
      <td width="64">�Ƿ��Ƽ�</td>
      <td width="63" height="22">����</td>
    </tr>
    <?php
	if($info){
	do{
			if($info['flag']=="1"){
				$flag1="���Ƽ�";
			}else{
				$flag1="δ�Ƽ�";
			}
   ?>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;<?php echo $info['title'];?></td>
      <td>&nbsp;<?php echo $info['content'];?></td>
      <td>&nbsp;<?php echo $info['fdate'];?></td>
      <td align="center" bgcolor="#FFFFFF" class="style11">&nbsp;<?php echo $flag1;?></td>
      <td align="center" bgcolor="#FFFFFF"><a href="gg_ok.php?id=<?php echo $info[id];?>&flag=<?php echo $flag; ?>">�Ƽ�</a>/<a href="del_ok.php?id=<?php echo $info[id];?>&flag=<?php echo $flag; ?>">ɾ��</a></td>
    </tr>
    <?php
			}while($info=$results->fetch_array());
		  ?>
    <tr bgcolor="#FFFFDD">
      <td height="22" colspan="8" align="right"> &nbsp; ����&nbsp;
          <?php
		   echo $total;
		?>
&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount; ?>&nbsp;ҳ
      <?php
		  if($page>=2){
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=1" title="��ҳ"></a> <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $page-1;?>" title="��һҳ"></a>
      <?php
		  }
	  if($pagecount<=4){
		 for($i=1;$i<=$pagecount;$i++){
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
		 }
      }else{
	  for($i=1;$i<=4;$i++){
	  ?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php }?>
      <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $page-1;?>" title="��һҳ"></a> <a href="find_gg.php?flag=<?php echo $flag;?>&page=<?php echo $pagecount;?>" title="βҳ"></a>
      <?php }?>
&nbsp;</td>
    </tr>
    <?php
	}else{
?>
    <tr align="center" bgcolor="#FFFFFF">
      <td colspan="8">�Բ�������������Ϣ�����ڣ�</td>
    </tr>
    <?php
}
?>
  </table></td>
  </tr>
  <tr>
    <td height="32" background="images/right_bottom.gif">&nbsp;</td>
  </tr>
</table>
