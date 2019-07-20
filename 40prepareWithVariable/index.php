<?php include 'header.php';?>

<?php
   
$db = new mysqli("localhost","root","","userdata");

if(mysqli_connect_errno()){
  echo "connection faild";
}else {
  echo "connection successfully";
}

$sql = "insert into tbl_user(name,email,skill) values(?,?,?)";

$stmt = $db->prepare($sql);
$stmt->bind_param("sss",$name, $mail, $skill);

$name ="Md. Enamul Haque Sarker";
$mail ="enamullimon@gmail.com";
$skill = "php";

$stmt->execute();
$stmt->close();
$db->close();



?>



<?php include 'footer.php';?>
