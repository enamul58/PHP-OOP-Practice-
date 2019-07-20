<?php include 'header.php';?>

<?php
   
$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
  echo "connection faild";
}else {
  echo "connection successfully";
}

?>



<?php include 'footer.php';?>
