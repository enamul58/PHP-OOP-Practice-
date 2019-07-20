<?php include 'header.php';?>

<?php

  spl_autoload_register( function( $class_name){
    echo "$class_name<br/>";
    include "classes/".$class_name.".php";
  });

$cal = new Calculation;
echo $cal->getValue(4,5)->getResult();

?>



<?php include 'footer.php';?>
