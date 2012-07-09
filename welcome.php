<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
 <link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
 <link type="text/css"  media="all" href="styles/page_welcome.css"  rel="stylesheet" />
 <title>Lull-a-buy | Home</title>
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
    Home > Welcome
   </div>
   <div id="panel">
   <div id="welcome_msg">Welcome to Lull-a-buy</div>
   <?php 
   $gender=$_POST["gender"];
   $state=$_POST["state"];
   if(($gender=='male'))
   {
	   $des='Sir';
   }
   elseif(($gender=='female')&&($state=='single'))
   {
	   $des='Miss';
   }
   else
   {
	   $des='Madam';
   }
   echo "Dear ".$des.","."<br />";
   echo "Thanks for registering with Lull-a-buy <br />";
   echo "You are now a member of our site <br />";
   echo "Your contact info"." ".$_POST["fname"]." ".$_POST["lname"]."<br />";
   echo $_POST["hname"]." ".$_POST["street"]." ".$_POST["city"]."<br />"; 
   echo $_POST["hphone"]." ".$_POST["mobile"]."<br />";
   echo "Username : ".$_POST["remail"]."<br />";
   echo "Password : ".$_POST["rpw"]."<br />";
   echo "You can now sign in using the link below <br />";
	
   ?>
   <a href="log_in.php">Sign-in</a>
    </div>
   </div>
  <?php   
  include('footer.php');
  ?>
 </body>
</html>
