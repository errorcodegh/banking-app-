<?php 
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
    <h2>All connected users!!!</h2>
    <tr>

            <th>USER_ID</th>
            <th>FULLNAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>CITY</th>
            <th>COUNTRY</th>
            <th>ZIPCODE</th>
            <th>ADDRESS</th>
            <th>IMAGE</th>
          </tr>
        
    </tr>

   <?php
     
     $sql = "SELECT * FROM banktable;";
     $result = mysqli_query($connection,$sql);
     $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
          while ($row=mysqli_fetch_assoc($result)){
    
        
 echo "<tr>";

                   echo "<td>".$row["id"]. "</td>";
                   echo "<td>".$row["fullname"]."</td>";
                   echo "<td>".$row["email"]."</td>";
                   echo "<td>".$row["phone"]."</td>";
                   echo "<td>" .$row["city"]. "</td>";
                   echo "<td>" .$row["country"]. "</td>"; 
                   echo "<td>" .$row["zipcode"]. "</td>";
                   echo "<td>" .$row["address"]. "</td>";
                   echo "<td>" .$row["image"]. "</td>";
                  echo "</tr>";

     }

        }




  ?>

    </table>
  </div>
  </body>
  </html>
  