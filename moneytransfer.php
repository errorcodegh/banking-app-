<?php 
include 'account.php';
$connection = mysqli_connect("localhost","root","","moneytransfer");
$database = mysqli_select_db($connection,"moneytransfer");

$from = $to = $account = $amount = $date = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty($_POST["sendfrom"])){
       $from = $_POST["sendfrom"];
	}

	if(!empty($_POST["sendto"])){
       $to = $_POST["sendto"];
	}

	if(!empty($_POST["accountto"])){
       $account = $_POST["accountto"];
	}

	if(!empty($_POST["amount"])){
       $amount = $_POST["amount"];
	}

	if(!empty($_POST["date"])){
       $date = $_POST["date"];
	}

	if(!empty($_POST["message"])){
       $message = $_POST["message"];
	}

$sql = "INSERT INTO transfertable(transfer_from,transfer_to,account_to,amount,datee,message) VALUES('$from','$to','$account','$amount','$date','$message')";
$result = mysqli_query($connection,$sql);

if(@$_POST["accountto"] === @$row["account_number"]){
   $total = $_POST["amount"] + @$row["current_balance"];

}

}

?>

<?php
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

if(@$_POST["accountto"] === @$row["account_number"]){
   @$total = $_POST["amount"] + @$row["current_balance"];

$query="UPDATE banktable SET current_balance = '$total' WHERE account_number = '$account'";
                    $testresult = mysqli_query($connection,$query);             
                

}

?>


<!DOCTYPE html>
<html>
<head><title>MONEY TRANSFER</title>
	<meta name="viewport" content="width=device-width,scalable=no">
<style>

#user{
	display: none;
}

#money {
	line-height:  3em;
	background: whitesmoke;
}

input {
	width:  20em;
	height: 30px;
}

label{
	 font: 700 20px system-ui;
}

@media all and (max-width:  580px){
	#money {
	font-size: 2em;
}

}

</style>
</head>
<body>
	<center>
	<div id="money">
   <form name="transfer" method="POST" action="moneytransfer.php">
   	<label for="name">TRANSFER FROM</label><br>
   	<input type="name" name="sendfrom" placeholder="sending by admin"><br>

   	<label for="name">TRANSFER TO</label><br>
   	<input type="name" name="sendto" placeholder="reciepient name here"><br>

   	<label for="name">ACCOUNT TO</label><br>
   	<input type="name" name="accountto" placeholder="account to transfer"><br>

   	<label for="name">AMOUNT</label><br>
   	<input type="name" name="amount" placeholder="amount to transfer"><br>

   	<label for="name">DATE</label><br>
   	<input type="date" name="date" placeholder="date of transfer"><br>

   	<label for="name">message</label><br>
   	<input type="text" name="message" placeholder="transfer message"><br>
       

   	<input type="submit" name="submit" value="submit">
   </form>
</div>
</center>
</body>
</html>