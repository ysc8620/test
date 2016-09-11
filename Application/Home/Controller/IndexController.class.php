<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo $_SERVER["SERVER_NAME"]."<br/>";
        echo time()."\r\n";
//        $t = M('test')->add(['name'=>'test','status'=>1,'create_time'=>time()]);
//       var_dump($t);
        $re = M('test')->find();
        var_dump(M()->getDbFields());
        var_dump($re);
    }
}