<?php

//Connection to database 
include 'db_connection.php';

$json = array();
$search = $_POST["txtSearch"];

$query = "Select *from tb_orddetail WHERE ordDetail_id LIKE '%{$search}%' order by ordDetail_id Asc";
$result = mysqli_query($link, $query) or die("Query failed");

while ($row = mysqli_fetch_array($result)) {
	$json[] = $row;
}


echo json_encode($json);
