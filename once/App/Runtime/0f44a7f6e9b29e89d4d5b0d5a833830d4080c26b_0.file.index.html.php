<?php
/* Smarty version 3.1.30, created on 2017-02-23 21:55:03
  from "D:\mvc\once\App\Admin\View\Student\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58aee9b73648c4_41799041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f44a7f6e9b29e89d4d5b0d5a833830d4080c26b' => 
    array (
      0 => 'D:\\mvc\\once\\App\\Admin\\View\\Student\\index.html',
      1 => 1487666683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58aee9b73648c4_41799041 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生列表</title>
</head>
<body>
<div align="center">
	<h2>学生列表</h2>
</div>
<div align="center" style="margin-bottom:20px">
	<a href="index.php?m=Admin&c=Student&a=add">添加学生</a>
</div>
<form action="index.php?m=Admin&c=Student&a=search" method="post">
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
 		<td><a href="index.php?m=Admin&c=Student&a=modify&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">修改</a>|<a href="index.php?m=Admin&c=Student&a=delStu&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
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
