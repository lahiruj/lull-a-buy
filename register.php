<?php
include('db_connect.php');

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$state = $_POST['state'];
$hname = $_POST['hname'];
$street = $_POST['street'];
$city = $_POST['city'];
$district=$_POST['district'];
$hphone = $_POST['hphone'];
$mobile = $_POST['mobile'];
$remail = $_POST['remail'];
$pw = $_POST['rpw'];
$rpw=md5($pw);
$accid=$remail.time();
$sq2="INSERT INTO users (acc_id,username, password)
VALUES
('$accid','$remail','$rpw')";
if (!mysql_query($sq2,$conn))
  {
  die('Error: ' . mysql_error());
  }

$q_1=mysql_query("SELECT * from users WHERE username='$remail'");
$q_2=mysql_fetch_assoc($q_1);
$ans_1= $q_2['user_ID'];

$sql="INSERT INTO account (acc_id,user_ID, first_name, last_name, gender, civil_states, home_name, street, city, district, home_nu, mobile_nu)
VALUES
('$accid',$ans_1,'$fname','$lname',$gender,$state,'$hname','$street','$city','$district','$hphone','$mobile')";
if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }

header("Location:log_in.php");
?>
