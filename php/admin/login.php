<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>登陆</title>
	<script type="text/javascript">
	function checkForm(form)
	{
		for(var i = 0; i < form.elements.length; i++)
		{
			if(form.elements[i].value == "")
			{
				form.elements[i].focus();
				form.elements[i].select();
				return false;
			}
		}
		return true;
	}
	</script>
</head>
<body>
	<div width="560" height="285" >
		<form action="checkLogin.php" method="post" onsubmit="return checkForm(this)">
			<p>
				<label for="adminName">管理员账号：</label>
				<input type="text" name="adminName">
			</p>
			<p>
				<label for="adminPwd">管理员密码：</label>
				<input type="text" name="adminPwd">
			</p>
			<input name="login" type="image" src="images/btn1.gif" width="79" height="37" class="input1">
		</form>
	</div>
</body>
</html>
