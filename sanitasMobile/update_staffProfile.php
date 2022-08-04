<?php
include 'db_connection.php';

$edit_uname = $_POST['username'];
$edit_pass = $_POST['password'];

//Update data   
$query = "Update tb_admin set password ='$edit_pass' where username='$edit_uname'";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
	echo "Updated-successfully";
} else {
	echo "Problem occured !";
}

mysqli_close($link);
