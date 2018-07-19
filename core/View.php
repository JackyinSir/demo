<?php namespace core;

class View{
	//模版文件
	protected $file;
	//模版变量
	protected $vars = [ ]; 
	
	public function make($file){
		$this->file = 'view/'. $file . '.html';
		return $this;
	}
	
	//分配变量
	public function with($name,$value){
		$this->vars[$name] = $value;	
		return $this;	
	}
	
	//加载模版
	public function __toString(){
		extract($this->vars);
		include $this->file;
		return '';
	}
}
?>