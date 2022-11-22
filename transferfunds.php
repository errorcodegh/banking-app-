<?php 
include 'account.php';

$connection = mysqli_connect("localhost","root","","admintransfer");
$database = mysqli_select_db($connection,"admintransfer");

$transferfrom = $transferto = $useraccount = $amount = $date = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

 if(!empty($_POST["sendfrom"])){
 	$transferfrom = $_POST["sendfrom"];
 }


  if(!empty($_POST["sendto"])){
 	$transferto = $_POST["sendto"];
 }

 if(!empty($_POST["accountto"])){
 	$useraccount = $_POST["accountto"];
 }

  if(!empty($_POST["amount"])){
 	$amount = $_POST["amount"];
 }


 if(!empty($_POST["date"])){
 	$date = $_POST["date"];
 }


 if(!empty($_POST["msg"])){
 	$message = $_POST["msg"];
 }


$sql = "INSERT INTO transfertable(transfer_from,transfer_to,transfer_account,amount,datee,message) 
      VALUES('$transferfrom','$transferto','$useraccount','$amount','$date','$message')";
$result = mysqli_query($connection,$sql);

if(@$_POST["accountto"] === @$row["account_number"]){
$total = $_POST["amount"] + @$row["current_balance"];
 
}

}

?>

<?php

 $connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

if(isset($_POST["submit"])){
    $total = @$row["current_balance"] + $_POST["amount"];
       
$query="UPDATE banktable SET current_balance = '$total' WHERE id = '$id'";
                    $testresult = mysqli_query($connection,$query);             
                     } 

   

?>






<!DOCTYPE html>
<html>
<head>
	<title>ADMIN ACCOUNT TRANSFER</title>
	<meta name="viewport" content="width=device-width,scalable=no">
	<style>

		#user{
			display: none;
		}

		#transfer{
			margin: 5em 0px;
		  line-height: 2em;
		}

		#tr{
			width: 30em;
			height: 2em;
		}

		@media all and (max-width:  580px){
			#transfer{
		  font-size: 2em;
		  line-height:  3em;
		}

		#tr{
			font-size:  1em;
			width:  20em;
			height:  4em;
		}

		h3{
			width:  100vw;
			font-size: 2em;
			display: block;
		}

		}
		
	</style>
</head>

<body>

	<center>
		<h3>ADMIN CASH TRANSFER</h3>
	<div id="transfer">
		<form name="admintransfer" action="transferfunds.php" method="POST">
			<label for="from">TRANSFER FROM</label><br>
			<input type="text" name="sendfrom" id="tr" placeholder="ADMIN TRANSFER"><br>

			<label for="to">TRANSFER TO</label><br>
			<input type="text" name="sendto" id="tr" placeholder="TRANSFER TO USER NAME"><br>

			<label for="no">USER ACCOUNT NO</label><br>
			<input type="text" name="accountto" id="tr" placeholder="TRANSFER TO USER ACCOUNT"><br>

			<label for="amount">TRANSFER AMOUNT</label><br>
			<input type="text" name="amount" id="tr" placeholder="AMOUNT TO TRANSFER"><br>

			<label for="date">DATE</label><br>
			<input type="date" name="date" id="tr" placeholder="DATE OF TRANSFER"><br>

			<label for="msg">MESSAGE</label><br>
			<textarea name="msg" id="tr">TEXT HERE</textarea><br>
 
			<input type="submit" name="submit" id="tr" value="submit"><br>
		</form>
	</div>
</center>


	</body>
	</html>