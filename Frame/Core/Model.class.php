<?php
//基础模型类
//为他的子类提供最基本的查询方法
class Model{
	private $pdo;
	//构造方法,完成数据库连接(调用Db类)
	public function __construct(){
		//得到Db对象
		$db = Db::getIns();
		$this->pdo= $db->pdo;
	}
	//查询所有行
	public function select($sql,$params = array()){
		$PDOStatement = $this->pdo->prepare($sql);
		if($params){
			foreach ($params as $key => $value) {
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
			$PDOStatement->execute();
			return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return false;
		}
		//$PDOStatement->execute();
		//return $PDOStatement->fetchAll(PDO::FETCH_ASSOC);
	}

	//查询一行数据
	public function find($sql,$params = array()){
		$PDOStatement = $this->pdo->prepare($sql);
		if($params){
			foreach ($params as $key => $value) {
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
			$PDOStatement->execute();
			return $PDOStatement->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			return false;
		}
		// $PDOStatement->execute();
		// return $PDOStatement->fetch(PDO::FETCH_ASSOC);
	}

	//添加数据的方法
	//添加成功,返回最新添加的id,失败返回FALSE
	public function add($sql,$params = array()){
		$PDOStatement = $this->pdo->prepare($sql);
		if($params){
			foreach ($params as $key => $value) {
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
			$PDOStatement->execute();
			return $this->pdo->lastInsertId();
		}catch(PDOException $e){
			return false;
		}
		// if($PDOStatement->execute()){
		// 	return $this->pdo->lastInsertId();
		// }else{
		// 	return false;
		// }
	}

	//查询总记录数
	//传递进来的sql格式必须是select count(*) from table where...
	public function count($sql){
		$PDOStatement = $this->pdo->query($sql);
		try{
			return $PDOStatement->fetchColumn();
		}catch(PDOException $e){
			return false;
		}
		//return $PDOStatement->fetchColumn();
	}

	//save方法,用于更新
	/**
	 * $sql = "update student set name=值,age=值,sex=值 where id=XX";
	 * $sql = "update student set name=:name,age=:age,sex=:sex where id=XX";
	 */
	public function save($sql,$params = array()){
		$PDOStatement = $this->pdo->prepare($sql);
		//判断SQL中是否有占位符
		if($params){
			foreach ($params as $key => $value) {
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
			$PDOStatement->execute();
			return $PDOStatement->rowCount();
		}catch(PDOException $e){
			return false;
		}
		
	}

	//delete用于删除语句
	public function delete($sql,$params = array()){
		$PDOStatement = $this->pdo->prepare($sql);
		//判断SQL中是否有占位符
		if($params){
			foreach ($params as $key => $value) {
				$PDOStatement->bindValue($key,$value);
			}
		}
		try{
			$PDOStatement->execute();
			return $PDOStatement->rowCount();
		}catch(PDOException $e){
			return false;
		}
		// if ($PDOStatement->execute()) {
		// 	return $PDOStatement->rowCount();
		// } else {
		// 	return false;
		// }
	}
}
?>