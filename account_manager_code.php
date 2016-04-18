<?php
$accountManager = new Website("account_manager","","Sokoban - Account Manager","default.css");
include "hyperlinks.php";
//------Creating a table
	//Uses test data, update to pull real data
	$form = new Table("registerForm");
	$form->addData("Username: ");
	$form->addData("<input type='text' id='username' name='username' value=".$_SESSION['valid_user']." readonly/>");
	$form->addData("&nbsp;");
	$form->commitData();
	$form->addData("First Name: ");
	$form->addData("<input type='text' id='firstName' name='firstName' value=".$database->returnFirstName($_SESSION['valid_user'])." />");
	$form->addData("&nbsp;");
	$form->commitData();
	$form->addData("Last Name: ");
	$form->addData("<input type='text' id='lastName' name='lastName' value=".$database->returnLastName($_SESSION['valid_user'])." />");
	$form->addData("&nbsp;");
	$form->commitData();
	$form->addData("Email Address: ");
	$form->addData("<input type='text' id='email' name='email' value=".$database->returnEmail($_SESSION['valid_user'])." />");
	$form->addData("&nbsp;");
	$form->commitData();
	$form->addData("&nbsp;");
	$form->addData("<input type='submit' value='Save Changes'/>");
	$form->addData("&nbsp;");
	$form->commitData();
	$form->finishTable();

//------Creating the divs
	$accountManager->createDiv("header","<h1>Sokoban - Account Manager</h1>",$accountManager);
	$accountManager->createDiv("blankspace","&nbsp;",$accountManager);
	$accountManager->createDiv("navBar","$nav1l$nav2l$nav3l$nav4l$nav5l",$accountManager);
	$accountManager->createDiv("leftContent","$nav6l$nav7l",$accountManager);
	$accountManager->createDiv("centerContent","<form id='register' action='controller.php?function=Update' method='POST'>".$form->returnTable()."</form>",$accountManager);
	$accountManager->createDiv("rightCOntent","&nbsp;",$accountManager);
	$accountManager->createDiv("footer","<script type='text/javascript' src='events.js'></script>",$accountManager);
//------Gets the value of the divs
	$divHeader = $accountManager->getDivContentByKey('header');
	$divBlankSpace = $accountManager->getDivContentByKey('blankspace');
	$divNavBar = $accountManager->getDivContentByKey('navBar');
	$divLeftContainer = $accountManager->getDivContentByKey('leftContent');
	$divCenterContainer = $accountManager->getDivContentByKey('centerContent');
	$divRightContainer = $accountManager->getDivContentByKey('rightContent');
	
	$accountManager->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$accountManager);
	$divBodyContainer = $accountManager->getDivContentByKey('bodyContainer');
	$accountManager->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$accountManager);
	
	$divContainer = $accountManager->getDivContentByKey('container');
	$accountManager->addContent($divContainer);
?>