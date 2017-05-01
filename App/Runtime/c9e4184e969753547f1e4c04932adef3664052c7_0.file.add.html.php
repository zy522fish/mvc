<?php
/* Smarty version 3.1.30, created on 2017-02-22 15:07:36
  from "D:\mvc\App\Admin\View\Student\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ad38b8d3a962_18825222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9e4184e969753547f1e4c04932adef3664052c7' => 
    array (
      0 => 'D:\\mvc\\App\\Admin\\View\\Student\\add.html',
      1 => 1487747254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ad38b8d3a962_18825222 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页面</title>
</head>
<body>
<form action="index.php?m=Admin&c=Student&a=tianjia" method="post">
	<table border="1" width="600" align="center" cellpadding="2" rules="all" cellspacing="0">
		<tr>
			<td>姓名: </td>
			<td><input type="text" name="name" ></input></td>
		</tr>
		<tr>
			<td>性别: </td>
			<td>
			<input type="radio" name="sex" value="男" >男</input>
			<input type="radio" name="sex" value="女" >女</input>
			</td>
		</tr>
		<tr>
			<td>年龄: </td>
			<td><input type="text" name="age" ></input></td>
		</tr>
		<tr>
			<td>学历: </td>
			<td>
				<select name="edu">
					<option value="初中" >初中</option>
					<option value="高中" >高中</option>
					<option value="大专" >大专</option>
					<option value="大本" >大本</option>
					<option value="研究生">研究生</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" ><input type="submit" value="提交"></input></td>
	
		</tr>
	</table>
</form>
</body>
</html><?php }
}
