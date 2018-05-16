<?php
namespace app\home\controller;
class Index extends Common{
    public function _initialize(){
        parent::_initialize();
    }
    public function index(){
    	$this->assign('nav','index');
        return $this->fetch();
    }
    public function about(){
    	$this->assign('nav','about');

    	return $this->fetch();
    }
    public function style(){
    	$type = input('type');
    	if($type == 'teach'){
    		$this->assign('type','教师风采');
    	}elseif($type == 'study'){
    		$this->assign('type','学生风采');
    	}

    	$this->assign('nav','style');
    	return $this->fetch();

    }
    public function intro(){
    	$this->assign('nav','intro');
    	return $this->fetch();

    }
    public function apply(){
    	$this->assign('nav','apply');
    	return $this->fetch();
    }
    public function charge(){
    	$this->assign('nav','charge');
    	return $this->fetch();
    }
}