<?php include 'header.php';?>

<?php
 /*spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });*/
  trait java{
  	public function javaCoder(){
  		echo "i love java coding <br>";
  	}
  }
  trait php{
  	public function phpCoder(){
  		echo "i love php coding";
  	}
  }

  class coderOne{
  	use java, php;
  }

  $c1 = new coderOne;
  $c1->javaCoder();
  $c1->phpCoder();


?>



<?php include 'footer.php';?>
