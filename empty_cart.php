<?php
  session_start();
  include('db_connect.php');
  $session=session_id();
 
    $SQL="SELECT * FROM cart WHERE ses_id=\"$session\"";
    $result_a=mysql_query($SQL) or die("Could not execute query");
  
    while ($data=mysql_fetch_assoc($result_a)) 
     {   
      $id=$data['pid'];
	  if(!empty($id))
	   {  
	   $SQL="SELECT * FROM cart WHERE pid=\"$id\" AND ses_id=\"$session\"";
       $result=mysql_query($SQL) or die("Could not execute query");
	   $data_z=mysql_fetch_array($result);
	   $q=$data_z['quantity'];
	   $SQL="UPDATE products SET in_stock=in_stock+$q WHERE pid='$id'";
       mysql_query($SQL) or die("Could not execute query");
	   $SQL="DELETE FROM cart WHERE pid=\"$id\" AND ses_id=\"$session\"";
       $result=mysql_query($SQL) or die("Could not execute query");
	   }
	  else
	   {
	   echo 'try again';
	   }
    }
   header("Location:shopping_cart.php");
?>