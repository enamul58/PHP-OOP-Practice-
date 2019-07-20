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

$id = 2; 

$sql = "select * from tbl_user where id =:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();

while( $data = $stmt->fetch() ){

	echo "name:".$data['name']."<br>";
	echo "skill:".$data['skill']."<br>";

}





?>



<?php include 'footer.php';?>
