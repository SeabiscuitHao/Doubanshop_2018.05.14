<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index () {
		$res = D('goods')->getListInfo();
		// var_dump($res);die();
		$this->assign('res',$res);
		$this->display();
	}
	
}