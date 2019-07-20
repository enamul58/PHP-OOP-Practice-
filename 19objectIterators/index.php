<?php include 'header.php';?>

<?php
 spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });

 $person = new person;


 foreach ($person as $key => $value) {
 	# code...
 	echo "<pre>";
 	echo "$value";
 	echo "</pre>";
 }
 $person->iterator();
?>



<?php include 'footer.php';?>
