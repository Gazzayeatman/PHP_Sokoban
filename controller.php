<?php 
session_start();
	if(isset($_GET['page'])){
		$page = $_GET['page'];
	} else {
		$page = 'index';
	}
	
	include "database_class.php";
	//Edit here to connect to your database
	//Server, username, password, database in use
	$database = new Database("localhost","Garry","aaaaaa","Sokoban");
	
	if (isset($_GET['function'])){
		$function = $_GET['function'];
		if ($function == "Register"){
			$userName = trim($_POST["username"]);
			$firstName = trim($_POST['firstName']);
			$lastName = trim($_POST['lastName']);
			$password = trim($_POST['password']);
			$email = trim($_POST['email']);
			//Add checks to see if there are null values
			$database->addUser($userName,$firstName,$lastName,$email,$password);
		}
		if ($function == "Login"){
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			//Add checks to see if strings are null 
			$database->login($username,$password);
		}
		if ($function == "Update"){
			$userName = trim($_POST["username"]);
			$firstName = trim($_POST['firstName']);
			$lastName = trim($_POST['lastName']);
			$email = trim($_POST['email']);
			$database->updateUser($userName,$firstName,$lastName,$email);
		}
		if ($function == 'addGuestbookPost'){
			$subject = trim($_POST['subject']);
			$message = trim($_POST['message']);
			$database->addGuestbookPost($subject,$message, $_SESSION['valid_user']);
		}
		if ($function == 'changePassword'){
			$password = trim($_POST['password']);
			$database->changePassword($_SESSION['valid_user'],$password);
		}
	}
	include "website_class.php";
	include "table_class.php";
	include "index_code.php";
	include "account_manager_code.php";
	include "guestbook_code.php";
	include "listOfChampions_code.php";
	include "login_code.php";
	include "register_code.php";
	include "catalog_code.php";
	include "change_password_code.php";
	include "hyperlinks.php";
	//Change to switch
	switch ($page){
		case "index":
			echo $index->returnWebsite();
			break;
		case "account_manager":
			echo $accountManager->returnWebsite();
			break;
		case "guestbook":
			echo $guestbook->returnWebsite();
			break;
		case "listOfChampions":
			echo $champions->returnWebsite();
			break;
		case "login":
			echo $login->returnWebsite();
			break;
		case "register":
			echo $register->returnWebsite();
			break;
		case "logout":
			$database->logout();
			break;
		case "catalog":
			echo $catalog->returnWebsite();
			break;
		case "catalog":
			echo $catalog->returnWebsite();
			break;
		case "change_password":
			echo $changePassword->returnWebsite();
			break;
		default:
			echo $index->returnWebsite();
			break;
	}
?>