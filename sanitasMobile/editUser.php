<?php
include 'db_connection.php';

$edit_id = $_POST['cust_id'];
$edit_name = $_POST['cust_name'];
$edit_address = $_POST['cust_address'];
$edit_phone = $_POST['cust_phone'];
$edit_email = $_POST['cust_email'];
//Update data   
$query = "UPDATE tb_customer SET cust_name='$edit_name',cust_address='$edit_address',cust_phone='$edit_phone',cust_email='$edit_email' WHERE cust_id ='$edit_id'";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
    echo "Updated-successfully";
} else {
    echo "Problem occured !";
}

mysqli_close($link);
