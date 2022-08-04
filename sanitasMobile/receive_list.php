<?php
//Connection to database 
include 'db_connection.php';

$user = $_POST['custId'];
$query = "Select * from tb_orddetail WHERE status ='success'";
$result = mysqli_query($link, $query) or die("Query failed");	// SQL statement for checking

while ($r = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	$json[] = $r;
}
mysqli_free_result($result);
echo json_encode($json);
