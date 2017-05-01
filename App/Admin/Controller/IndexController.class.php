<?php
class IndexController extends Controller{
	//显示后台首页
	public function index(){
        if(!isset($_SESSION['adminname'])){
            $this->jump('请先登录','?m=Admin&c=Login&a=login');
        }
        $this->smarty->display('index.html');
    }
}
?>