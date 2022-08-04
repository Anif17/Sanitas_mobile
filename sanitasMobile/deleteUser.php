<?php 
 include 'db_connection.php';

       //$delete_id=$_POST['id']; 
	   $delete_id=$_POST['id'];
	   $query = "DELETE FROM  tb_product WHERE prod_id='$delete_id'";
	   $result = mysqli_query( $link,$query) or die("Query failed");
       if ($result)
	   echo "Deleted-successfully"; 
	     else
	   echo "Problem occured !"; 
	   mysqli_close($link);
