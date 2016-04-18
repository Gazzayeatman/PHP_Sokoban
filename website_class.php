<?php
include "div_class.php";
include "link_class.php";

class Website {
	public $name;
	public $head;
	public $title;
	public $style;
	public $body;
	public $topLinks = array();
	public $divs = array();
	
	public function __construct($name,$head,$title,$style){
		$this->name = $name;
		$this->head = $head;
		$this->title = $title;
		$this->style = $style;
		$this->body = "";
	}
	public function addDiv($id,$value){
		$this->divs[$id] = $value;
	}
	public function addLink($id,$hyperlink){
		$this->topLinks[$id] = $hyperlink;
	}
	public function createDiv($id,$value,$website){
		$newDiv = new Div($id,$value,$website);
	}
	public function createHyperLink($id,$name,$link){
		$newLink = new HyperLink($id,$name,$link,$this);
	}
	public function getDiv($key){
		if (isset($this->divs[$key])){
			return $this->divs[$key];
		} else {
			throw new KeyInvalidException("Invalid Key $key");
		}
	}
	public function getLink($key){
		if (isset($this->topLinks[$key])){
			return $this->topLinks[$key];
		} else {
			throw new KeyInvalidException("Invalid Key $key");
		}
	}
	public function getDivContentByKey($key){
		if (isset($this->divs[$key])){
			return $this->divs[$key]->returnDiv();
		}
	}
	public function addContentToDiv($key,$content){
		if (isset($this->divs[$key])){
			$this->divs[$key]->content = $content;
		}
	}
	public function addContent($newContent){
		$this->body = $this->body.$newContent;
	}
	public function returnWebsite(){
		echo "
			<!DOCTYPE html>
			<head>
				<title>$this->title</title>
				<link href=".$this->style." rel='stylesheet' type='text/css'> ".$this->head."
			</head>
			<body>
					$this->body
			</body>
		";
	}
}
?>