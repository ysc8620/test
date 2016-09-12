<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // echo file_get_contents(APP_PATH."/../file")."<br/>";

        echo time()."\r\n";
//        $t = M('test')->add(['name'=>'test','status'=>1,'create_time'=>time()]);
//       var_dump($t);
        $re = M('weixin_log')->find();
        var_dump($re);
    }
}