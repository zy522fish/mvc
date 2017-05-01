<?php
//i这个基础视图类的作用是,将Smarty引入到项目中
class View{
	public $smarty;//用来存放smarty对象
	//将引入Smarty的工作放到构造方法中,那么实例化View对象的时候,就能获取到Smarty
	public function __construct(){
		require_once FRAME_PATH.'Smarty/Smarty.class.php';
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(VIEW_PATH.C);
		$this->smarty->setCompileDir(APP_PATH.'Runtime');
	}
}

?>