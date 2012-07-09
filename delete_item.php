<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-admin.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-add.css"  rel="stylesheet" />
<title>Lull-a-buy | Delete-Item</title>
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
    Home >    Administration >   Delete Item
    </div>
    <table id="panel" border="0">
    <tr>
    <td>
     <?php   
     include('admin_content.php');
     ?>
     </td><td>
     <div id="admin_panel">
       <form action="welcome.php" method="post">
       <table>
            <tr><td>Item Name:</td><td><input type="text" name="iname" id="iname" /></td></tr>
            <tr><td>Item Number:</td><td><input type="text" name="inumber" id="inumber" /></td></tr>
            <tr><td></td><td><input type="button" name="Delete" value="Delete"/></td></tr>
            </table>
       </form>
     </div>
     </td>
     </tr>
     </table>
   </div>
     
  <?php   
  include('footer.php');
  ?>
</body>
</html>