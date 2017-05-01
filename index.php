<?php
header("content-type:text/html;charset=utf-8");
define('APP_PATH', './App/');
include_once './Frame/Core/Frame.class.php';
Frame::run();
?>