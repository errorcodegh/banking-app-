
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
   <meta name="viewport" content="width=device-width, scalable=no">
   <link rel="stylesheet" href="userpage.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>THE USER'S PAGE</title>
</head>
<body>

<div id="topmain">

<div class="top1">
   <p class="rn">Account Balance</p><img src="balance.png" id="mg">
   <p id="t1">$<?php echo @$row["current_balance"]; ?></p>   
</div>

<div class="top2">
   <p class="rn">Cash Transfered</p><img src="transaction.png" id="mg">
   <p id="t2">0</p>   
</div>

<div class="top3">
   <p class="rn">Cash Debut</p><img src="debut.png" id="mg">
   <p id="t3">0</p>   
</div>

<div class="top4">
   <p class="rn">Transaction failed</p><img src="failed.png" id="mg">
   <p id="t4">0</p>  
</div>
</div>


<div id="mobileside">
         <h2><?php echo @$row["fullname"];?>'&nbspDASHBOARD</h2>
<p id="dash1"><?php echo'<img height="100%" width="100%" style="border-radius:50%;" src="'.@$row['image'].'">'; ?></p>
<a href="accountprofile.php">USER PROFILE</a><br>
<a href="useredit.php">EDIT PROFILE</a><br>
<a href="account.php">ACCOUNT DETAILS</a><br>
<a href="#">STATEMENT OF ACCOUNT</a><br>
<a href="moneytransfer.php">TRANSFER FUNDS</a><br>
<a href="logout.php">LOG OUT</a><br>
</div>



<div id="alldiv">
     <frameset cols="19%,78%">
      
       <iframe src="leftpage.php" id="leftside">
       </iframe>
      
        <iframe src="rightpage.php" id="rightside" name="rightopen">
        </iframe>

    </frameset>
</div>


<footer class="footer-distributed">

         <div class="footer-left">

            <h3>Developed By<span>CodeTech</span></h3>

            <p class="footer-links">
               <a href="#" class="link-1">Home</a>
               
               <a href="#">Blog</a>
            
               <a href="#">About</a>
               
               <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">American State Bank © 2015</p>
         </div>

         <div class="footer-center">

            <div>
               <i class="fa fa-map-marker"></i>
               <p><span>BA street ashiaman</span> greater accra, ghana</p>
            </div>

            <div>
               <i class="fa fa-phone"></i>
               <p>0268343400</p>
            </div>

            <div>
               <i class="fa fa-envelope"></i>
               <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

         </div>

         <div class="footer-right">

            <p class="footer-company-about">
               <span>About the company</span>
               we will help you with all your online transaction with minimum charges and 
               maximum security!!!!
            </p>

            <div class="footer-icons">

               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
               <a href="#"><i class="fa fa-github"></i></a>

            </div>

         </div>

      </footer>

</body>
</html>