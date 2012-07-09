<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-food.css"  rel="stylesheet" />
<link type="text/css" media="all" href="styles/about.css" rel="stylesheet"  />
<title>Lull-a-buy | My Account</title>
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
    Home >    My Account
    </div>
    <div id="panel">
     <div id="about_p">
  My Account
  </div>
  <div id="about_b">
  <?php
  
	 $usID=$_SESSION['userID'];

	  
  $sql_111="SELECT * FROM account WHERE user_ID ='$usID'";
  $sql_222=mysql_query($sql_111) or die("Could not execute query");
  $sql_333=mysql_fetch_assoc($sql_222);
  ?>
  <table border="0">
  <tr><td class="fin">Name :</td><td class="fin"><?php echo $sql_333['first_name']." ".$sql_333['last_name'];?></td></tr>
  <tr><td  class="fin" rowspan="4">Address :</td><td class="fin"><?php echo $sql_333['home_name'];?></td></tr>
  <tr><td  class="fin"><?php echo $sql_333['street'];?></td></tr>
  <tr><td class="fin"><?php echo $sql_333['city'];?></td></tr>
  <tr><td class="fin"><?php echo $sql_333['district'];?></td></tr>
  <tr><td  class="fin" rowspan="2">Contact Numbers:</td><td class="fin"><?php echo $sql_333['home_nu'];?></td></tr>
  <tr><td class="fin"><?php echo $sql_333['mobile_nu'];?></td></tr>
  </table>

  </div>
    </div>
   </div>
     
  <?php   
  include('footer.php');
  ?>
</body>
</html>