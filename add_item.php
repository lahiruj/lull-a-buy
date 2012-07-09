<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css"  media="all" href="styles/main.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/menu.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-admin.css"  rel="stylesheet" />
<link type="text/css"  media="all" href="styles/page-add.css"  rel="stylesheet" />
<title>Lull-a-buy | Add-Item</title>
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
    Home >    Administration >   Add Item
    </div>
    <table id="panel" border="0">
    <tr>
    <td>
     <?php   
     include('admin_content.php');
     ?>
     </td><td>
     <div id="admin_panel">
       <form action="insert_admin_pannel.php" method="post" enctype="multipart/form-data">
       <table>
            <tr><td>Category Name:</td><td><select type="text" name="cname" id="cname"><option>Food</option>
            <option>Garments</option><option>Toys</option></select></td></tr>
            <tr><td>Brand Name:</td><td><select type="text" name="bname" id="bname" ><option>Earth's Best</option>
            <option>Plum Organics</option><option>Rubies</option><option>Disguies</option><option>Carter's</option>
            <option>Zutano</option><option>Mega Bloks</option><option>kettler</option><option>VTech</option><option>KidCo</option>
            <option>Munchkin</option><option>Fisher Price</option><option>Haba</option><option>Ravensburger</option></select></td></tr>
            <tr><td>Item Name:</td><td><input type="text" name="iname" id="iname" /></td></tr>
            <tr><td>Description:</td><td><input type="text" name="description" id="description" /></td></tr>
            <tr><td>Quantity:</td><td><input type="text" name="quantity" id="quantity" /></td></tr>
            <tr><td>Price Rs:</td><td><input type="text" name="price" id="price" /></td></tr>
            <tr><td>Image :</td><td><input type="file" name="image" id="image" /></td></tr>
            <tr><td><input type="reset" /></td><td><input type="submit"/></td></tr>
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