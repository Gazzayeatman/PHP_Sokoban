<?php
class HyperLink{
	public $id;
	public $name;
	public $link;
	
	public function __construct($id,$name,$link,$website){
		$this->id = $id;
		$this->name = $name;
		$this->link = $link;
		$website->addLink($id,$this);
	}
	public function returnLink(){
		return "<a class="."navCell"." href=".$this->link." id=".$this->id.">".$this->name."</a>";
	}
}
?>