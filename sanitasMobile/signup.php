<?php
include 'db_connection.php';

$txtEmail = $_POST['txtEmail'];
$txtName = $_POST['txtName'];
$txtAddress = $_POST['txtAddress'];
$txtPhone = $_POST['txtPhone'];
$txtPass = $_POST['txtPass'];

$query = "INSERT INTO tb_customer(cust_pass,cust_name,cust_address,cust_phone,cust_email) VALUES ('$txtPass','$txtName','$txtAddress','$txtPhone','$txtEmail')";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
    echo " Register Successfully !";
} else {
    echo "Problem occured !";
    mysqli_close($link);
}
