<?php include 'header.php';?>

<?php
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
  
  
  $java = new Language();
  $java->setCat("enamul");
  echo $java->getCat();
  $php = new Language();
  $php = clone $java;
  $php->setcat("oop");
   echo $php->getCat();
   echo $java->getCat();
?>



<?php include 'footer.php';?>
