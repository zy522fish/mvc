<?php
/* Smarty version 3.1.30, created on 2017-02-25 17:26:48
  from "D:\blog\App\Admin\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b14dd8c6ca14_60396871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84466b3e55e0c9492354d56c3e280cd2490ebd31' => 
    array (
      0 => 'D:\\blog\\App\\Admin\\View\\Index\\index.html',
      1 => 1488014756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b14dd8c6ca14_60396871 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __PUBLIC__;?>
Admin/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../../web/home/js/jquery1.42.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 >
        $(function(){
            $("#nowtime").css({color:'red'});
            $("#host").html(location.host);
            //alert(location.host);
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth() + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
        }
    <?php echo '</script'; ?>
>
    
</head>
<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="?m=Admin&c=Index&a=index">首页</a></li>
                <li><a href="./" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href=""><?php echo $_SESSION['adminname'];?>
</a></li>
                <li><a href="?p=back&c=Index&a=ChangePswd">修改密码</a></li>
                <li><a href="?m=Admin&c=Login&a=logout">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    
    <!--左侧菜单栏-->
    
    <!--左侧菜单栏 begin-->
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="?m=Admin&c=Category&a=index"><i class="icon-font">&#xe008;</i>分类管理</a></li>
                        <li><a href="?p=back&c=Blog"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe052;</i>友情链接</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                        <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                        <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font">&#xe06b;</i>
                <span>欢迎使用博客后台管理系统。</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info">WINNT</span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info">Apache/2.2.21 (Win64) PHP/5.3.10</span>
                    </li>
                    <li>
                        <label class="res-lab">PHP运行方式</label><span class="res-info">apache2handler</span>
                    </li>
                    <li>
                        <label class="res-lab">模板版本</label><span class="res-info">v-0.1</span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info">2M</span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label>
                        <span class="res-info" id='nowtime'>2015年9月4日 11:01:07</span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名</label><span class="res-info"><span id="host">localhost</span></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>

</body>
</html><?php }
}
