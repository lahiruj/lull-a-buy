<?php 

session_start();
include('db_connect.php');
$session=session_id();

if(isset($_GET['pid']))
{
	$id = (int) $_GET['pid'];

	if(!empty($id))
	{
	   $SQL="UPDATE products SET in_stock=in_stock-1 WHERE pid='$id'";
       mysql_query($SQL) or die("Could not execute query");
	   $SQL="UPDATE cart SET quantity=quantity+1 WHERE pid=\"$id\" AND ses_id=\"$session\"";
       $result=mysql_query($SQL) or die("Could not execute query");
	   header("Location:shopping_cart.php");
	}
	else
	{
		echo 'try again';
		header("Location:shopping_cart.php");
	}
}