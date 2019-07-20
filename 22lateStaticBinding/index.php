<?php include 'header.php';?>

<?php
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
  
  class childPhp extends php {

    public static function getMethod(){
    return __CLASS__;
  }

} 
 
 $php = new php();
 $php->freamwork();
 $childphp = new childPhp();
 $childphp->freamwork(); 
  


?>



<?php include 'footer.php';?>
