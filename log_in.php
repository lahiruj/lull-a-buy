<?php
include('db_connect.php');
if(!isset($_POST['submit']))
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page_login.css"  rel="stylesheet" />
<script language="javascript" src="js/validate_form.js">
</script>
<title>Lull-a-buy | Sign-in</title>
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
    Home >    Sign In
    </div>
    <div id="panel">
     <div id="log_in">
         <div id="heading_1">Returning Customers</div>
           <?php   
           include('sign_in.php');
           ?>
       </div>
     <div id="reg_form">
      <div id="heading_2">New Customers</div>
         <?php   
          include('registration.php');
         ?>
         </div>
      </div>
     </div>
   <?php   
  include('footer.php');
  ?>
<?php
}
	else
{
    $username=$_POST['username'];
    $assword=$_POST['password'];
	$password=md5($assword);  
    $SQL="SELECT * FROM users WHERE username=\"$username\" AND password=\"$password\" ";
    $result=mysql_query($SQL) or die("Could not execute query");
	$res2=mysql_fetch_assoc($result);
    $match=mysql_num_rows($result);
	
        if($match!=0){
			 session_start();
			 $_SESSION['username']=$username;
			 $_SESSION['userID']=$res2['user_ID'];
			 $check=mysql_fetch_assoc($result);
			  if($check['user_level']==1)
			   {
				 header("Location:page_admin.php"); 
			   }
			  else
			   {
                 header("Location:index.php");
			   }
            }
        else{
             $msg="Wrong username or password!";
            }
     echo $msg;
}

?>
</body>
</html>