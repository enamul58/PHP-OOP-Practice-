<?php include 'header.php';?>

<?php

	class person{
		public $name;
		public $age;
		public $id;

		public function __construct($name, $age){
       		$this->name = $name;
       		$this->age  = $age;
		}

		public function setId($id){
			   $this->id = $id;
		}

		public function __destruct(){
			if(!empty($this->id)){
				echo "Saving Person";
			}
		}


	}

	$personOne = new person("Md.Enamul Haque Sarker", "26");
	$personOne->setId(26);
	unset($personOne);

?>
	

<?php include 'footer.php';?>
