<?php 
//Connection to database 
include 'db_connection.php';
//$json = array();
$id=$_POST["txtID"];
$query = "Select * from tb_customer WHERE cust_id = '$id'";
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking

while($row = mysqli_fetch_array($result))
    $userid = $row['userID'];
 //   $json[] = array('name' => $name);}

echo json_encode($userid);
