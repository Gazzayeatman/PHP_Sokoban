<?php
$register = new Website("register","<script type='text/javascript' src='js.js'></script>","Sokoban - Register","default.css");
include "hyperlinks.php";
//Creating the table 
	$registerTable = new Table("registerTable");
	$registerTable->addData("Username: ");
	$registerTable->addData("<input type='text' name='username' id='username' />");
	$registerTable->addDataWithID("&nbsp;","usernameText");
	$registerTable->commitData();
	$registerTable->addData("Password: ");
	$registerTable->addData("<input type='password' name='password' id='password' />");
	$registerTable->addDataWithID("&nbsp;","passwordText");
	$registerTable->commitData();
	$registerTable->addData("Re enter Password: ");
	$registerTable->addData("<input type='password' name=password2' id='password2' />");
	$registerTable->addDataWithID("","passwordText2");
	$registerTable->commitData();
	$registerTable->addData("First Name: ");
	$registerTable->addData("<input type='text' name='firstName' id='firstName' />");
	$registerTable->addDataWithID("&nbsp;","firstNameText");
	$registerTable->commitData();
	$registerTable->addData("Last Name: ");
	$registerTable->addData("<input type='text' name='lastName' id='lastName' />");
	$registerTable->addDataWithID("&nbsp;","lastNameText");
	$registerTable->commitData();
	$registerTable->addData("Email Address: ");
	$registerTable->addData("<input type='text' name='email' id='email' />");
	$registerTable->addDataWithID("&nbsp;","emailText");
	$registerTable->commitData();
	$registerTable->addData("&nbsp;");
	$registerTable->addData("<input type='submit' id='submit' value='Register' />");
	$registerTable->addData("&nbsp;");
	$registerTable->commitData();
	$registerTable->addData("&nbsp;");
	$registerTable->addDataWithID("&nbsp;","errorDisplay");
	$registerTable->addData("&nbsp;");
	$registerTable->commitData();
	$registerTable->finishTable();
//------Displays content based on session status
	if (isset($_SESSION['valid_user'])){
			//Add code to send the user back to index
		}
//------Creating the divs
	$register->createDiv("header","<h1>Sokoban - Register</h1>",$register);
	$register->createDiv("blankspace","&nbsp;",$register);
	$register->createDiv("navBar","$nav6l&nbsp;&nbsp;&nbsp;&nbsp;",$register);
	$register->createDiv("leftContent","&nbsp;",$register);
	$register->createDiv("centerContent","<form id='register' action='controller.php?function=Register' method='POST'>".$registerTable->returnTable()."</form>",$register);
	$register->createDiv("rightContent","<script type='text/javascript' src='events.js'></script>",$register);
//------Gets the value of the divs
	$divHeader = $register->getDivContentByKey('header');
	$divBlankSpace = $register->getDivContentByKey('blankspace');
	$divNavBar = $register->getDivContentByKey('navBar');
	$divLeftContainer = $register->getDivContentByKey('leftContent');
	$divCenterContainer = $register->getDivContentByKey('centerContent');
	$divRightContainer = $register->getDivContentByKey('rightContent');
//------Adds the links to the page
		
	$register->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$register);
	$divBodyContainer = $register->getDivContentByKey('bodyContainer');
	$register->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$register);
	
	$divContainer = $register->getDivContentByKey('container');
	$register->addContent($divContainer);
?>