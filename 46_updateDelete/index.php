<?php include 'header.php';?>

<?php
$dsn = "mysql:dbname=userdata;host=localhost;";
$user = "root";
$pass = "";

try{
  $pdo = new PDO( $dsn, $user, $pass);
 // echo"successfully";
}catch( PDOException $e ){
	echo "connection faild". $e->getMessage();
}

//for update
// $id = 3; 
// $skill = "php"; 
// $sql = "update tbl_user set skill=:skill where id =:id";
// $stmt = $pdo->prepare($sql);

// $stmt->bindValue(':skill',$skill);
// $stmt->bindValue(':id', $id);
// $stmt->execute();
//delete
$id = 2; 
 
$sql = "delete from tbl_user where id =:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

?>



<?php include 'footer.php';?>
