<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>

<title>Delete</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("lull_a_buy_db", $con);

$pname = $_POST['iname'];
$pid = $_POST['inumber'];

$sql = "DELETE FROM products WHERE pname ='$pname' && pid='$pid'" ;

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record deleted";

mysql_close($con);
header("Location:delete_item.php");
?>
</body>
</html>