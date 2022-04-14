<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<p><img src="images/gongneng.gif" alt="后台功能"></p>
<div class="freeShow">
  <p><img src="images/info_bg.gif" alt="免费信息"></p>
  <form action="findFree.php" name="formFree" method="post">
    <fieldset>
      <legend>★ 审核状态</legend>
      <input name="state" type="radio" class="input1" value="1">
      <label for="state">已审核</label>
      <input name="state" type="radio" class="input1" value="0" checked>
      <label for="state">未审核</label>
      <input name="state" type="radio" class="input1" value="all">
      <label for="state">全部</label>
    </fieldset>
    <label for="type">信息类别：</label>
    <select name="type">
      <option value="招聘信息">-招聘信息</option>
      <option value="求职信息" selected>-求职信息</option>
      <option value="培训信息">-培训信息</option>
      <option value="家教信息">-家教信息</option>
      <option value="房屋信息">-房屋信息</option>
      <option value="车辆信息">-车辆信息</option>
      <option value="求购信息">-求购信息</option>
      <option value="出售信息">-出售信息</option>
      <option value="招商引资">-招商引资</option>
      <option value="公寓信息">-公寓信息</option>
      <option value="寻人/物启示">-寻人/物启示</option>
    </select>
    <input type="submit" name="Submit" value="检索">
  </form>
</div>

<div class="freeShow">
  <p><img src="images/info_bg1.gif" alt="免费信息"></p>
  <form action="findVip.php" name="formVip" method="post">
    <fieldset>
      <legend>★ 付费状态</legend>
      <input name="payfor" type="radio" class="input1" value="1">
      <label for="payfor">已付费</label>
      <input name="payfor" type="radio" class="input1" value="0" checked>
      <label for="payfor">未付费</label>
      <input name="payfor" type="radio" class="input1" value="all">
      <label for="payfor">全部</label>
    </fieldset>
    <label for="type">信息类别：</label>
    <select name="type">
      <option value="招聘信息">-招聘信息</option>
      <option value="求职信息" selected>-求职信息</option>
      <option value="培训信息">-培训信息</option>
      <option value="家教信息">-家教信息</option>
      <option value="房屋信息">-房屋信息</option>
      <option value="车辆信息">-车辆信息</option>
      <option value="求购信息">-求购信息</option>
      <option value="出售信息">-出售信息</option>
      <option value="招商引资">-招商引资</option>
      <option value="公寓信息">-公寓信息</option>
      <option value="寻人/物启示">-寻人/物启示</option>
    </select>
    <input type="submit" name="Submit" value="检索">
  </form>
</div>

<div class="freeShow">
  <p><img src="images/info_bg1.gif" alt="免费信息"></p>
  <form action="findgg.php" name="formVip" method="post">
    <fieldset>
      <legend>★ 推荐状态</legend>
      <input name="commend" type="radio" class="input1" value="1">
      <label for="commend">已推荐</label>
      <input name="commend" type="radio" class="input1" value="0" checked>
      <label for="commend">未推荐</label>
      <input name="commend" type="radio" class="input1" value="all">
      <label for="commend">全部</label>
    </fieldset>
    <input type="submit" name="Submit" value="检索">
  </form>
</div>
<form name="form1" method="post" action="release_content.php" target="mainFrame">
  <input name="imageField" type="image" class="input1" src="images/btn_fufei.gif" >
</form>

<form name="form2" method="post" action="advertising.php" target="mainFrame">
  <input name="imageField2" type="image" class="input1" src="images/btn_guangao.gif" >
</form>
