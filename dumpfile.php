<?php
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

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
    <h2>USER ACCOUNT DETAILS</h2>
<table>
  <tr>
  <th>MY IMAGE</th>
<td id="mm"><?php echo'<img height="100" width="100" style="border-radius:50%;" src="'.@$row['image'].'">'; ?></td>
   </tr>

  <tr>
  <th>ACCOUNT NUMBER</th>
  <td><?php echo @$row["account_number"];?></td>
</tr>

<tr>
  <th>ACCOUNT_NAME</th>
  <td><?php echo @$row["account_name"];?></td>
</tr>

<tr>
  <th>ACCOUNT PIN</th>
  <td><?php echo @$row["account_pin"];?></td>
</tr>

<tr>
  <th>BANK NAME</th>
  <td><?php echo @$row["bankname"];?></td>
</tr>

<tr>
  <th>PASSWORD</th>
  <td><?php echo @$row["password"];?></td>
</tr>

<tr>
  <th>CURRENT_BALANCE</th>
  <td><?php echo @$row["current_balance"];?></td>
</tr>






</table>
</div>
</body>
  </html>

