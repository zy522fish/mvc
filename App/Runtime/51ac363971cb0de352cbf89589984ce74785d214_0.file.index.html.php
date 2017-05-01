<?php
/* Smarty version 3.1.30, created on 2017-02-23 11:29:38
  from "D:\mvc\App\Home\View\Student\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ae57227a9cf2_25486866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51ac363971cb0de352cbf89589984ce74785d214' => 
    array (
      0 => 'D:\\mvc\\App\\Home\\View\\Student\\index.html',
      1 => 1487820395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ae57227a9cf2_25486866 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生列表</title>
	<?php echo '<script'; ?>
 src="<?php echo __PUBLIC__;?>
Home/js/setColor.js" type="text/javascript"><?php echo '</script'; ?>
>
</head>
<body>
<div align="center">
	<h2>学生列表</h2>
</div>
<div align="center" style="margin-bottom:20px">
	<a href="index.php?m=Home&c=Student&a=add">添加学生</a>
</div>
<form action="index.php?m=Home&c=Student&a=search" method="post">
	<table border="1" width="600" align="center" cellpadding="2" rules="all" cellspacing="0">
	<tr>
		<td colspan="6" align="center">
		<input type="text" size="50" name="keywords"></input>
		<input type="submit" value="搜索"></input>
		</td>
	</tr>
	<tr align="center">
		<th>ID</th>
		<th>姓名</th>
		<th>性别</th>
		<th>年龄</th>
		<th>学历</th>
		<th>操作</th>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
 	<tr align="center">
 		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['sex'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['age'];?>
</td>
 		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['edu'];?>
</td>
 		<td><a href="index.php?m=Home&c=Student&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>|<a href="index.php?m=Home&c=Student&a=del&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" onclick="return confirm('确定删除吗')">删除</a></td>
 	</tr>
 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

 </table> 
</form>
</body>
</html><?php }
}
