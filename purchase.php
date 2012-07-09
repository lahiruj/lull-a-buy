<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page_shipping.css"  rel="stylesheet" />
<script language="javascript" src="js/validate_form.js">
</script>
<title>Lull-a-buy | Purchase</title>
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
    Home >    Purchase
    </div>
    <div id="panel">
     <div id="log_in">
         <div id="heading_1">Your Order</div>
           <?php   
           
           ?>
           <table border="0">
           <tr><td class="sfi" colspan="2">
           <?php echo $count;?> Item<?php $j=($count==1)?'':'s'; echo $j;?></td></tr>
           <tr><td class="sfi" >Sub Total</td><td class="sfi" ><?php echo $tot;?></td></tr>
           <tr><td class="sfi" >Delivery Charges</td><td class="sfi" ><?php echo $del_c;?></td></tr>
           <tr><td class="sfi" >Total</td><td class="sfi" ><?php echo $tot+$del_c;?></td></tr>
           </table>
       </div>
     <div id="reg_form">
      <div id="heading_2">Shipping Information</div>
         <?php   
          include('shipping_info.php');
         ?>
         </div>
      </div>
     </div>
  
  <?php   
  include('footer.php');
  ?>
</body>
</html>