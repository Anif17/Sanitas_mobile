<?php
include 'db_connection.php';
$cust_id = $_POST['cust_id'];

$query = "UPDATE tb_orddetail SET status='success' WHERE cust_id ='$cust_id'";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
    echo "Purchase Successfully";
} else {
    echo "Problem occured !";
}

mysqli_close($link);
