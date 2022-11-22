
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
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $country = $_POST["country"];
        $city = $_POST["city"];
        $zipcode = $_POST["zipcode"];
       
       
$query = "UPDATE banktable SET fullname = '$fullname', email = '$email', phone = '$phone', address = '$address', country = '$country', city = '$city', zipcode = '$zipcode' WHERE id = '$id'";
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
<title>THE EDIT PAGE</title>
<meta name="viewport" content="width=device-width, scalable=no">
<head>
<style>

#upd{
  position: absolute;
  top: 25 em;
  left: 25em;
  font-size: 20px;
}

h1{
  text-align:  center;
  font: 500 30px system-ui;

}

#full{
  width:  20em;
  height: 30px;
  text-align:  center;
  margin-right:  100px;
  border:  none;
}

 table{
    position: absolute;
    margin:  5em 20em;
    left:  0px;
    width:  50%;
    border:  1px solid black;
    border-collapse: collapse;
    border-style: none;
    background-color: silver;
  }

  th,td{
    padding: 2px;
    text-align: left;
    style="color:black;
     text-shadow: 1px 1px 1px whitesmoke;
      font: 300 20px system-ui;
  }

  td{
      font: 700 20px system-ui;
  }

  tr:nth-child(even) {
  background-color: #D6EEEE;
}

@media all and (max-width: 580px){
 
  table{
    position: absolute;
    top:  10em;
    margin:  0em;
    height: 40em;
    left:  0px;
    width:  100%;
    border:  1px solid black;
    border-collapse: collapse;
    border-style: none;
    background-color: silver;
  }

  th,td{
    padding: 2px;
    text-align: left;
    text-shadow: 1px 1px 1px whitesmoke;
    font: 300 30px system-ui;
  }

  #full{
    font-size:  30px;
    width: 10em;
  }

  #upd{
  position:  absolute;
  top: 45em;
  left:  10em;
  font-weight:  bold;
}

h1{
  text-align:  center;
  font: 500 30px system-ui;

}

}

</style>
</head>
<body>
  <div id="edit">
    <h1>USER EDIT PROFILE</h1>
<form method="POST" action="useredit.php">
  <table>
    <tr>
<th>FULLNAME</th>
<td><input name="fullname" id="full" value="<?php echo @$rows["fullname"]; ?>"></td>
</tr>

  <tr>
<th>EMAIL</th>
<td><input name="email" id="full" value="<?php echo @$rows["email"]; ?>"></td>
</tr>

<tr>
  <th>PHONE</th>
  <td><input name="phone" id="full" value="<?php echo @$rows["phone"]; ?>"></td>
</tr>

<tr>
  <th>ADDRESS</th>
  <td><input name="address" id="full" value="<?php echo @$rows["address"]; ?>"></td>
</tr>

<tr>
  <th>COUNTRY</th>
  <td><input name="country" id="full" value="<?php echo @$rows["country"]; ?>"></td>
</tr>

<tr>
  <th>CITY</th>
  <td><input name="city" id="full" value="<?php echo @$rows["city"]; ?>"></td>
</tr>

<tr>
  <th>ZIPCODE</th>
  <td><input name="zipcode" id="full" value="<?php echo @$rows["zipcode"]; ?>"></td>
</tr>

<input type="submit" id="upd" name="update"  value="update"> 

</table>
</form>
</div>
</body>
</html>