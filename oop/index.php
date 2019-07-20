<?php include 'header.php';?>

<?php

	class person{
		public $name;
		public $age;

		public function personName(){
			    echo "Your Name is ".$this->name."<br/>";
		}
		public function personAge( $value ){
			echo "Your Age Is: ".$this->age = $value;
		}

	}

	$personOne = new person;
	$personOne->name = "Md.Enamul Hauqe Sarker";
	$personOne->personName();
	$personOne->personAge("26");

?>
	

<?php include 'footer.php';?>
