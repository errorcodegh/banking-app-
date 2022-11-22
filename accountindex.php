<?php
session_start();
$connection = mysqli_connect("localhost","root","","bankaccount");
$database = mysqli_select_db($connection,"bankaccount");

if(isset($_POST["submit"])){
    $fullname = $_POST["fullname"];

$sql = "SELECT * FROM banktable WHERE fullname = '$fullname'";
$result=mysqli_query($connection,$sql);
$num_rows=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$_SESSION["id"]=$row['id'];

if ($num_rows > 0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='userpage.php';
    </script>
    <?php
}
}
      ?>

      <!DOCTYPE html>
      <html>
      <head><title>THE LOG IN PAGE</title>
        <meta name="viewport" content="width=device-width, scalable=no">
<style>

@import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap');

body {
    background: #CAD3DB;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    font-family: 'Mulish', sans-serif;
}

.subscribe {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: white;
    width: 945px;
    height: 474px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(61, 159, 255, 0.2)
}


.subscribe__title {
    font-weight: bold;
    font-size: 26px;
    margin-bottom: 18px;
}

.subscribe__copy {
    max-width: 450px;
    text-align: center;
    margin-bottom: 53px;
    line-height: 1.5;
}

.form {
    margin-bottom: 25px;
}

.form__email {
    padding: 20px 25px;
    border-radius: 5px;
    border: 1px solid #CAD3DB;
    width: 431px;
    font-size: 18px;
    color: #0F121F;
}

.form__email:focus {
    outline: 1px solid #3D9FFF;
}

.form__button {
    background: #3D9FFF;
    padding: 10px;
    border: none;
    width: 244px;
    height: 65px;
    border-radius: 5px;
    font-size: 18px;
    color: white;
    box-shadow: 0 4px 20px rgba(61, 159, 255, 0.7);
}

.form__button:hover {
    box-shadow: 0 10px 20px rgba(61, 159, 255, 0.7);
}

.notice {
    width: 345px;
}



@media all and (max-width: 580px){

.subscribe {
    position:  absolute;
    margin-left: 0px;
    margin-right: 0px;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: white;
    width: 100vw;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(61, 159, 255, 0.2)
}


.subscribe__title {
    font-weight: bold;
    font-size: 2em;
    margin-bottom: 18px;
}

.form__email {
    padding: 20px 0px;
    border-radius: 5px;
    border: 1px solid #CAD3DB;
    width: 100%;
    font-size: 18px;
    color: #0F121F;
}

.form__button {
    background: #3D9FFF;
    padding: 10px;
    border: none;
    width: 10em;
    height: 65px;
    border-radius: 5px;
    font-size: 18px;
    color: white;
    box-shadow: 0 4px 20px rgba(61, 159, 255, 0.7);
}

 




}


</style>
      </head>
      <body>
          

<div class="subscribe">
    <h2 class="subscribe__title">WELCOME TO AMERICA STATE BANK!!!</h2>
    <p class="subscribe__copy">LOG IN WITH YOUR FULLNAME.We promise to keep your privacy</p>
    <div class="form">
         <form name="test" method="POST" action="accountindex.php">
        <input type="text" class="form__email" name="fullname" placeholder="Enter your tracking no here" />
        <button type="submit" name="submit" value="submit" class="form__button">submit</button>
    </div></form>
    <div class="notice">
        <input type="checkbox">
        <span class="notice__copy">I agree to terms and condition of this webpage.</span>
    </div>
</div>

      </body>
      </html>


