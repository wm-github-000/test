<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="../css/style.css" rel="stylesheet">
<?php
error_reporting(E_ERROR);
include("../conn/conn.php");
$conn = dbConnect();
$state=$_POST['payfor'];
$type=$_POST['select'];
if($_POST['select']==""){
$state=$_GET['state'];
$type=$_GET['type'];
}
if($state=="all"){
  $results=$conn->query("select count(*) as total from tb_leaguerinfo  where type='$type' order by id");
}else{
  $results=$conn->query("select count(*) as total from tb_leaguerinfo  where type='$type' and checkstate=$state order by id");
}
if($results === false)
  exit;
$minfo=$results->fetch_array();
$total=$minfo['total'];
$pagesize=4;
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
if($state=="all"){
  $results=$conn->query("select * from tb_leaguerinfo  where type='$type' order by id limit ".($page-1)*$pagesize.",$pagesize");
}else{
  $results=$conn->query("select * from tb_leaguerinfo  where type='$type' and checkstate=$state order by id limit ".($page-1)*$pagesize.",$pagesize");
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
    <td height="488" align="center" valign="top" background="images/right_middle.gif">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��ǰ��Ϣ���&nbsp;��<span class="style11">&nbsp;<?php echo $type;?>&nbsp;</span>��<br>
        <table width="709" border="0" cellpadding="0" cellspacing="1" bgcolor="#FFCC33">
          <tr align="center" bgcolor="#FFCC33">
            <td width="76">��Ϣ����</td>
            <td width="204">��Ϣ����</td>
            <td width="65">��ϵ��</td>
            <td width="88">��ϵ�绰</td>
            <td width="79">��������</td>
            <td width="72">��ֹ����</td>
            <td width="54">���״̬</td>
            <td width="62">����</td>
          </tr>
          <?php
	if($info){
	do{
		if($info['checkstate']==1){
			$state1="�Ѹ���";
		}else{
			$state1="δ����";
		}
	?>
          <tr bgcolor="#FFFFFF">
            <td>&nbsp;<?php echo $info['title'];?></td>
            <td width="204">&nbsp;<?php echo $info['content'];?></td>
            <td>&nbsp;<?php echo $info['linkman'];?></td>
            <td>&nbsp;<?php echo $info['tel'];?></td>
            <td>&nbsp;<?php echo $info['sdate'];?></td>
            <td>&nbsp;<?php echo $info['showday'];?></td>
            <td align="center" class="style11"><?php echo $state1;?></td>
            <td align="center" bgcolor="#FFFFFF"><a href="statefu_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">���</a>/<a href="fudel_ok.php?id=<?php echo $info[id];?>&type=<?php echo $type;?>&state=<?php echo $state;?>">ɾ��</a></td>
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
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=1" title="��ҳ"></a> <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="��һҳ"></a>
      <?php
		  }
	  if($pagecount<=4){
		 for($i=1;$i<=$pagecount;$i++){
	  ?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php
		 }
      }else{
	  for($i=1;$i<=4;$i++){
	  ?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
      <?php }?>
      <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $page-1;?>" title="��һҳ"></a> <a href="find_fufei.php?type=<?php echo $type;?>&state=<?php echo $state;?>&page=<?php echo $pagecount;?>" title="βҳ"></a>
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
        </table>
    </td>
  </tr>
  <tr>
    <td height="32" background="images/right_bottom.gif">&nbsp;</td>
  </tr>
</table>
