  <?php
   session_start();
   $connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");
$id=$_SESSION['id'];
$sql="SELECT * FROM banktable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);

      if(isset($_POST["update"])){
        $accountname = $_POST["accountname"];
        $accountnum = $_POST["accountnum"];
        $accountpin = $_POST["accountpin"];
        $password = $_POST["password"];
        $bankname = $_POST["bankname"];
        $balance = $_POST["balance"];
        
$query = "UPDATE banktable SET account_name = '$accountname', account_number = '$accountnum', account_pin = '$accountpin', password = '$password', bankname = '$bankname', current_balance = '$balance' WHERE id = '$id'";
                    $result = mysqli_query($connection,$query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "allconnectedaccount.php";
        </script>
        <?php
             }              
?> 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,scalable=no">
<style>
#hide{
display: block;
}  

#full{
  width:  200px;
  height: 30px;
  text-align:  center;
}

select {
  width: 200px;
  height: 30px;
}

#upd{
  width: 200px;
  height: 30px;
}

#up{
 width:  100%;
 text-align:  center;
}

h2{
  font-family: 'Montserrat', sans-serif;
  font-weight:  bold;
  padding:  0px 5em;
}


@media all and (max-width:  580px){
  #up{
  margin: 2em auto;
  font-size: 3em;
}

#full{
  width:  10em;
  height: 60px;
  text-align:  center;
  font-size: 1em;
}

#upd{
  width: 200px;
  height: 30px;
  font-size: 0.5em;
}

}

</style>
</head>
<body>
  <div id="up">
    <h4>ADMIN EDIT ACCOUNTS</h4>
  <form action="adminaccountedit.php" method="POST">
    <lebel>account name</lebel><br>
<input name="accountname" id="full" value="<?php echo @$row["account_name"]; ?>"><br>

<lebel>account number</lebel><br>
<input name="accountnum" id="full" value="<?php echo @$row["account_number"]; ?>"><br>

<lebel>account pin</lebel><br>
<input name="accountpin" id="full" value="<?php echo @$row["account_pin"]; ?>"><br>

<lebel>password</lebel><br>
<input name="password" id="full" value="<?php echo @$row["password"]; ?>"><br>

<lebel>bank name</lebel><br>
<input name="bankname" id="full" value="<?php echo @$row["bankname"]; ?>"><br>

<lebel>account_balance</lebel><br>
<input name="balance" id="full" value="<?php echo @$row["current_balance"]; ?>"><br>
 <br>
<input type="submit" id="upd" name="update" value="update"> 

</form>
</div>
</body>
</html>