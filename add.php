<?php
require 'connect.inc.php';

if(isset($_POST['submit'])){
	$na = $_POST['bb_name'];
	$a = $_POST['bb_address'];
	$c = $_POST['bb_city'];
	$nu = $_POST['bb_phno'];
$q = "INSERT INTO `bb`( `bb_name`, `bb_address`, `bb_phno`, `bb_city`) VALUES ('$na','$a','$nu','$c');";
mysqli_query($conn,$q);//echo "tdgh";
?>
<script type="text/javascript">window.location.href="admin.php"</script>
<?php
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADD</title>
	<style type="text/css">
		.x{
			font-size: 40px;margin-left: 450px;  
		}
		label{
			font-size: 30px;
		}
		body{
			background:rgb(0,200,200);
		}
	</style>
</head>
<body>
	<h1 style="font-size: 40px;" align="center">Enter Details to Add Blood Bank</h1>
	<form style="margin-left: 430px;text-align: left;" action="" method="POST">
		<label>NAME:</label>
		<input style="font-size: 30px;background: violet;margin-left: 60px;" type="text" name="bb_name" required>
		<br><br>
		<label>ADDRESS:</label>
		<input style="font-size: 30px;background: violet;margin-left: 12px;" type="text" name="bb_address" required>
		<br><br>
		<label>CITY:</label>
		<input style="font-size: 30px;background: violet;margin-left: 82px;" type="text" name="bb_city" required>
		<br><br>
		<label>PHONE NO:</label>
		<input style="font-size: 30px;background: violet;margin-left: 0px;" type="number" name="bb_phno" required>
		<br><br>
		<input style="margin-top:50px; font-size:28px;margin-left: 100px;height: 70px;width: 300px; background: pink;" type="submit" name="submit" value="Submit">
	</form>
</body>
</html>