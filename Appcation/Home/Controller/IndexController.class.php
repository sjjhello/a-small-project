<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$User = M('time');
        $date = $User->limit(10)->select();
        $this->assign('date',$date);
        $this->display();
    }
    
}