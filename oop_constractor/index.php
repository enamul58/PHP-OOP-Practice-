<?php include 'header.php';?>

<?php

	class person{
		public $name;
		public $age;

		public function __construct($name, $age){
       		$this->name = $name;
       		$this->age  = $age;
		}

		public function personDetiles(){
			    echo "Your Name is: ".$this->name. "Your Age Is:".$this->age;
		}

	}

	$personOne = new person("Md.Enamul Haque Sarker", "26");
	$personOne->personDetiles();

?>
	

<?php include 'footer.php';?>
