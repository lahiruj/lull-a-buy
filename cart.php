<?php 

session_start();
include('db_connect.php');
$session=session_id();

if(isset($_GET['pid']))
{
	$id = (int) $_GET['pid'];

	if(!empty($id))
	{ 
	   $qnty=1;
	   $cid=0;
	   $SQL="UPDATE products SET in_stock=in_stock-1 WHERE pid='$id'";
       mysql_query($SQL) or die("Could not execute query");
	   $SQL="SELECT * FROM cart WHERE pid=\"$id\" AND ses_id=\"$session\"";
       $result=mysql_query($SQL) or die("Could not execute query");
		 
	    if(mysql_num_rows($result))
	      {
			 $SQL="UPDATE cart SET quantity=quantity+1 WHERE pid=\"$id\" AND ses_id=\"$session\"";
             mysql_query($SQL) or die("Could not execute query");
		     header("Location: {$_SERVER['HTTP_REFERER']}");
	       }
	     else
		  {
	        mysql_query("INSERT INTO cart VALUES('$cid','$session','$id','$qnty')") or die("Could not execute query :D");
		    header("Location: {$_SERVER['HTTP_REFERER']}");
		  }
	}
	else
	{
		echo 'try again';
		header("Location: {$_SERVER['HTTP_REFERER']}");
		
	}
}
?>
