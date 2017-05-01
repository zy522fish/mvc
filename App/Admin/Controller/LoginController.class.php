<?php
class LoginController extends Controller{
	//显示登录界面
	public function login(){
        $this->smarty->display('login.html');
	}

    //	显示验证码
	public function code(){
        verify::code();
    }
	//处理登录的表单提交的信息
	public function loginCheck(){
        //echo strtoupper($_POST['yzm']),strtoupper($_SESSION['yzm']);die;
        if(strtoupper($_POST['yzm']) != strtoupper($_SESSION['yzm'])){
            $this->jump('验证码错误','?m=Admin&c=Login&a=login');
        }
        $login = new LoginModel();
        if($login->loginHandle()) {
            $_SESSION['adminname'] = $_POST['adminname'];
            $this->jump('登录成功', '?m=admin&c=Index&a=index');
        }else{
            $this->jump('用户名或密码错误','?m=Admin&c=Login&a=login');
        }
	}

	//退出
	public function logout(){
        unset($_SESSION['adminname']);
        $this->jump('退出成功','?m=Admin&c=Login&a=login');
	}

	//实现验证码图片的方法

}
?>