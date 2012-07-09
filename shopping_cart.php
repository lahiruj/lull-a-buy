<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/shopping_cart.css"  rel="stylesheet" />
<title>Lull-a-buy | Shopping Cart</title>
<?php
	include('db_connect.php');
?>
</head>

<body id="s_cart">

  <?php   
  include('header.php');   
  include('main_menu.php');
     ?>
     
  <div id="main_content">
    <div id="breadcrumb">
    Home >    Shopping Cart
    </div>
    <div id="panel">
      <table id="cart">
       <div id="cart_panel">
       <tr><td id="items" colspan="2">Items</td><td id="uprice">Unit price</td><td id="quantity">Quantity</td><td id="total" colspan="2">Total</td>
       </tr>
         <tr>
         
	   <?php
  $session=session_id();
 
  $SQL="SELECT 	pid,quantity FROM cart WHERE ses_id=\"$session\"";
  $result=mysql_query($SQL) or die("Could not execute query");
  $tot=0;
  $del_char=0;
   
  while ($data=mysql_fetch_array($result)) 
  {
  $var=$data['pid'];
  $quantity=$data['quantity'];
  
  
  $SQL="SELECT * FROM products WHERE pid=\"$var\"";
  $obtain=mysql_query($SQL) or die("Could not execute query");
  $more=mysql_fetch_assoc($obtain);
  
  $name=$more['pname'];
  
  $brand_id=$more['brand_id'];
  $brand_name=mysql_query("SELECT brand_name FROM brands WHERE brand_id='$brand_id'");
  $data_a=mysql_fetch_array($brand_name);
  
  $brand=$data_a['brand_name'];
  $image=$more['image_path'];
  $price=$more['price'];
  $sub_tot=$quantity*$price;
  
  ?>
  
  <td id="image"><img src="<?php echo $image;?>" /></td>
  <td id="description"><?php echo $brand;?><br /><?php echo $name;?><br /><?php echo $more['in_stock']. " more pcs. available";?></td>
  <td id="u_price">Rs : <?php echo $price;?></td>
  <td id="qty"><?php echo $quantity;?></td>
  <td id="tot">Rs : <?php echo $sub_tot;?></td>
  <td id="mod">
  <?php 
		  if($more['in_stock']>0){
			  ?>
  <a href="add.php?pid=<?php echo $var;?>"><img src="images/add_b.png" alt="Add" width="30" height="30"/></a><br />
  <?php
		  }
		  else{
		  echo "<br />";
		  }
		  ?>
  <a href="remove.php?pid=<?php echo $var;?>"><img src="images/remove_b.png" alt="Remove" width="30" height="30"/></a><br />
  <a href="delete.php?pid=<?php echo $var;?>"><img src="images/delete_b.png" alt="Delete" width="30" height="30"/></a></td></tr>
  
  <?php
  $tot=$tot+$sub_tot;
  }
  ($count==0)?include('report.php'):'';
  $t6="";
   if((isset($_SESSION['username']))&&($count!=0))
  {
  $t1 =$_SESSION['username'];
  $t2="SELECT * FROM users WHERE username='$t1'";
  $t21=mysql_query($t2) or die("Could not execute query");
  $t22=mysql_fetch_assoc($t21);
  $t23=$t22['acc_id'];
  $t3="SELECT * FROM account WHERE acc_id='$t23'";
  $t4=mysql_query($t3) or die("Could not execute query");
  $t5=mysql_fetch_assoc($t4);
  $t6=$t5['district'];
  $r1="SELECT * FROM delivery WHERE dis_name='$t6'";
  $r2=mysql_query($r1) or die("Could not execute query");
  $r3=mysql_fetch_assoc($r2);
  $del_char=$r3['del_charge'];
  $_SESSION['del_cha']=$del_char;
  }
  
  ?>
  
     </div>
     
      <tr><div id="footer_table"><td id="sub" colspan="4">Sub Total</td><td id="sub_tot" colspan="4">Rs : <?php echo $tot;?></td></tr>
      <tr><td id="delivery" colspan="4"><span>Delivery Charges</span><span id="del_char">  (Subject to change if address changed before payment)
      </span></td><td id="d_tot" colspan="4">Rs : <?php echo $del_char?><span id="del_dis">
	  <?php if((isset($_SESSION['username']))&&($count!=0)){echo "   ( To ".$t6." )";}?></span></td></tr>
      <tr><td id="final_tot" colspan="4">Total</td>
      <td id="f_tot" colspan="4">Rs : <?php echo $tot+$del_char;?></td></tr>
      </table>
      <div id="cart_button">
      <table>
      <tr>
      <td id="continue"><a href="baby_food.php">Continue Shopping</a></td>
      <td id="update"><a href="shopping_cart.php">Update Cart</a></td>
      <td id="update"><a href="empty_cart.php">Empty Cart</a></td>
      <td id="check"><a href="purchase_check.php">Checkout</a></td>
      </tr>
      </table>
      </div>
      </div>
     
  </div> 
  <?php   
  include('footer.php');
  ?>
</body>
</html>