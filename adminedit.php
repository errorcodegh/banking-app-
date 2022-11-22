 <?php
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

 if(isset($_POST["update"])){
        $fullname = $_POST["fullname"];
        $accountnum = $_POST["accountnum"];
        $accountpin = $_POST["accountpin"];
        
       
$query = "UPDATE banktable SET fullname = '$fullname',account_number = '$accountnum', account_pin = '$accountpin' WHERE id = '$id'";
                    $result = mysqli_query($connection,$query);
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "accountprofile.php";
        </script>
        <?php
             }              
?> 

