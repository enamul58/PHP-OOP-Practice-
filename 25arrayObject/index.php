<?php include 'header.php';?>

<?php
/*
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
 */ 
 $arry = array("PHP","HTML","CSS","JavaScript" );
 $coding = new ArrayObject($arry);
 $coding->append("Java"); 
 $iterator = $coding->getIterator();
 while( $iterator->valid()){
 		echo $iterator->current()."<br/>";
 		$iterator->next();
 }
?>



<?php include 'footer.php';?>
