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
        $userpassword=$str['userpassword'];
        //$User = M("users");
        $condition['username'] = $username;  
        $condition['userpassword'] = $str['userpassword'];
        $at=Db::table('user')->where($condition)->select();  
        //$at = $users->where($condition)->select();  
        //echo $at;
        if ($at) {
            echo "success";
            
        }
        else{
            echo "error";
        }
}
}
?>