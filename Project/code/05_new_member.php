<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome New member!</title>
  <link rel="stylesheet" href="index.css">
</head>

<body>
	<?php

	include "03_connectDB.php";

	$user  = $_POST["usr"];
	$pwd1  = $_POST["pwd1"];
	$pwd2  = $_POST["pwd2"];
	$usertype = $_POST["usrtype"];

	if ($pwd1 != $pwd2) {
		echo "Passwords do not match. Please retype identical passwords in both boxes.<br>";
		echo "<br>Go to <a href='02_register.php'>Regisration Page </a>";
	} else {
		$sql = "SELECT uname FROM customer WHERE uname = '$user'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			$row = mysqli_fetch_assoc($result);
			echo  $user . " has been registered!";
			echo "<br><hr><br> Go back to <a href='02_register.php'>Regisration</a>";
		} else {

			$sql = "INSERT INTO `customer` (`uname`, `upassword`) VALUES ('$user', '$pwd1')";
			$result = mysqli_query($conn, $sql);
			echo "You have been registered successfully! <br> Welcome " . $user . "!<br>";

			 // 获取新插入的用户的 uID
			 $uID = mysqli_insert_id($conn);
			 echo "Your userID is $uID";
			 echo "<br><a href='01_login.php'>Go to Login!</a>";
	 
			 $sql_phone = "INSERT INTO `customer_phone` (`uID`) VALUES ($uID)";
			 if (mysqli_query($conn, $sql_phone)) {
					 echo "Phone record created successfully.";
			 } else {
					 echo "Error: " . mysqli_error($conn);
			 }
	 
			 $sql_mail = "INSERT INTO `customer_email` (`uID`) VALUES ($uID)";
			 if (mysqli_query($conn, $sql_mail)) {
					 echo "Email record created successfully.";
			 } else {
					 echo "Error: " . mysqli_error($conn);
			 }
			// $sql = "SELECT * FROM customer WHERE uname='$user'";
			// $result = mysqli_query($conn, $sql);
			// if (mysqli_num_rows($result) > 0) {
			// 	$row = mysqli_fetch_assoc($result);
			// 	$uID = $row["uID"];
			// }
			// echo "Your userID is $uID";
			// echo "<br><a href='01_login.php'>Go to Login!</a>";

			// $sql_phone = "INSERT INTO `customer_phone` (`uID`) VALUES ($uID)";
			// $result_phone = mysqli_query($conn, $sql_phone);
			// if (mysqli_num_rows($result_phone) > 0) {
			// 	echo "1111";
			// }
			// $sql_mail = "INSERT INTO `customer_email` (`uID`) VALUES ($uID)";
			// $result_email = mysqli_query($conn, $sql_mail);
			// if (mysqli_num_rows($result_email) > 0) {
			// 	echo "1111";
			// }
			
			// $url = "01_login.php";
			// header('Location:' . $url);
		}
	}
	?>
</body>

</html>