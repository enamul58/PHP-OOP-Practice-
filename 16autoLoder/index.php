<?php include 'header.php';?>

<?php

  // function __autoload( $class_name ){
  //    include "classes/".$class_name.".php";
  // }

  // include 'classes/ruby.php';
  // include 'classes/java.php';
  // include 'classes/php.php';

  spl_autoload_register( function( $class_name){
    echo "$class_name<br/>";
    include "classes/".$class_name.".php";
  });


  $ruby = new ruby;
  $java = new java;
  $php  = new php;
?>



<?php include 'footer.php';?>
