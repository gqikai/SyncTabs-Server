<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$this->display();
	}
	
	public function head(){
		echo time();
		$this->display();
	}
	
	public function body(){
		$this->display();
	}
	
	public function test(){
		//import("ORG.Util.Image");
		//echo Image::buildImageVerify();
		var_dump($_SESSION);
	}
}