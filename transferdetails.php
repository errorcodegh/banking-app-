<?php 
$connection = mysqli_connect("localhost","root","","moneytransfer");
$database = mysqli_select_db($connection,"moneytransfer");

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
  table {
    font-size: 4em;
  }

  h2{
    font-size: 3em;
    text-align:  center;
  }
}

</style>
</head>

<body>
  <div id="add">
  <table>
    <h2>ADMIN STATEMENT OF ACCOUNT</h2>
    <tr>

            <th>USER_ID</th>
            <th>transfer_from</th>
            <th>transfer_to</th>
            <th>transfer_account</th>
            <th>amount</th>
            <th>datee</th>
            <th>message</th>
         </tr>
        
    </tr>

   <?php
     
     $sql = "SELECT * FROM transfertable";
     $result = mysqli_query($connection,$sql);
     $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
          while ($row=mysqli_fetch_assoc($result)){
    
        
 echo "<tr>";

                   echo "<td>".$row["user_id"]. "</td>";
                   echo "<td>".$row["transfer_from"]."</td>";
                   echo "<td>".$row["transfer_to"]."</td>";
                   echo "<td>".$row["account_to"]."</td>";
                   echo "<td>" .$row["amount"]. "</td>";
                   echo "<td>" .$row["datee"]. "</td>"; 
                   echo "<td>" .$row["message"]. "</td>";
                    }

        }



  ?>

    </table>
  </div>
  </body>
  </html>