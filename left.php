<!-- <meta http-equiv="Content-Type" content="text/html; charset=gb2312"> -->
<link href="css/style1.css" rel="stylesheet">
<script language="javascript">
  function chkinput(form)
  {
    if(form.content.value=="")
    {
      alert("请输入查询关键字!");
      form.content.select();
      return false;
    }
  }
  function opengg(id)
  {
    window.open("showgg.php?id="+id,"","width=679,height=443");
  }  
</script>
<div class="advert">
  <div class="leftTitle">
    <p><img src="images/landian.gif" alt="title">推荐企业广告信息</p>
    <div>
<?php
include("conn/conn.php");
// include("js/function.php");
$conn = dbConnect();
$result=$conn->query("select * from tb_advertising where flag=1 order by id desc limit 0,10");
if($result->num_rows == 0 )
echo '<div align="left">暂无推荐企业广告信息!</div>';
else
{
  while($adInfo=$result->fetch_array())
  {
?>
<a href="javascript:opengg(<?php echo $adInfo['id'];?>);">
<?php 
    echo  msubstr($ginfo['title'],0,30);
    if(strlen($ginfo['title'])>30)
    {
      echo "...";
    }
  }
}
?>
    </div>
  </div>
</div>
<div class="search">
  <div class="leftTitle">
    <p><img src="images/landian.gif" alt="title">信息快速检索</p>
  </div>
  <div class="doSearch">
    <form name="form1" method="post" action="findinfo.php"> 
      <select name="type">
        <option value="招聘信息">-招聘信息-</option>
        <option value="求职信息" selected>-求职信息-</option>
        <option value="培训信息">-培训信息-</option>
        <option value="家教信息">-家教信息-</option>
        <option value="房屋信息">-房屋信息-</option>
        <option value="车辆信息">-车辆信息-</option>
        <option value="求购信息">-求购信息-</option>
        <option value="出售信息">-出售信息-</option>
        <option value="招商引资">-招商引资-</option>
        <option value="公寓信息">-公寓信息-</option>
        <option value="寻人/物启示">-寻人/物启示-</option>
      </select>
      <input name="search" type="image" class="search" id="search" src="Images/btn1.gif" onClick="return chkinput(form)">           
    </form>
  </div>
</div>
<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>信息快速检索</strong>


<td height="31" background="Images/line.gif">&nbsp;&nbsp;<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>联系我们</strong>


<td align="center" valign="top" background="Images/line2.gif"><table width="190" border="0" cellspacing="0" cellpadding="0">
<p>易查供求信息网</p>
<td height="3" background="Images/tiao.gif">
联系地址：吉林省长春市**街*号
联系电话：849789**
邮政编码：130000
