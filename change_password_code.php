<?php
	$changePassword = new Website("change_password","","Sokoban - Change Password","default.css");
//------Creating the form and the table
	$passwordTable = new Table("passwordTable");
	$passwordTable->addData("Password: ");
	$passwordTable->addData("<input id='password' name='password' type='password' />");
	$passwordTable->addData("&nbsp;");
	$passwordTable->commitData();
	$passwordTable->addData("Re-enter Password: ");
	$passwordTable->addData("<input id='password2' name='password2' type='password' />");
	$passwordTable->addData("&nbsp;");
	$passwordTable->commitData();
	$passwordTable->addData("&nbsp;");
	$passwordTable->addData("<input type='submit' value='Submit'>");
	$passwordTable->addData("&nbsp;");
	$passwordTable->commitData();
	$passwordTable->finishTable();
	$changePassword->createDiv("header","<h1>Sokoban - Change Password</h1>",$changePassword);
	$changePassword->createDiv("blankspace","&nbsp;",$changePassword);
	$changePassword->createDiv("navBar","$links",$changePassword);
	$changePassword->createDiv("leftContent","$nav6l$nav7l",$changePassword);
	$changePassword->createDiv("centerContent","<form id='password' action='controller.php?function=changePassword' method='POST'>".$passwordTable->returnTable()."</form>",$changePassword);
	$changePassword->createDiv("rightContent","&nbsp;",$changePassword);

//------Gets the value of the divs
	$divHeader = $changePassword->getDivContentByKey('header');
	$divBlankSpace = $changePassword->getDivContentByKey('blankspace');
	$divNavBar = $changePassword->getDivContentByKey('navBar');
	$divLeftContainer = $changePassword->getDivContentByKey('leftContent');
	$divCenterContainer = $changePassword->getDivContentByKey('centerContent');
	$divRightContainer = $changePassword->getDivContentByKey('rightContent');
	
$changePassword->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$changePassword);
$divBodyContainer = $changePassword->getDivContentByKey('bodyContainer');
$changePassword->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$changePassword);

$divContainer = $changePassword->getDivContentByKey('container');
$changePassword->addContent($divContainer);
?>