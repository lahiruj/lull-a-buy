<?php
	include('db_connect.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-food.css"  rel="stylesheet" />
<title>Lull-a-buy | Baby Food</title>
</head>

<body>

  <?php   
  include('header.php');
  ?>
  <?php   
  include('main_menu.php');
  ?>
   
  <div id="main_content">
    <div id="breadcrumb">
    Home >    Baby Food
    </div>
    <div id="panel">
     <div id="food_panel">
       <div>
       <table id="food">
       <tr><td><img src="images/products/baby food/firstPosition.gif" /></td>
        <?php
		$count=0;
        $result=mysql_query("SELECT * FROM products WHERE cat_id=2");
		
         while ($data=mysql_fetch_array($result))
		 {
          $brand_id=$data['brand_id'];
		  $brand_name=mysql_query("SELECT brand_name FROM brands WHERE brand_id='$brand_id'");
		  $data_a=mysql_fetch_array($brand_name);
		  ?>
         <td id="f1"><img src="<?php echo $data['image_path'];?>" /><br /><br />
         <a href="index.php"><?php echo $data_a['brand_name']; ?><br />
		 <?php echo $data['description'];?><br /><?php echo $data['pname'];?></a><br />
         <?php 
		  if($data['in_stock']>0){
		  ?>
          <div id="in_stock"><?php echo $data['in_stock']. " pcs. Available";?></div><br />
          <a href="cart.php?pid=<?php echo $data['pid']?>"><img src="images/add_to_cart.png" alt="Add to cart" width="101" height="30"/></a><br /><br />
          <?php
		  }
		  else{
		  ?>
		  <div id="out_stock"><?php echo "Out of stock!";?></div><br /><br /><br />
          <?php
		  }
		  ?>
         <font size="+1">Rs :&nbsp;<?php echo $data['price'];?></font></td>
         
         
        <?php
		  $count=$count+1;
		     if(($count==3)||(($count-3)%4==0))
		     {
				 ?>
				</tr>
                <?php 
		     }
		     else
		     {
		     }
          }
         ?>
         
         </table>
       </div>
     </div>
     
    </div>
   </div>
     
  <?php   
  include('footer.php');
  ?>
</body>
</html>