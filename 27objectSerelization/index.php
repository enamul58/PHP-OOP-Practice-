<?php include 'header.php';?>

<?php
spl_autoload_register(function( $className ){
 	include"classes/".$className.".php";
 });
  
  $pro = new programming();
  $ser =  serialize($pro);
  //file_put_contents("programming.txt", $ser);
  $getcount = file_get_contents("programming.txt");
  $unser = unserialize($getcount);
  echo "<pre>";
  print_r($unser);
  echo "<pre/>";
?>



<?php include 'footer.php';?>
