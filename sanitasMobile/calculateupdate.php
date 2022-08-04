<?php
include 'db_connection.php';

$edit_id = $_POST['id'];
$edit_price = $_POST['price'];
$quantity = $_POST['qnty'];

//Update data   
$query = "Update tb_orddetail set ordDetail_price='$edit_price',ordDetail_qnty ='$quantity' where ordDetail_id='$edit_id'";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
	echo "Updated-successfully";
} else {
	echo "Problem occured !";
}

mysqli_close($link);
