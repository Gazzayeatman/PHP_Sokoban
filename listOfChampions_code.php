<?php
$champions = new Website("listOfChampions","","Sokoban - List Of Champions","default.css");
//------Creates the table 
	//------Add code to pull information from the database
	$tableChampions = new Table("leaderBoard");
	$tableChampions->addData("Player Username");
	$tableChampions->addData("Player Points");
	$tableChampions->commitData();
	$database->getTopPlayers($tableChampions);
//------Creating the divs
	$champions->createDiv("header","<h1>Sokoban - List Of Champions</h1>",$champions);
	$champions->createDiv("blankspace","&nbsp;",$champions);
	$champions->createDiv("navBar","$nav1l$nav2l$nav3l$nav4l$nav5l",$champions);
	$champions->createDiv("leftContent","$nav6l",$champions);
	$champions->createDiv("centerContent","<h3>List Of Champions</h3>".$tableChampions->returnTable()."",$champions);
	$champions->createDiv("rightContent","&nbsp;",$champions);
//------Gets the value of the divs
	$divHeader = $champions->getDivContentByKey('header');
	$divBlankSpace = $champions->getDivContentByKey('blankspace');
	$divNavBar = $champions->getDivContentByKey('navBar');
	$divLeftContainer = $champions->getDivContentByKey('leftContent');
	$divCenterContainer = $champions->getDivContentByKey('centerContent');
	$divRightContainer = $champions->getDivContentByKey('rightContent');
	
	$champions->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$champions);
	$divBodyContainer = $champions->getDivContentByKey('bodyContainer');
	$champions->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$champions);
	
	$divContainer = $champions->getDivContentByKey('container');
	$champions->addContent($divContainer);
?>