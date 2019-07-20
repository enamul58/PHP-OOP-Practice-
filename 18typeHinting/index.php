<?php include 'header.php';?>

<?php
 spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });

 $cla = new Calculation;
 $ary = array(
 	array('Number One',10,10),
 	array('Number Two',20,10)
 );
  $cla->getValue($ary);
?>



<?php include 'footer.php';?>
