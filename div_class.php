<?php 
class Div{
	public $id;
	public $content;
	public $myWebsite;
	
	public function __construct($id,$content,$website){
		$this->id = $id;
		$this->content = $content;
		$this->mywebsite = $website;
		$website->addDiv($id,$this);
	}
	public function returnDiv(){
		return "<div id=".$this->id.">$this->content</div>";
	}
}
?>