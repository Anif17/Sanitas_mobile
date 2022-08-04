<?php 
 include 'db_connection.php';
       //delete data

       //$delete_id=$_POST['id']; 
	   $delete_id=$_POST['delete'];
	   $query = "DELETE FROM  tb_orddetail WHERE ordDetail_id='$delete_id'";
	   $result = mysqli_query( $link,$query) or die("Query failed");
       if ($result)
	   echo "Deleted-successfully"; 
	     else
	   echo "Problem occured !"; 
	   mysqli_close($link);
