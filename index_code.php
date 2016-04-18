<?php
$index = new Website("index","","Sokoban - A man's tale","default.css");
include "hyperlinks.php";
	//------Creating the table for the rightContentDiv
	$rightTable = new Table("contentRight");
		$rightTable->addData("Username: ");
		$rightTable->addData($_SESSION['valid_user']);
		$rightTable->commitData();
		$rightTable->addData("Levels Completed: ");
		$rightTable->addData($database->getCompletedLevels($_SESSION['valid_user']));
		$rightTable->commitData();
		$rightTable->addData("Total Levels: ");
		$rightTable->addData($database->getTotalLevels());
		$rightTable->commitData();
		$rightTable->addData("Total Players: ");
		$rightTable->addData($database->getTotalPlayers());
		$rightTable->commitData();
		$rightTable->addData("Lead Player: ");
		$rightTable->addData($database->getTopPlayer());
		$rightTable->commitData();
		$rightTable->finishTable();
	//------Deciding which links to display
		if (isset($_SESSION['valid_user'])){
			$links = "$nav1l$nav2l$nav3l$nav4l$nav5l";
			$rightContent = "<h3>Details</h3>".$rightTable->returnTable()."";
		} else {
			$links = "$nav10l$nav11l$nav11l$nav11l$nav9l";
			$rightContent = "";
		}
		$leftContent = $database->returnRecentLevels();
	//------Creating the divs
		$index->createDiv("header","<h1>Sokoban - A man's tale</h1>",$index);
		$index->createDiv("blankspace","&nbsp;",$index);
		$index->createDiv("navBar","$links",$index);
		$index->createDiv("leftContent","<h3>Recent Levels</h3>$leftContent",$index);
		$index->createDiv("centerContent","<img class='sideImage' width='550px' src='images/sokoban_game.jpg'>",$index);
		$index->createDiv("rightContent","$rightContent",$index);
	//------Gets the value of the divs
		$divHeader = $index->getDivContentByKey('header');
		$divBlankSpace = $index->getDivContentByKey('blankspace');
		$divNavBar = $index->getDivContentByKey('navBar');
		$divLeftContainer = $index->getDivContentByKey('leftContent');
		$divCenterContainer = $index->getDivContentByKey('centerContent');
		$divRightContainer = $index->getDivContentByKey('rightContent');
	//------Adds the links to the page
		
	$index->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$index);
	$divBodyContainer = $index->getDivContentByKey('bodyContainer');
	$index->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$index);
	
	$divContainer = $index->getDivContentByKey('container');
	$index->addContent($divContainer);
?>