<?php 
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

$fullname = $email  = $phone = $country = $city = $address = $zipcode = $accountname = $accountnum
= $accountpin = $bankname = $password = $balance = "";

$fullnamerr = $emailrr  = $phonerr = $countryrr = $cityrr = $addressrr = $zipcoderr = $accountnamerr = $accountnumrr = $accountpinrr = $banknamerr = $passwordrr = $balancerr = "";

if(isset($_POST["submit"]))   {

$file = $_FILES['image']['name'];

  if(!empty($_POST["fullname"])){
  	$fullname = $_POST["fullname"];
  }

  else {
  	$fullnamerr = "invalid";
  }

   if(!empty($_POST["email"])){
  	$email = $_POST["email"];
  }
  else{
  	$emailrr = "invalid";
  }

   if(!empty($_POST["phone"])){
  	$phone = $_POST["phone"];
  }
  else{
  	$phonerr = "invalid";
  }

   if(!empty($_POST["country"])){
  	$country = $_POST["country"];
  }
  else {
  	$countryrr = "invalid";
  }

   if(!empty($_POST["city"])){
  	$city = $_POST["city"];
  }
  else{
  	$cityrr = "error";
  }

   if(!empty($_POST["address"])){
  	$address = $_POST["address"];
  }
  else{
  	$addressrr = "error";
  }

   if(!empty($_POST["zipcode"])){
  	$zipcode = $_POST["zipcode"];
  }
  else {
  	$zipcoderr ="error";
  }

   if(!empty($_POST["accountname"])){
  	$accountname = $_POST["accountname"];
  }

  else{
  	$accountnamerr ="invalid";
  }

  if(!empty($_POST["accountnum"])){
  	$accountnum = $_POST["accountnum"];
  }
  else {
  	$accountnumrr ="error";
  }

  if(!empty($_POST["accountpin"])){
  	$accountpin = $_POST["accountpin"];
  }
  else{
  	$accountpinrr ="error";
  }

  if(!empty($_POST["bankname"])){
  	$bankname = $_POST["bankname"];
  }
  else{
  	$banknamerr ="error";
  }

  if(!empty($_POST["password"])){
  	$password = $_POST["password"];
  }
  else{
  $passwordrr ="error";
  }

  if(!empty($_POST["balance"])){
  	$balance = $_POST["balance"];
  }
  else{
  $balancerr ="error";
  }

$sql = "INSERT INTO banktable(fullname,email,phone,address,city,country,zipcode,account_name,account_number,account_pin,password,bankname,current_balance,image) 
VALUES('$fullname','$email','$phone','$address','$city','$country','$zipcode','$accountname','$accountnum','$accountpin','$password','$bankname','$balance','$file')";
$result = mysqli_query($connection,$sql);

if($result){
	move_uploaded_file($_FILES['image']['tmp_name'], "$file");
?>
<script>
	alert("data sent successfully...your accout number and pin will be provided by the admin");
	document.location='accountindex.php';
</script>

<?php
}

}


?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OPENING BANK ACCOUNT</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		
		*{
			margin: 0px;
			padding:  0px;
			border:  0px;
		}

		#bankreg{
			position:  absolute;
			display: flex;
			width: 100%;
			height: auto;
			background: cyan;
			
		}

		#userform,#accountform{
			width: 40%;
			height:  auto;
			padding: 1em 10em;
			line-height: 2em;
			text-align:  center;
		}

		#picture,#credit_card{
			position:  relative;
			background: silver;
			width: 100%;
			height:  80px;

		}

		.bk,.af{
			width:  250px;
			height: 30px;
		}

		label{
	   font-family: 'Poppins', sans-serif, 'arial';
       font-weight:  bold;
		}

		#mn{
			font-size: 50px;
			margin-top:  -10px;
		}

		#sub{
			font-weight: bold;
			font-family: comic sans ms;
			font-size: 1.5em;
			margin-top: 1em;
		}

		#cd {
			font-size: 10px;
		}

	</style>
</head>
<body>
<div id="bankreg">
<div id="userform">
   <div id="picture"><img src="man.png" id="mn"></div>
<form name="persona" method="POST" action="bankregister.php" enctype="multipart/form-data">
<label for="name">FULLNAME</label><br>
<input name="fullname" placeholder="enter name" class="bk" value="<?php echo $fullname; ?>"><br>
<span class="error">*<?php $fullnamerr; ?></span>

<label for="email">EMAIL</label><br>
<input name="email" placeholder="email here" class="bk" value="<?php echo $email;?>"><br>
<span class="error">*<?php $emailrr; ?></span>

<label for="telephone">PHONE</label><br>
<input name="phone" placeholder="phone" class="bk" value="<?php echo $phone;?>"><br>
<span class="error">*<?php $phonerr; ?></span>

<label for="city">CITY</label><br>
<input name="city" placeholder="enter city" class="bk" value="<?php echo $city;?>"><br>
<span class="error">*<?php $cityrr; ?></span>

<label for="country">COUNTRY</label><br>
<input name="country" placeholder="country" class="bk" value="<?php echo $country;?>"><br>
<span class="error">*<?php $countryrr; ?></span>

<label for="zipcode">ZIPCODE</label><br>
<input name="zipcode" placeholder="zipcode" class="bk" value="<?php echo $zipcode;?>"><br>
<span class="error">*<?php $zipcoderr; ?></span>

<label for="address">ADDRESS</label><br>
<input name="address" placeholder="address" class="bk" value="<?php echo $address;?>"><br>
<span class="error">*<?php $address; ?></span>
</div>


<div id="accountform">
  <div id="credit_card"><img src="card.png" id="cd"></div>
  <BR>
  <input type="file" name="image"><BR>

<label for="accountname">ACCOUNT NAME</label><br>
<input name="accountname" placeholder="account name" class="af" value="<?php echo $accountname;?>"><span class="error">*<?php $accountnamerr; ?></span><br>

<label for="accountnum">ACCOUNT NUMBER</label><br>
<input name="accountnum" placeholder="ADMIN WILL PROVIDE" class="af" value="<?php echo $accountnum;?>" disabled><?php $accountnumrr; ?></span><br>

<label for="pin">ACCOUNT PIN</label><br>
<input name="accountpin" placeholder="ADMIN WILL PROVIDE" class="af" value="<?php echo $accountpin;?>" disabled><?php $accountpinrr; ?></span><br>

<label for="password">PASSWORD</label><br>
<input name="password" placeholder="password" class="af" value="<?php echo $password;?>"><br>
<?php $passwordrr; ?></span>

<label for="bankname">BANK NAME</label><br>
<select name="bankname" class="af" value="<?php echo $bankname;?>">
	<option name="select option">SELECT OPTION</option>
	<option name="american express">AMERICAN EXPRESS</option>
	<option name="bank of america">BANK OF AMERICA</option>
	<option name="bank of africa">BANK OF AFRICA</option>
	<option name="pan african bank">PAN AFRICAN BANK</option>
	<option name="others">OTHERS</option>
</select><br><br>

<input type="numer" name="Balance" placeholder="account will recieve a default amount" class="af" disabled value="<?php echo $balance;?>"><br>
<input type="submit" name="submit" id="sub" value="submit">
</div>

</form>
</div>


</body>
</html>







