<?php
/* Smarty version 3.1.30, created on 2017-02-25 20:01:48
  from "D:\mvc\App\Admin\View\Login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b1722c993455_59342365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bcc13f0f763fda99f0bf282352c44ff16a2e9b6' => 
    array (
      0 => 'D:\\mvc\\App\\Admin\\View\\Login\\login.html',
      1 => 1487990042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b1722c993455_59342365 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo __PUBLIC__;?>
Admin/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __PUBLIC__;?>
Admin/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo __PUBLIC__;?>
Admin/js/jquery-1.4.2.js"><?php echo '</script'; ?>
>
    <style>
        #cc{
            width:350px;
            margin:20px auto;
        }
        td{
            padding:10px 5px;
        }
        #logo{
            display:block;
            margin:150px auto 20px;
        }
        body{
            FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#ccc,endColorStr=#fff); /*IE 6 7 8*/ 

background: -ms-linear-gradient(top, #ccc,  #fff);        /* IE 10 */

background:-moz-linear-gradient(top,#ccc,#fff);/*火狐*/ 

background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#ccc), to(#fff));/*谷歌*/ 

background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ccc), to(#fff));      /* Safari 4-5, Chrome 1-9*/

background: -webkit-linear-gradient(top, #ccc, #fff);   /*Safari5.1 Chrome 10+*/

background: -o-linear-gradient(top, #ccc, #fff);  /*Opera 11.10+*/

} 
        }

        
    </style>
</head>
<body>



<div class="container clearfix">
    <img src='<?php echo __PUBLIC__;?>
Admin/images/logo.png' id='logo' />
    <!--右侧主操作区-->
    <div class="main-wrap" id="cc">
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Login&a=loginCheck" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th>用户名：</th>
                            <td>
                                <input class="common-text required" id="title" name="adminname" size="20" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>密码：</th>
                            <td>
                                <input class="common-text required" name="pwd" size="20" value="" type="password">
                            </td>
                        </tr>
                        <tr>
                            <th>验证码：</th>
                            <td>
                                <input class="common-text required" name="yzm" size="4" value="" type="text">
                                <img src="?m=Admin&c=Login&a=code" width="80" height="30" onclick="this.src='?m=Admin&c=Login&a=code&t='+Math.random()" title="看不清,换一张">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn4 mr10" value="登录" type="submit">
                                <input class="btn btn4" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}
