<?php include 'header.php';?>

<?php
   
$db = new mysqli("localhost","root","","test");

if(mysqli_connect_errno()){
  echo "connection faild";
}else {
  echo "connection successfully";
}


//for insert 
/*$sql = "insert into images(image) values(?)";

$stmt = $db->prepare($sql);
$stmt->bind_param("b",$image);
$image=file_get_contents("a.jpg");
$stmt->send_long_data(0, $image);
$stmt->execute();
*/
/*for retrive;*/
 $sql = "select image from images where id = ?";
 $stmt = $db->prepare($sql);
 $stmt->bind_param('i',$id);
 $id = 4;
 $stmt->execute();
 $stmt->bind_result($image);
 $stmt->fetch();
 header("content-type: png");
 echo '<img src="data:image/png;base64, '.base64_encode($image).'">';



?>



<?php include 'footer.php';?>
