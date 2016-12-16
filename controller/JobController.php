<?

/**
 * 控制器文件，就只负责去哪里，做什么事情
 * 接收和分发参数
 */

class  JobController extends BaseController{

	public function index()
	{
		//判断有没有缓存
		 if(!parent::is_cached('job/index.html'))//没有缓存才查询数据库
		 {
			$pdo_model=new BaseModel();
			
			if ($_REQUEST['sort']=='time') {
				$order=' add_time asc';
			}elseif ($_REQUEST['sort']=='money') {
				$order=' money desc ';
			}

			$where_ar=array('enterprise_id'=>$_SESSION['uid']);

			if ($_REQUEST['keywords']) {//如果有搜索，就再添加一个条件
				$where_ar['keywords']=$_REQUEST['keywords'];
				$where_ar['keywords_col']='job_name';
			}

			$job_list=$pdo_model->lists("job",'',$where_ar,$order);
	 
	 
		 	$this->assigin("job_list",$job_list);

		 	$this->assigin("title","职位管理列表");
		}

		$this->display("index"); 
	}

	//添加岗位方法
	public function add()
	{
	 	$this->assigin("title","添加职位");

		$this->display("add"); 
	}

	//保存岗位信息
	public function save()
	{ 

		// 添加sql语句
		$add_array["job_name"]=$_POST['job_name'];
		$add_array["money"]=$_POST['money'];
		$add_array["job_require"]=$_POST['job_require'];
		$add_array["add_time"]=time();//1481178395
		$add_array["enterprise_id"]=$_SESSION['uid'];
		

		$pdo_model=new BaseModel();

		 $pdo_model->add("job",$add_array);
		
		$this->jump_do("添加成功！","/job");
	}

	public function delete()
	{
		 
		$pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);
		if ($id>0) {
			$pdo_model->delete('job',$id);
			parent::clear_all_cache();//更新缓存的工作

			$this->jump_do("删除成功！","/job");
		}else{
			$this->jump_do("操作有误！","/job");
		}
	}

	public function edit()
	{
		 
		$pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);

		$info_arr=$pdo_model->get_info('job',array('id'=>$id));

	 	$this->assigin("title","修改职位信息");

		$this->assigin("info_arr",$info_arr);
		$this->assigin("id",$id);
		$this->display("edit"); 
	}

	public function update()
	{
		 $pdo_model=new BaseModel();

		$id=intval($_REQUEST['id']);
		
		$pdo_model->update('job',$_POST,array('id'=>$id));

		$this->jump_do("修改成功！","/job");
	}




}


//class对象的定义
// class  对象名称{

// 	public function 行为1(){

// 	}
// 	public function 行为2(){

// 	}

// }


// //class实例化

// $job_class=new jobContoller();

// //对象的调用
// $job_class->do_thing();
  
 

?>