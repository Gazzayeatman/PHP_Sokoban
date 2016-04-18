<?php
//------Creating the links for the pages
	$index->createHyperLink("nav1","Account Manager","controller.php?page=account_manager");
	$index->createHyperLink("nav2","Catalog","controller.php?page=catalog");
	$index->createHyperLink("nav3","List Of Champions","controller.php?page=listOfChampions");
	$index->createHyperLink("nav4","Guestbook","controller.php?page=guestbook");
	$index->createHyperLink("nav5","Logout","controller.php?page=logout");
	$index->createHyperLink("nav6","Home","controller.php?page=index");
	$index->createHyperLink("nav7","Change Password","controller.php?page=change_password");
	//$index->createHyperLink("nav8","Disable Account","#");
	$index->createHyperLink("nav9","Register","controller.php?page=register");
	$index->createHyperLink("nav10","Login","controller.php?page=login");
	$index->createHyperLink("nav11","&nbsp;","#");
				
//------Gets the value of the link objects
	$nav1 = $index->getLink("nav1");
	$nav2 = $index->getLink("nav2");
	$nav3 = $index->getLink("nav3");
	$nav4 = $index->getLink("nav4");
	$nav5 = $index->getLink("nav5");
	$nav6 = $index->getLink("nav6");
	$nav7 = $index->getLink("nav7");
	//$nav8 = $index->getLink("nav8");
	$nav9 = $index->getLink("nav9");
	$nav10 = $index->getLink("nav10");
	$nav11 = $index->getLink("nav11");
	
//------Returning the anchor tag
	$nav1l = $nav1->returnLink();
	$nav2l = $nav2->returnLink();
	$nav3l = $nav3->returnLink();
	$nav4l = $nav4->returnLink();
	$nav5l = $nav5->returnLink();
	$nav6l = $nav6->returnLink();
	$nav7l = $nav7->returnLink();
	//$nav8l = $nav8->returnLink();
	$nav9l = $nav9->returnLink();
	$nav10l = $nav10->returnLink();
	$nav11l = $nav11->returnLink();
?>