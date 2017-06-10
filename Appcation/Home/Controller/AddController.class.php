<?php
namespace Home\Controller;
use Think\Controller;
class AddController extends Controller {
    public function index(){
    	$this->display();
    }

    public function getInfo(){
    		$User = M("time");
	    	$data['year'] = date("Y");
	    	$data['date'] = date("Y-m-d");
	    	$data['title'] = $_GET['title'];
	    	$data['contact'] = $_GET['contact'];
	    	$data['state'] = 1;
	    	$User->data($data)->add($data);
            if($User){
                $this->redirect('Home/Index/index');
            }
    	
    }

}