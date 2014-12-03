<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">
	function checkForm(form)
	{
		for(i = 0; i < form.length; i++)
		{
			if(form.element[i].value == '')
			{
				alert('请将信息填写完整');
				form.element[i].focus();
				return false;
			}
		}
	}
</script>

	<div rightTitle>免费发布专区</div>
	<form action="release_ok.php">
		<p>
			<label for="type">信息类别：</label>
			<select name="type">
		     	<option value="招聘信息">-招聘信息-</option>
		        <option value="求职信息" selected="selected">-求职信息-</option>
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
		    <span>*&nbsp;请正确选择您要发布的信息类别</span>
        </p>
        <p>
        	<label for="title">信息标题：</label>
        	<input type="text" name="title" id="title">
        </p>
        <p>
        	<label for="content">信息内容：</label>
        	<textarea name="content" id="content" cols="60" rows="10"></textarea>
        </p>
        <p>
        	<label for="contact">联系人：</label>
        	<input type="text" name="contact" id="contact">
        </p>
        <p>
        	<label for="tel">联系电话：</label>
        	<input type="text" name="tel" id="tel">
        </p>
        <input name="submit" type="image" src="images/fa.jpg" onClick="return checkForm(form);">
	</form>
