<?php include 'header.php';?>

<?php

	class person{
		public $user;
		public $userId;
		const NAME = "Abdulla Al Mamun";
		public static $age = 30;
    
    public function __construct( $userName, $userId){
    	$this->user   = $userName;
    	$this->userId = $userId;

    	echo "Username is:{$this->user} and Userid is:{$this->userId}";
    }
    
    public static function dispaly(){
    	echo "<br/>";
    	echo "Username is: ".person::NAME."<br>";
    	echo "Age is: ".person::$age;

    }



    public function __destruct(){
    	unset($this->user);
    	unset($this->userId);
    }

  }

  $userName = "Md.Enamul Haque Sarker";
  $userId   = "113-15-1558";

  $perObject = new person( $userName, $userId );
  //$perObject->dispaly();
  person::dispaly();
?>
	

<?php include 'footer.php';?>
