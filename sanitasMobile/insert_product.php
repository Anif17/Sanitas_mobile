<?php
include 'db_connection.php';

$prod_id = $_POST['prod_id'];
$prod_price = $_POST['prod_price'];
$cust_id = $_POST['cust_id'];

$query = "INSERT INTO tb_orddetail(cust_id,prod_id,ordDetail_qnty,ordDetail_price,status) VALUES ('$cust_id','$prod_id','1','$prod_price','pending')";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
    echo " Register Successfully !";
} else {
    echo "Problem occured !";
    mysqli_close($link);
}
