<?php
session_start();
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

if(isset($_POST["submit"])){
	$accountname = $_POST["accountname"];

$sql = "SELECT * FROM banktable WHERE account_name = '$accountname'";
$result=mysqli_query($connection,$sql);
$num_rows=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$_SESSION["id"]=$row['id'];

if ($num_rows > 0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='adminaccountedit.php';
    </script>
    <?php
}
}
      ?>

      <!DOCTYPE html>
      <html>
      <head><title>admin search</title>
        <meta name="viewport" content="width=device-width,scalable=no">
        <style>
             .form{           
                text-align:  center;

             }

             .ad{
                width:  30em;
                height: 2em;
                text-align: center;
                margin-bottom: 2em;
             }

             @media all and (max-width:  580px){
                .form{
                    font-size:  3em;
                }

                .ad{
                    width:  10em;
                    height:  1.4em;
                    font-size:  2em;
                }

                .but{
                    font-size:  2em;
                }
             }


        </style>
      </head>
      <body>
      	  

    
    <div class="form">
         <form name="test" method="POST" action="adminaccountindex.php">
            <p class="subscribe__copy">Approve users by searching each column name!!!</p>
        <input type="text" class="ad" name="accountname" placeholder="Enter your tracking no here" />
        <button type="submit" name="submit" value="submit" class="but">SEARCH</button>
    </div></form>
 

      </body>
      </html>