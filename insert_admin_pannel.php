<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>

<title>Insert</title>
</head>

<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db("lull_a_buy_db", $con);

$b= mysql_query("SELECT * FROM categories WHERE cat_name='{$_POST['cname']}'");
$r=mysql_fetch_array($b);
echo $r;
$c= mysql_query("SELECT * FROM brands WHERE brand_name='{$_POST['bname']}'");
$d=mysql_fetch_array($b);
echo $d;
$image=$_FILES['image']['name'];
$temp=$_FILES['image']['tmp_name'];
$newname="'images/'".$temp;
$path=move_uploaded_file($_FILES['image']['tmp_name'],"images/products/baby food/".$image);
$i_path=mysql_real_escape_string("images/products/baby food/".$image);

$pname = $_POST['iname'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$descripton = $_POST['description'];

$sql="INSERT INTO products (pname, price, in_stock, Image_path, cat_id, brand_id, description)
VALUES
('$pname','$price','$quantity','$i_path','{$r['cat_id']}','{$d['brand_id']}','$descripton')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
header("Location:add_item.php");
?>
</body>
</html>