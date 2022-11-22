
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, scalable=no">
   <link rel="stylesheet" href="admin.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>ADMIN PAGE</title>
</head>
<body>

<div id="topmain">

<div class="top1">
   <p class="rn">CASH TRANSFER</p><img src="balance.png" id="mg">
   <p id="t1">0</p>   
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
</div><br>

</div>

<button onclick="adminlist()" id="list"><i class="fa fa-list-ul" id="ls"></i></button>

<div id="toplist">
<a href="adminjointaccount.php">COMBINE USER ACCOUNT</a><br>
<a href="adminallusers.php">ALL CONNECTED USERS</a><br>
<a href="allconnectedaccount.php">ALL CONNECTED ACCOUNTS</a><br>
<a href="editconnectedusers.php">EDIT CONNECTED USERS</a><br>
<a href="allconnectedaccount.php">EDIT CONNECTED ACCOUNTS</a><br>
<a href="moneytransfer.php">TRANSFER FUNDS</a><br>
   </div>

<div id="admindiv">
   <frameset cols="25%,75%">   
 <iframe src="adminleft.php" id="adminleft"></iframe>     
<iframe src="adminright.php" id="adminright" name="admincenter"></iframe>
  </frameset>
</div>

<script>


 var hide =  document.getElementById("toplist");
 var show =  document.getElementById("toplist");

 function adminlist(){
   if(hide.style.display === "none"){
       hide.style.display ="none";
       show.style.display ="block";
   }

   else {
      show.style.display = "block";
      hide.style.display = "none";
   }
}

</script>



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