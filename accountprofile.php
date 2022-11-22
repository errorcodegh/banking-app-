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
 <head><title>USER PROFILE</title>
  <meta name="viewport" content="width=device-width, scalable=no">
<style>

h1 {
  display: none;
}
  table{
    position: absolute;
    top: 2em;
    left:  20em;
    width:  50%;
    height: 25em;
    border:  1px solid black;
    border-collapse: collapse;
    border-style: none;
    background: silver;
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
    top: 10em;
    left:  0px;
    width: 42em;
    height: 40em;
    border:  1px solid black;
    border-collapse: collapse;
    border-style: none;
    background: silver;
  }


  th,td{
    padding: 2px;
    text-align: left;
    style="color:black;
    text-shadow: 1px 1px 1px whitesmoke;
    font: 700 35px system-ui;

}

.glow-on-hover {
    left: 10em;
    top: 50em;
    width: 250px;
    height: 60px;
    border: none;
    position: absolute;
    border-radius: 10px;
    font: 700 20px system-ui;
}
h1 {
  display:  block;
  text-align: center;
  font: 700 40px system-ui;
}

}




</style>
 </head>
 <body>
  <div id="user">
    <h1>WELCOME <?php echo @$row["fullname"]; ?></h1>
<table>
  <tr>
  <th>MY IMAGE</th>
<td id="mm"><?php echo'<img height="100" width="100" style="border-radius:50%;" src="'.@$row['image'].'">'; ?></td>
   </tr>

  <tr>
  <th>FULLNAME</th>
  <td><?php echo @$row["fullname"];?></td>
</tr>

<tr>
  <th>EMAIL</th>
  <td><?php echo @$row["email"];?></td>
</tr>

<tr>
  <th>TELEPHONE</th>
  <td><?php echo @$row["phone"];?></td>
</tr>

<tr>
  <th>ADDRESS</th>
  <td><?php echo @$row["address"];?></td>
</tr>

<tr>
  <th>CITY</th>
  <td><?php echo @$row["city"];?></td>
</tr>

<tr>
  <th>COUNTRY</th>
  <td><?php echo @$row["country"];?></td>
</tr>

<tr>
  <th>ZIPCODE</th>
  <td><?php echo @$row["zipcode"];?></td>
</tr>



</table>
</div>
</body>
  </html>


