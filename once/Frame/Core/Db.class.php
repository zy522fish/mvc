<?php
//单例模式
class Db{
	private static $ins = null;//负责保存Db对象
	public $pdo = null;
	private function __construct(){
		$this->connect();
	}
	private function __clone(){}

	public static function getIns(){
		if (self::$ins === null) {
			self::$ins = new Db();
		}
		return self::$ins;
	}

	//连接数据库
	private function connect(){
		try{
			$dsn = "mysql:host=localhost;dbname=itcast;charset=utf8";
			$this->pdo = new PDO($dsn,'root','root',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		}catch(PDOException $e){
			exit($e->getMessage());
		}
	}


}
?>