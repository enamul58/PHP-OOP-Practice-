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

$sql = "select * from tbl_user";
$result = $pdo->query($sql);

foreach ($result as $value) {
	# code...
	echo $value['skill']."<br>";
  }
?>



<?php include 'footer.php';?>
