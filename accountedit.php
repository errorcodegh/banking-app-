
   <?php
   session_start();
   $connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");
$id=$_SESSION['id'];
$sql="SELECT * FROM banktable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$rows=mysqli_fetch_array($result);

      if(isset($_POST["update"])){
        $fullname = $_POST["fullname"];
        $accountpin = $_POST["accountpin"];
        $accountnum = $_POST["accountnum"];
       
$query = "UPDATE banktable SET fullname = '$fullname',account_pin = '$accountpin', account_number = '$accountnum' WHERE id = '$id'";
                    $result = mysqli_query($connection,$query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "accountprofile.php";
        </script>
        <?php
             }              
?> 

<!DOCTYPE html>
<html>
<head>
<style>
#hide{
display: block;
}  

#full{
  width:  200px;
  height: 30px;
  text-align:  center;
  margin-right:  100px;
}

select {
  width: 200px;
  height: 30px;
   margin-right:  200px;
}

#upd{
  width: 200px;
  height: 30px;
   margin-right:  300px;
}

</style>
</head>
<body>
  <div id="edit">
<form method="POST" action="accountedit.php">
<input name="fullname" id="full" value="<?php echo @$rows["fullname"]; ?>">
<input name="accountpin" class="af" value="<?php echo @$rows["accountpin"];?>">
<input name="accountnum" class="af" value="<?php echo @$rows["accountnum"];?>">

<input type="submit" id="upd" name="update" value="update"> 

</form>
</div>
</body>
</html>