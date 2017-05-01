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

	//显示修改界面的方法
	public function edit(){
		$id = $_GET['id'];
		//Model中有find方法,是获取一行数据的方法
		$stu = new StudentModel();
		$data = $stu->getOneStudent($id);
		// $stu = new Model();
		// $sql = "select * from student where id=$id";
		// $data = $stu->find($sql);
		$this->smarty->assign('data',$data);
		$this->smarty->display('edit.html');
	}

	//修改信息处理,接受修改表单数据
	public function update(){
		// print_r($_POST);die;
		$stu = new StudentModel();
		$res = $stu->setStudent();
		/*if($res){
			echo "<script>alert('修改成功');location.href='index.php?m=Home&c=Student&a=index';</script>";
		} else {
			echo "<script>alert('修改失败');history.back();</script>";
		}*/
		if ($res !== false) {
			echo "<script>alert('修改成功');location.href='index.php?m=Home&c=Student&a=index'</script>";
		} else {
			echo "<script>alert('修改失败');history.back()</script>";
		}		
	}


	public function add(){
		$this->smarty->display('add.html');
	}

	public function insert(){
		// echo "<pre>";
		// print_r($_POST);die;
		$stu = new StudentModel();
		$res = $stu->insertStudent();
		if ($res) {
			echo "<script>alert('添加成功');location.href='index.php?m=Home&c=Student&a=index';</script>";
		} else {
			echo "<script>alert('添加失败');history.back();</script>";
		}
	}

	public function del(){
		$id = $_GET['id'];
		$stu = new StudentModel();
		$res = $stu->delStudent($id);
		if ($res) {
			$this->jump('删除成功','?c=Student');
		} else {
			$this->jump('删除失败','?c=Student');
		}
	}


}


?>