<?php include 'header.php';?>

<?php
   
$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
  echo "connection faild";
}else {
  echo "connection successfully";
}

$sql = "select name, skill from tbl_user order by id";

$stmt = $db->prepare($sql);
$stmt->execute();
$stmt->bind_result($name, $skill);
while( $stmt->fetch()){
     echo "<br> $skill";
}

?>



<?php include 'footer.php';?>
