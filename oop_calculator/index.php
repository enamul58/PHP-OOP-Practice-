<?php 
 include 'header.php';
 include 'functions.php';
 ?>


<form action="" method="post">
	<table>
		<tr>
			<td>Enter First Number: </td>
			<td><input type="number" name="num1"/></td>
		</tr>
		<tr>
			<td>Enter Sceond Number: </td>
			<td><input type="number" name="num2"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="calculator" value="calculator" /></td>
		</tr>
	</table>
</form>

<?php
	if(isset($_POST['calculator'])){
		$numOne = $_POST['num1'];
		$numTwo = $_POST['num2'];

		if(empty($numOne) or empty($numTwo)){
			echo "<span style='color:red'>Please Enter Number.</span>";
		}

		$cal = new calculator;
		$cal->add( $numOne, $numTwo );
		$cal->sub( $numOne, $numTwo );
		$cal->mul( $numOne, $numTwo );
		$cal->div( $numOne, $numTwo );

	}
	

?>
	

<?php include 'footer.php';?>
