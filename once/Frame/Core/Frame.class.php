<?php
class Frame{
	//总体方法,依次调用要执行的方法
// 既然最后都要全部调用,为什么不写在一个方法里面,
	public static function run(){
		self::readConfig();
		self::getParams();
		self::setConst();
		self::autoLoad();
		self::dispatch();
	}

	//类的自动加载
	/**
	 * 整个框架,只有下面三个目录中,有类的文件,所以要做这三个目录中类的自动加载
	 * Frame/Core/
	 * App/平台/Controller
	 * App/平台/Model
	 */
	public static function autoLoad(){
		spl_autoload_register(function($class){
			$filename = CORE_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
			$filename = CONTROLLER_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
			$filename = MODEL_PATH.$class.'.class.php';
			if(file_exists($filename)) require_once $filename;
		});
	}

	//定义常量的方法
	public static function setConst(){
		//define('APP_PATH','./App/'); //index.php中已经定义了,所以这里不用定义
		//定义项目目录中App目录中,常用的MVC三层的目录
		//获取地址栏中的参数
		//$m = isset($_GET['m']) ? $_GET['m'] : $GLOBALS['conf']['DEFAULT_M']; //表示前台还是后台
		define('CONTROLLER_PATH',APP_PATH.M.'/Controller/'); //  ./App/Admin/Controller
		define('MODEL_PATH',APP_PATH.M.'/Model/');
		define('VIEW_PATH',APP_PATH.M.'/View/');
		//echo CONTROLLER_PATH;
		//定义Frame,Core目录为常量
		define('FRAME_PATH','./Frame/');
		define('CORE_PATH',FRAME_PATH.'Core/');
	}

	//获取地址栏的m,a,c参数
	public static function getParams(){
		//获取地址栏中的参数
		$m = isset($_GET['m']) ? $_GET['m'] : $GLOBALS['conf']['DEFAULT_M']; //表示前台还是后台
		$c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['conf']['DEFAULT_C'];//表示控制器
		$a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['conf']['DEFAULT_A'];//表示方法
		define('M',$m);
		define('C',$c);
		define('A',$a);
//为什么定义成常量其他方法里面就可以用了,
	}

	//获取配置项
	public static function readConfig(){
		$config = require_once './Frame/Config/Config.php';
		//将获取的$config存放到全局数组GLOBALS中
		$GLOBALS['conf'] = $config;
		// echo "<pre>";
		// print_r($config);
	}

	//分发控制器
	//根据地址栏中的m,c,a参数,加载不同的控制器类,实例化控制器类,调用控制器类的
	public static function dispatch(){
		// echo "<pre>";
		// print_r($GLOBALS);
		//获取地址栏中的参数
		//$m = isset($_GET['m']) ? $_GET['m'] : $GLOBALS['conf']['DEFAULT_M']; //表示前台还是后台
		//$c = isset($_GET['c']) ? $_GET['c'] : $GLOBALS['conf']['DEFAULT_C'];//表示控制器
		//$a = isset($_GET['a']) ? $_GET['a'] : $GLOBALS['conf']['DEFAULT_A'];//表示方法

		//引入控制器
		//require_once './App/'.M.'/Controller/'.C.'Controller.class.php';
		//实例化控制器类
		$lei =  C . 'Controller';
		$obj = new $lei();
		//控制器类对象->方法
		$a = A;
		$obj -> $a();
	}
}


?>