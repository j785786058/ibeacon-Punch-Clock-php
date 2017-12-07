<?php
namespace app\index\controller;
//引入相同数据库类
use think\Db; 
//引入系统控制器类
use think\Controller;

class Index extends Controller
{
    public function index()
    {
       
    	$str = file_get_contents('php://input');  
		$str=json_decode($str,true);
		$username=$str['username'];
		$classroom=$str['classroom'];
		$intime=$str['intime'];
    	$data=['username'=>$username,'classroom'=>$classroom,'intime'=>$intime]; 
        $result=Db::table('beacon1')->insert($data);

        if ($result) {
        	echo "success";
        	
        }
        else{
        	echo "error";
        }
}
}
?>