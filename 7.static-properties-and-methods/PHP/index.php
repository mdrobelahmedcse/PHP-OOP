<?php include 'inc/header.php';?>
<?php
 


//Static properties & methods

class userData{


	 public $user;
	 public $userId;
	 const NAME = "Abdullah al-mamun";
	 public static $age = "12";


	 public function __construct($userName,$userid){

	 	 $this->user   = $userName;
	 	 $this->userId = $userid;

	 	 echo "User name is {$this->user} and user id is {$this->userId}";

	 }


	 public function display(){

	 	 echo "Full name is: ".userData::NAME."<br>";
	 	 echo "Age is: ".self::$age;
	 }


	 public function __destruct(){

	 	 unset($this->user);
	 	 unset($this->userId);
	 }



}//end



$user = "Mamun ahammed";
$id   = "24";

$user = new userData($user,$id);
echo "<br>";
userData::display();
















 




?>
<?php include 'inc/footer.php';?>