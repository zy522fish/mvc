<?php
/* Smarty version 3.1.30, created on 2017-02-22 17:38:07
  from "D:\mvc\App\Home\View\Student\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ad5bff1a0055_66055613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f381247be1ae370756f6516b226ad219f2aef3fa' => 
    array (
      0 => 'D:\\mvc\\App\\Home\\View\\Student\\edit.html',
      1 => 1487756257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ad5bff1a0055_66055613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页面</title>
</head>
<body>
<form action="index.php?m=Home&c=Student&a=update" method="post">
	<table border="1" width="600" align="center" cellpadding="2" rules="all" cellspacing="0">
		<tr>
			<td>姓名: </td>
			<td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"></input></td>
		</tr>
		<tr>
			<td>性别: </td>
			<td>
			<input type="radio" name="sex" value="男" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == '男') {?> checked <?php }?>>男</input>
			<input type="radio" name="sex" value="女" <?php if ($_smarty_tpl->tpl_vars['data']->value['sex'] == '女') {?> checked <?php }?>>女</input>
			</td>
		</tr>
		<tr>
			<td>年龄: </td>
			<td><input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['age'];?>
"></input></td>
		</tr>
		<tr>
			<td>学历: </td>
			<td>
				<select name="edu">
					<option value="初中" <?php if ($_smarty_tpl->tpl_vars['data']->value['edu'] == '初中') {?> selected<?php }?>>初中</option>
					<option value="高中" <?php if ($_smarty_tpl->tpl_vars['data']->value['edu'] == '高中') {?> selected<?php }?>>高中</option>
					<option value="大专" <?php if ($_smarty_tpl->tpl_vars['data']->value['edu'] == '大专') {?> selected<?php }?>>大专</option>
					<option value="大本" <?php if ($_smarty_tpl->tpl_vars['data']->value['edu'] == '大本') {?> selected<?php }?>>大本</option>
					<option value="研究生" <?php if ($_smarty_tpl->tpl_vars['data']->value['edu'] == '研究生') {?> selected<?php }?>>研究生</option>
				</select>
			</td>
		</tr>
		<tr>
			<td colspan="2" >
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
			<input type="submit" value="修改"></input>
			</td>
	
		</tr>
	</table>
</form>
</body>
</html><?php }
}
