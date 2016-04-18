<?php 
class Table{
	public $id;
	public $makeup;
	public $temp;
	public $table;
	
	public function __construct($id){
		$this->id = $id;
		$this->makeup = "";
		$this->temp = "";
	}
	public function addRow($data){
		$this->makeup = $this->makeup."<tr>$data</tr>";
	}
	
	public function addData($data){
		$this->temp = $this->temp."<td>".$data."</td>";
	}
	public function addDataWithID($data, $id){
		$this->temp = $this->temp."<td id=".$id.">".$data."</td>";
	}
	
	public function clearTemp(){
		$this->temp = "";
	}
	
	public function commitData(){
		$this->addRow($this->temp);
		$this->clearTemp();
	}
	
	public function finishTable(){
		$this->table = 
			"<table id=".$this->id.">
			".$this->makeup."
			</table>";
	}
	
	public function returnTable(){
		return $this->table;
	}
}
?>