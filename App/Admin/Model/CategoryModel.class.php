<?php
class CategoryModel extends Model{
	public function getAllCates(){
		$sql = "select * from category order by categoryid desc";
		return $this->select($sql);
	}

	//对取出的分类进行递归排序
	public function sortCate($data,$parent_id=0,$lev=0){
		static $arr = array();
		foreach ($data as $key => $value) {
			/*value([13] => Array
        	(
            [categoryid] => 1
            [name] => 中国
            [parent_id] => 0
        	))*/
			if ($value['parent_id'] == $parent_id) {
				$value['lev'] = $lev;
				$arr[] = $value;
				$this->sortCate($data,$value['categoryid'],$lev+1);
			}
		}

		return $arr;
	}

	//添加分类的方法
	public function insert(){
		$sql = "insert into category (name,parent_id) values(:name,:parent_id)";
		//echo $sql;die;
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";die;
		$params = array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key] = $value;
		}
		return $this->add($sql,$params);
	}


}
?>