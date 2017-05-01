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
	public function insertStudent(){
		// echo "<pre>";
		// print_r($_POST);die;
		// $sql = "insert into student(name,sex,age,edu) values(?,?,?,?)";
		$sql = "insert into student(name,sex,age,edu) values(:name,:sex,:age,:edu)";
		// $res = $this->add($sql,array(1=>'武大',2=>'男',3=>33,4=>'大专'));
		$params = array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key] = $value;
		}
		$res = $this->add($sql,$params);
		return $res;
	}

	//根据id获取一个学生
	public function getOneStudent($id){
		$sql = "select * from student where id=$id";
		return $this->find($sql);
	}

	//更新学生的方法
	public function setStudent(){
		$sql = "update student set name=:name,sex=:sex,age=:age,edu=:edu where id=:id ";
		// print_r($_POST);die;
		$params = array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key] = $value;
		}
		return $this->save($sql,$params);
	}

	//删除学生
	public function delStudent($id){
		$sql = "delete from student where id=$id";
		return $this->delete($sql);
	}
}
?>