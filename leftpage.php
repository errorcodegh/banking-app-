<?php
session_start();
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

$id=$_SESSION['id'];
$sql="SELECT * FROM banktable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);

 ?>




<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="userpage.css">
   <title>THE LEFT PAGE</title>
</head>
<body>


       <div id="leftside">
         <h3><?php echo @$row["fullname"];?>'&nbspDASHBOARD</h3>
<p id="dash"><?php echo'<img height="100" width="100" style="border-radius:50%;" src="'.@$row['image'].'">'; ?></p>
<a href="accountprofile.php" target="rightopen">USER PROFILE</a><br>
<a href="useredit.php" target="rightopen">EDIT PROFILE</a><br>
<a href="account.php" target="rightopen">ACCOUNT DETAILS</a><br>
<a href="transferdetails.php" target="rightopen">STATEMENT OF ACCOUNT</a><br>
<a href="moneytransfer.php" target="rightopen">TRANSFER FUNDS</a><br>
<a href="logout.php" target="rightopen">LOG OUT</a><br>
</div>

   
</html>