<?php
class Database{

	public $server;
	public $username;
	public $password;
	public $database;
	public $conn;
	
	public function __construct($server,$username,$password,$database){
		$this->server = $server;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->conn = new mysqli($this->server,$this->username,$this->password, $this->database);
	}

	public function addUser($userName,$firstName,$lastName,$email,$password){
		$db = $this->conn;
		$sql = "INSERT INTO Users VALUES (null,'$userName','".sha1($password)."','$firstName','$lastName','$email')";
		if (!$db->query($sql)){ 
			echo $db->error;
		}
	}
	
	public function login($username, $password){
		$db2 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username='$username' AND password =sha1('$password')";
		if(!$db2->query($sql)){
			echo $db2->error;
		}
		$result = $db2->query($sql);
		if ($result->num_rows == 1){
			$_SESSION['valid_user'] = $username;
		}
	}
	
	public function returnUserID($username){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username = '$username'";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row["id"];
	}
	public function returnFirstName($username){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username = '$username'";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row["firstName"];
	}
	public function returnLastName($username){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username = '$username'";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row["lastName"];
	}
	public function returnEmail($username){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username = '$username'";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row["email"];
	}
	public function updateUser($username,$firstName,$lastName,$email){
		$db = $this->conn;
		$sql = "UPDATE Users SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE username = '$username'";
		if (!$db->query($sql)){
			echo $db->error;
		}
	}
	
	public function returnChampions(){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Users WHERE username = '$username'";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row["email"];
	}
	
	public function returnGuestbookPosts(){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Guestbook ORDER BY id DESC";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$return = "";
		while ($row = $result->fetch_array()){
			$return = $return."<div id='userPost'>
			<div id='contentHeader'>From: ".$row['from_']." ".$row['subject']."</div>
			<div id='contentBody'>".$row['message']."</div>
			</div>";
		}
		return $return;
	}
	
	public function returnRecentLevels(){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Levels ORDER BY id DESC LIMIT 2";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$return = "";
		while ($row = $result->fetch_array()){
			$return = $return."<a href='#'><img class='sideImage' width='200px' src='images/".$row['imagePath']."' /></a>";
		}
		return $return;
	}
	public function returnAllLevels(){
		$db3 = $this->conn;
		$sql = "SELECT * FROM Levels ORDER BY id DESC";
		if(!$db3->query($sql)){
			echo $db3->error;
		}
		$result = $db3->query($sql);
		$return = "";
		while ($row = $result->fetch_array()){
			$return = $return."<a href='#'><img class='sideImage' width='200px' src='images/".$row['imagePath']."' /></a>";
			if ($count % 2 !=0){
			$return = $return."<br />";
			}
			$count++;
		}
		return $return;
	}
	
	public function addGuestbookPost($subject, $message, $poster){
		$db4 = $this->conn;
		$sql = "INSERT INTO Guestbook VALUES (null, '$subject', '$message', '$poster',null)";
		if (!$db4->query($sql)){
			echo $db4->error;
		}
	}
		
	public function changePassword($user, $password){
		$db = $this->conn;
		$sql = "UPDATE Users SET password = '".sha1($password)."' WHERE username = '$user'";
		if (!$db->query($sql)){
			echo $db->error;
		}
		echo $password;
	}
	
	public function getCompletedLevels($username){
		$db = $this->conn;
		$id = $this->returnUserID($username);
		$sql = "SELECT COUNT(id) AS 'Result' from CompletedLevels WHERE playerID = '$id' group by playerID";
		$result = $db->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row['Result'];
	}
	
	public function getTotalLevels(){
		$db = $this->conn;
		$sql = "SELECT COUNT(id) AS 'Result' from Levels";
		$result = $db->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row['Result'];
	}
	
	public function getTotalPlayers(){
	    $db = $this->conn;
		$sql = "SELECT COUNT(id) AS 'Result' from Users";
		$result = $db->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row['Result'];
	}
	
	public function logout(){
		if(isset($_SESSION['valid_user'])) {
   			unset($_SESSION['valid_user']);
   			session_destroy();
    		$page = 'index';
    		header('Location:controller.php?page="index"');
 		}
	}
		public function getTopPlayer(){
		$db = $this->conn;
		$sql = "SELECT COUNT(CompletedLevels.id) AS 'Result', CompletedLevels.playerID, Users.username from CompletedLevels INNER JOIN Users ON CompletedLevels.playerID = Users.id group by playerID ORDER BY Result DESC LIMIT 1";
		$result = $db->query($sql);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		return $row['username'];
	}
public function getTopPlayers($table){
		$db = $this->conn;
		$sql = "SELECT COUNT(CompletedLevels.id) AS 'Result', CompletedLevels.playerID, Users.username from CompletedLevels INNER JOIN Users ON CompletedLevels.playerID = Users.id group by playerID ORDER BY Result DESC";
		$result = $db->query($sql);
		while ($row = $result->fetch_array()){
			$table->addData($row['username']);
			$table->addData($row['Result']);
			$table->commitData();
		}
		$table->finishTable();
		//return $return;
	}
}
?>