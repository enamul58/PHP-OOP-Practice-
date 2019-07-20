<?php include 'header.php';?>

<?php

  class student{

    public $name;
  	public function describe(){
  		echo "i am student <br>";
  	}
  	public function __get( $n ){
  		echo "$n";
  	}
  	public function __set( $n, $value){
  		echo "$n $value <br/>";
  	}
  	public function __call( $n, $value){
  		echo "$n ".implode( ' ', $value);
  	}
  }

  $st = new student();
  $st->describe();
  $st->age = 25;
  $st->met('2','3','4');

?>



<?php include 'footer.php';?>
