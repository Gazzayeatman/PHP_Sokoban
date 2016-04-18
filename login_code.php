<?php
$login = new Website("login","","Sokoban - Login","default.css");
//------Creating the table
	$loginTable = new Table("login");
	$loginTable->addData("Username: ");
	$loginTable->addData("<input id='username' name='username' type='text' />");
	$loginTable->addData("&nbsp;");
	$loginTable->commitData();
	$loginTable->addData("Password: ");
	$loginTable->addData("<input id='password' name='password' type='password' />");
	$loginTable->addData("&nbsp;");
	$loginTable->commitData();
	$loginTable->addData("&nbsp;");
	$loginTable->addData("<input type='submit' value='Login'>");
	$loginTable->addData("&nbsp;");
	$loginTable->commitData();
	$loginTable->finishTable();
	
//------Deciding which links to display
	if (isset($_SESSION['valid_user'])){
		$links = "$nav1l$nav2l$nav3l$nav4l$nav5l";
	} else if ($page == 'login'){
		$page == 'index';
	}
//------Creating the divs
	$login->createDiv("header","<h1>Sokoban - Login</h1>",$login);
	$login->createDiv("blankspace","&nbsp;",$login);
	$login->createDiv("navBar","$links",$login);
	$login->createDiv("leftContent","$nav6l",$login);
	$login->createDiv("centerContent","<form id='login' action='controller.php?function=Login' method='POST'>".$loginTable->returnTable()."</form>",$login);
	$login->createDiv("rightContent","&nbsp;",$login);
//------Gets the value of the divs
	$divHeader = $login->getDivContentByKey('header');
	$divBlankSpace = $login->getDivContentByKey('blankspace');
	$divNavBar = $login->getDivContentByKey('navBar');
	$divLeftContainer = $login->getDivContentByKey('leftContent');
	$divCenterContainer = $login->getDivContentByKey('centerContent');
	$divRightContainer = $login->getDivContentByKey('rightContent');
//------Adds the links to the page
	
$login->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$login);
$divBodyContainer = $login->getDivContentByKey('bodyContainer');
$login->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$login);

$divContainer = $login->getDivContentByKey('container');
$login->addContent($divContainer);	
?>