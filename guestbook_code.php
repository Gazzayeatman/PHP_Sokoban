<?php 
$guestbook = new Website("guesbook","","Sokoban - Guestbook","default.css");
//------Checks to see if the user is logged in
	if (isset($_SESSION['valid_user'])){
		$guestbook->createDiv("userPost","<form id='userText' action='controller.php?function=addGuestbookPost' method='POST' >Subject: <input type='text' name='subject' id='subject'/><textarea id='text' name='message' form='userText' cols='85' rows='6'></textarea><input type='submit' value='submit'/></form>",$guestbook);
	}
	$userpost = $guestbook->getDivContentByKey("userPost");
	$posts = $database->returnGuestbookPosts();
//------Creating the divs
	$guestbook->createDiv("header","<h1>Sokoban - Guestbook</h1>",$guestbook);
	$guestbook->createDiv("blankspace","&nbsp;",$guestbook);
	$guestbook->createDiv("navBar","$nav1l$nav2l$nav3l$nav4l$nav5l",$guestbook);
	$guestbook->createDiv("leftContent","$nav6l",$guestbook);
	$guestbook->createDiv("centerContent","$posts$userpost",$guestbook); //Add function to get guestbook posts from database
	$guestbook->createDiv("rightContent","&nbsp;",$guestbook);
	$guestbook->createDiv("footer","&nbsp;",$guestbook);
	$guestbook->createDiv("userPost","&nbsp;",$guestbook);
	$guestbook->createDiv("contentHeader","This game is fantastic",$guestbook);
	$guestbook->createDiv("contentBody","Ethical butcher authentic tote bag",$guestbook);
//------Gets the value of the divs
	$divHeader = $guestbook->getDivContentByKey('header');
	$divBlankSpace = $guestbook->getDivContentByKey('blankspace');
	$divNavBar = $guestbook->getDivContentByKey('navBar');
	$divLeftContainer = $guestbook->getDivContentByKey('leftContent');
	$divCenterContainer = $guestbook->getDivContentByKey('centerContent');
	$divRightContainer = $guestbook->getDivContentByKey('rightContent');
	
	$guestbook->createDiv("bodyContainer","$divLeftContainer$divCenterContainer$divRightContainer",$guestbook);
	$divBodyContainer = $guestbook->getDivContentByKey('bodyContainer');
	$guestbook->createDiv("container","$divHeader$divBlankSpace$divNavBar$divBodyContainer",$guestbook);
	
	$divContainer = $guestbook->getDivContentByKey('container');
	$guestbook->addContent($divContainer);
?>