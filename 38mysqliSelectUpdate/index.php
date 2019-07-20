<?php include 'header.php';?>

<?php
   
$db = new mysqli("localhost","root","","userdata");
if(mysqli_connect_errno()){
  echo "connection faild";
}else {
  echo "connection successfully";
}

$sql = "select * from tbl_user";
$result = $db->query($sql);
while($data = $result->fetch_object()){
     echo "<pre>";
     echo $data->skill;
     echo "<br>";
     echo $data->name;
     echo "</pre>";
}
 $sql = "update tbl_user set skill ='java, php' where id = '2' ";
 $result = $db->query($sql);

?>



<?php include 'footer.php';?>
