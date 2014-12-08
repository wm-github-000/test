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
  <div class="leftTitle" background="images/line.gif">
    <p>&nbsp;&nbsp;<img src="images/landian.gif" alt="title">&nbsp;&nbsp;推荐企业广告信息</p>
  </div>
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
<div class="search">
  <div class="leftTitle">
    <p>&nbsp;&nbsp;<img src="images/landian.gif" alt="title">&nbsp;&nbsp;信息快速检索</p>
  </div>
  <div class="doSearch">
    <form name="form1" method="post" action="index.php?type=findInfo"> 
    <p>
      <label for="keywords">关键字：</label>
      <input type="text" id="keywords" name="keywords">
    </p>
    <div>
      <label for="type">条件：&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <select name="infoType" id="infoType">
        <option value="招聘信息" selected="selected">-招聘信息-</option>
        <option value="求职信息">-求职信息-</option>
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
    </div>
      <input name="search" type="image" class="search" id="search" src="Images/btn1.gif" onClick="return chkinput(form)">           
    </form>
  </div>
</div>

<div class="contactUs">
  <div class="leftTitle">
    <p>&nbsp;&nbsp;<img src="Images/landian.gif" width="9" height="9">&nbsp;&nbsp;<strong>联系我们</strong></p>
  </div>
  <div class="leftContent">
    <p>易查供求信息网<br />
       联系地址：吉林省长春市**街*号<br />
       联系电话：849789** <br /> 
       邮政编码：130000 
  </div>
</div>
