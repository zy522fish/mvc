<?php
class StudentModel extends Model{
	//取出学生的信息
	public function getStudents(){
		//$sql = "select * from student where id<? and sex=? order by id desc";
		$sql = "select * from student  order by id desc";
		//$data = $this->select($sql,array(1=>30,2=>'男'));
		$data = $this->select($sql);
		return $data;
	}

	//添加数据的方法
	public function insert(){
		// echo "<pre>";
		// print_r($_POST);die;
		// $sql = "insert into student(name,sex,age,edu) values(?,?,?,?)";
		$sql = "insert into student(name,sex,age,edu) values(:name,:sex,:age,:edu)";
		// $res = $this->add($sql,array(1=>'武大',2=>'男',3=>33,4=>'大专'));
		$res = $this->add($sql,$_POST);
		return $res;
	}
}
?>