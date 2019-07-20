<?php include 'header.php';?>

<?php
/*
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
 */ 
 $arry = array("PHP","HTML","CSS","JavaScript" );
 //$coding = new ArrayObject($arry);
 $ai = new arrayIterator($arry);
 foreach ($ai as $value) {
 	echo $ai->current()."<br/>";
 }
 echo "<hr/>";
  $limit = new LimitIterator($ai, 0, 2);
 foreach ($limit as $value) {
 	echo $limit->current()."<br/>";
 }

 echo "<hr/>";
 $ci = new cachingIterator($ai);
 foreach ($ci as $value) {
 	echo $value;
 	if($ci->hasNext()){
 		echo ", ";
 	}
 	
 }
?>



<?php include 'footer.php';?>
