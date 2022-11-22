  <?php
   session_start();
   $connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");
$id=$_SESSION['id'];
$sql="SELECT * FROM banktable WHERE id='$id'";
$result=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($result);

      if(isset($_POST["update"])){
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $city = $_POST["city"];
        $country = $_POST["country"];
        $zipcode = $_POST["zipcode"];
        $address = $_POST["address"];

       
       
$query = "UPDATE banktable SET fullname = '$fullname', email = '$email', phone = '$phone', city = '$city', country = '$country', zipcode = '$zipcode', address = '$address' WHERE id = '$id'";
                    $result = mysqli_query($connection,$query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "editconnectedusers.php";
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
  margin: 10em 15em;
  padding: 4em;
}

h2{
  font-family: 'Montserrat', sans-serif;
  font-weight:  bold;
  padding:  0px 5em;
}


@media all and (max-width: 580px){

#up{
   margin:  1em auto;
  width:  100%;
  height: 100%;
  line-height:  2em;
  font-size:  3em;
}

#full{
  width: 100%;
  height:  3em;
  font-size: 0.6em;
}

#upd{
  font-size: 0.6em;
}

h4{
  text-align:  center;
  display:  block;
  font-size:  0.9em;

}

}

</style>
</head>
<body>

  <div id="up">
    <h4>ADMIN EDIT USER</h4>
  <form action="adminediter.php" method="POST">
<input name="fullname" id="full" value="<?php echo @$row["fullname"]; ?>">
<input name="email" id="full" value="<?php echo @$row["email"]; ?>">
<input name="phone" id="full" value="<?php echo @$row["phone"]; ?>">
<input name="city" id="full" value="<?php echo @$row["city"]; ?>">
<input name="country" id="full" value="<?php echo @$row["country"]; ?>">
<input name="zipcode" id="full" value="<?php echo @$row["zipcode"]; ?>">
<input name="address" id="full" value="<?php echo @$row["address"]; ?>"><br>
<input type="submit" id="upd" name="update" value="update"> 

</form>
</div>
</body>
</html>