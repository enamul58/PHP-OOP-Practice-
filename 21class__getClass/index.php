<?php include 'header.php';?>

<?php
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
  
  class childPhp extends php {

    public function cms(){
      echo "Base class constant and class name ".__CLASS__."<br/>";
      echo "Base class function and function name ".get_class($this)."<br/>";
    }

    public function ourMethod(){
      parent::freamwork();
    }



  } 

  $php1 = new childPhp();
  $php1->freamwork();
  echo "<hr>";
  $php1->cms();
  echo "<hr>";
  $php1->ourMethod();


?>



<?php include 'footer.php';?>
