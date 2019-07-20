<?php include 'header.php';?>

<?php

	class UserData{
		public $userName;
		public $userId;
		protected $age = "25";


		public function __construct( $name, $id ){
			$this->userName = $name;
			$this->userId   = $id;
		} 

        public function dispaly(){
        	echo "{$this->userName} And {$this->userId}"."<br/>";
        	echo  $this->age."in side the class"."<br/>";
        }
      }  

        class Admin extends UserData{
        	public $lavel;
        	public function dispaly(){
        	echo "{$this->userName} And {$this->userId} And {$this->lavel}"."<br/>";
        	echo  $this->age."in side the subclass";
          }
        }

	$userName ="Md.Enamul Haque Sarker";
	$userId   ="113-15-1558";
	$user = new UserData( $userName, $userId);
	$user->dispaly(); 
	$user = "mim";
	$id   = "113-15-1574";
	$ad = new Admin( $user, $id);
	$ad->lavel = "adminestator";
	$ad->dispaly();
    echo "<br/>";
	echo $user->age; 
?>
	

<?php include 'footer.php';?>
