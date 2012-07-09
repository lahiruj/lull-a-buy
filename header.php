<?php 
include('db_connect.php');
?>
<div id="allcontent">
  
   <div id="top_header">
     <div id="welcome"> 
	  <?php 
	       session_start();
		   if(isset($_SESSION['username']))
		   {
	       echo ("Welcome, ".$_SESSION['username']."!"."</br>");
		   }
		   ?> 
              
     </div>
     <div id="header_menu">
        <div id="home" class="header_menu"><a href="index.php">HOME</a> |
        </div>
        <div id="contact_us" class="header_menu"><a href="contact_us.php">CONTACT US</a> |
        </div>
        <div id="about" class="header_menu"><a href="about.php">ABOUT</a> |
        </div>
        <?php
		if(!isset($_SESSION['username']))
		   {
		?>
        <div id="register" class="header_menu"><a href="log_in.php">REGISTER</a> |
        </div>
        <?php
		   }
		   else
		   {  
		      $user_n=$_SESSION['username'];
		      $obtain=mysql_query("SELECT * FROM users WHERE username='$user_n'") or die("Could not execute query");
              
			  $more=mysql_fetch_assoc($obtain);
			  
		?>
        <div id="register" class="header_menu"><a href="<?php $j=($more['user_level']==1)?"page_admin":"account"; echo $j;?>.php">ACCOUNT</a> |
        </div>
        <?php
		   }
		?>
		<?php
		if(!isset($_SESSION['username']))
		   {
		?>
        <div id="sign_in" class="header_menu"><a href="log_in.php">SIGN-IN</a> 
        </div>
		<?php
		   }
		   else
		   {
		?>
        <div id="sign_in" class="header_menu"><a href="log_out.php">LOG-OUT</a> 
        </div>
        <?php
		   }
		?>
        
     </div>
     
     <?php
  $session=session_id();
  
  $SQL="SELECT * FROM cart WHERE ses_id='$session'";
  $result=mysql_query($SQL) or die("Could not execute query");
  $tot=0;
  $count=0;
  while ($data=mysql_fetch_array($result)) 
  {
  $var=$data['pid'];
  $quantity=$data['quantity'];
  
  
  
  $SQL="SELECT * FROM products WHERE pid=\"$var\"";
  $obtain=mysql_query($SQL) or die("Could not execute query");
  $more=mysql_fetch_assoc($obtain);
  $price=$more['price'];
  $sub_tot=$quantity*$price;
  $tot=$tot+$sub_tot;
  $count=$count+$quantity;
  }
  ?>
     
     <div id="shopping_cart">
       <a href="shopping_cart.php"><div id="cart_img"></div></a>
       <div id="cart_item_quantity">
       <?php echo $count;?> Item<?php $j=($count==1)?'':'s'; echo $j;?>
        </div>
       <div id="cart_value">
        Rs. <?php 
		    $del_c=0;
		    if((isset($_SESSION['del_cha']))&&($count!=0)){
			$del_c=$_SESSION['del_cha'];
			}
			echo $tot+$del_c;
			?>
       </div>
       <a href="purchase_check.php"><div id="checkout">
       </div></a>
     </div>
     <div id="arrow">
     </div>
     
     <div id="search">
      <div id="search_area"></div>
      <div id="magnify"><a href="index.php"></a></div>
     </div>
     <div id="title">
       
     </div>
   </div>