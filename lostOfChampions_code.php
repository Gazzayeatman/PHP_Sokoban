<?php
$champions = new Website("listOfChampions","","Sokoban - List Of Champions","default.css");
//------Creates the table 
	//------Add code to pull information from the database
	$tableChampions = new Table("leaderBoard");
	$tableChampions->addData("Player Username");
	$tableChampions->addData("Player Points");
	$tableChampions->commitData();
?>