<?php 
include 'adminaccountindex.php';
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

?>


<!DOCTYPE html>
<html>
<head><title>admin logging</title>
<meta name="viewport" content="width=device-width,  scalable=no">
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100vw;
  height: 5em;
 
}

       td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 1em;
}

h1 {
  color: gold;
  display: block;
}

#add{
  margin-top:  5em;
}

h2{
  text-align:  center;
  font-family: 'Montserrat', sans-serif;
}

@media all and (max-width:  580px){
  table{
    width:  100%;
    height:  auto;
    font-size: 3em;
  }

}

</style>
</head>

<body>
  <div id="add">
  <table>
    <h2>All connected accounts!!!</h2>
    <tr>

            <th>ACCOUNT NAME</th>
            <th>ACCOUNT NUMBER</th>
            <th>ACCOUNT PIN</th>
            <th>PASSWORD</th>
            <th>BANK NAME</th>
            <th>CURRENT BALANCE</th>
          </tr>
        
    </tr>

   <?php
     
     $sql = "SELECT * FROM banktable;";
     $result = mysqli_query($connection,$sql);
     $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
          while ($row=mysqli_fetch_assoc($result)){
    
        
 echo "<tr>";

                   echo "<td>".$row["account_name"]. "</td>";
                   echo "<td>".$row["account_number"]."</td>";
                   echo "<td>".$row["account_pin"]."</td>";
                   echo "<td>".$row["password"]."</td>";
                   echo "<td>" .$row["bankname"]. "</td>";
                   echo "<td>" .$row["current_balance"]. "</td>";
                  echo "</tr>";

     }

        }




  ?>

    </table>
  </div>
  </body>
  </html>
  