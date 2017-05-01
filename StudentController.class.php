<?php
header("content-type:text/html;charset=utf-8");
class StudentController{
	function index(){
		include_once './libs/Smarty.class.php';
		include_once './StudentModel.class.php';
		$stu = new StudentModel();
		$data = $stu->getStudents();
		$smarty = new Smarty();
		$smarty->assign('data',$data);
		$smarty->display('student.tpl');
	}

	function add(){
		include_once './libs/Smarty.class.php';
		$smarty = new Smarty();
		$smarty->display('studentAdd.tpl');
	}

	function addHandle(){
		include_once './StudentModel.class.php';
		$stu = new StudentModel();
		$res = $stu->addHandle();
		if ($res) {
			echo "<script>alert('添加成功');location.href='index.php?c=Student&a=index'</script>";
		} else {
			echo "<script>alert('添加失败');location.back()</script>";
		}
	}

	function delete(){
		include_once './StudentModel.class.php';
		$stu = new StudentModel();
		$res = $stu->delete();
		if ($res) {
			echo "<script>alert('删除成功');location.href='index.php?c=Student&a=index'</script>";
		} else {
			echo "<script>alert('删除失败');location.back()</script>";
		}
	}

	//修改展示页面
	function modify(){
		include_once './StudentModel.class.php';
		include_once './libs/Smarty.class.php';
		$id = $_GET['id'];
		$stu = new StudentModel();
		$sql="select * from student where id=$id";
		$data = $stu->modify($sql);
		$smarty = new Smarty();
		$smarty->assign('data',$data);
		$smarty->display('studentModify.tpl');

	}

	//修改处理
	function modifyHandle(){
		include_once './StudentModel.class.php';
		$stu = new StudentModel();
		$res = $stu->modifyHandle();
		if ($res) {
			echo "<script>alert('修改成功');location.href='index.php?c=Student&a=index'</script>";
		} else {
			echo "<script>alert('修改失败');location.back()</script>";
		}
	}
}




?>