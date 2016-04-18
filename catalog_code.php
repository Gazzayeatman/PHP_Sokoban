<?php
	$catalog = new Website("catalog","","Sokoban - Catalog","default.css");
	$catalog->createDiv("header","<h1>Sokoban - Catalog</h1>",$catalog);
	$catalog->createDiv("blankspace","&nbsp;",$catalog);
	$catalog->createDiv("navBar","$links",$catalog);
	$catalog->createDiv("leftContent","$nav6l",$catalog);
	$catalog->createDiv("centerContent",$database->returnAllLevels(),$catalog);
	$catalog->createDiv("rightContent","&nbsp;",$catalog);
//------Gets the value of the divs
	$divHeader = $catalog->getDivContentByKey('header');
	$divBlankSpace = $catalog->getDivContentByKey('blankspace');
	$divNavBar = $catalog->getDivContentByKey('navBar');
	$divLeftContainer = $catalog->getDivContentByKey('leftContent');
	$divCenterContainer = $catalog->getDivContentByKey('centerContent');
	$divRightContainer = $catalog->getDivContentByKey('rightContent');
//------Adds the links to the page
	
$catalog->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$catalog);
$divBodyContainer = $catalog->getDivContentByKey('bodyContainer');
$catalog->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$catalog);

$divContainer = $catalog->getDivContentByKey('container');
$catalog->addContent($divContainer);	
?>