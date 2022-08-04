<?php
include 'db_connection.php';

$prod_name = $_POST['prodname'];
$prod_quantity = $_POST['prodprice'];
$prod_price = $_POST['prodquantity'];
$prod_image = $_POST['prodimage'];

$query = "INSERT INTO tb_product(prod_name,prod_quantity,prod_price,image) 
VALUES ('$prod_name','$prod_quantity','$prod_price','$prod_image')";
$result = mysqli_query($link, $query) or die("Query failed");

if ($result) {
    echo "Product Add Successfully !";
} else {
    echo "Problem occured !";
    mysqli_close($link);
}
