<?php
class LoginModel extends Model{
	//验证用户名和密码
	public function loginHandle(){
        $adminname = $_POST['adminname'];
        $pwd = md5($_POST['pwd']);
        $sql = "select * from admin where adminname='$adminname'";
        $res = $this->find($sql);
        if($res){
            if($res['pwd']===$pwd){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
	}
}
?>