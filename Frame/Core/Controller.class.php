<?php
class Controller{
	protected $smarty;
	//构造方法,作用是拿到smarty对象
	public function __construct(){
		$view = new View();
		$this->smarty = $view->smarty;
	}

	protected function jump($msg,$url){
		header("content-type:text/html;charset=utf-8");
		echo $msg;
		header("refresh:1;url=$url");
		exit();
	}
}

?>