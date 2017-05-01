<?php
class CategoryController extends Controller{
	//显示所有的分类
	public function index(){
		$category = new CategoryModel();
		$data = $category->getAllCates();
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		/*Array(
    	[0] => Array
        (
            [categoryid] => 14
            [name] => 上海
            [parent_id] => 1
        )*/
		$data = $category->sortCate($data);
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		$this->smarty->assign('data',$data);
		$this->smarty->display('index.html');
	}

	// 显示添加分类的模板
	public function add(){
		//取出所有的分类,并分配到模板中,在模板的select框中循环option
		$category = new CategoryModel();
		$data = $category->getAllCates();
		$data = $category->sortCate($data);
		$this->smarty->assign('data',$data);
		$this->smarty->display('add.html');

	}

	public function addHandle(){
		$category = new CategoryModel();
		$res = $category->insert();
		if ($res) {
			$this->jump('添加成功','?m=Admin&c=Category&a=index');
		} else {
			$this->jump('添加失败','?m=Admin&c=Category&a=add');
		}
		
	}

	
}
?>