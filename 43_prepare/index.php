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

$name  ="Md.enamul haque sarker";
$email ="enamul58@live.com";
$skill = "php";
$age   = 26;

$sql = "insert into tbl_user(name,email,skill,age)
		values(:name,:email,:skill, :age)";
$stmt = $pdo->prepare($sql);
$stmt->bindparam(':name',$name);
$stmt->bindparam(':email',$email);
$stmt->bindparam(':skill',$skill);
$stmt->bindparam(':age',$age);
$stmt->execute();

?>



<?php include 'footer.php';?>
