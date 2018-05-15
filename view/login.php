
<!DOCTYPE html>
<html lang="en" >
 
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../css/login.css">

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
      <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
      <script type="text/javascript" src="../js/home.js"></script>
      <link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

</head>
<body>
<div class="form">
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
        <div>
                <input type="hidden" value="+91" id="country_code"/>
                <input class="input" type="tel" onkeyup="checkInput(this)" id="phone_number"required name="phone_number" pattern="[0-9]{10}" maxlength="10" minlength="10" placeholder="phone number"/>
                 <button class="submit" id="submit" onclick="smsLogin();">Login via SMS</button>
        </div>
         <form id="login_success" method="post" action="../controller/login_controller.php">
                  <input id="csrf" type="hidden" name="csrf" />
                  <input id="code" type="hidden" name="code" />
         </form>

  </div>
</div>

</body>
</html>

