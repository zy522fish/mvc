<?php
class StudentController extends Controller{
	//测试方法
	public function test(){
		echo 456;
	}

	//取出学生表信息
	public function index(){
		$stu = new StudentModel();
		$data = $stu->getStudents();
		// echo "<pre>";
		// print_r($data);
		$this->smarty->assign('data',$data);
		$this->smarty->display('index.html');
		// echo "<pre>";
		// print_r($data);
	}

	public function add(){
		$this->smarty->display('add.html');
	}

	public function tianjia(){
		// echo "<pre>";
		// print_r($_POST);die;
		$stu = new StudentModel();
		$res = $stu->insert();
		if ($res) {
			echo "<script>alert('添加成功');location.href='index.php?m=Admin&c=Student&a=index';</script>";
		} else {
			echo "<script>alert('添加失败');history.back();</script>";
		}
		
	}
}


?>