<?php
include 'db_connection.php';

$email = $_POST['email']; 					// assign textbox to variable
$password = $_POST['pass'];

$query = "SELECT * FROM tb_customer where cust_email='$email' AND cust_pass='$password'";
$result = mysqli_query($link, $query) or die("Query failed");	// SQL statement for checking
if (mysqli_num_rows($result) <= 0)   			// check either result found or not
	echo "Login Error";
else {
	while ($row = mysqli_fetch_array($result)) {
		$id = $row['cust_id'];
	}
	echo $id;
}
mysqli_close($link);
