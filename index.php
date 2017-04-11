<?php include 'db.php';?>

<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF-8">
    <title>MindMeld Application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="stylesheet" href="style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   <link href="bootstrap-responsive.min.css" rel="stylesheet" media="screen">
</head>

<body>
<form method = "POST">
     <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
    
    <input type="text" name="name" placeholder="Name" />
    <input type="text" name="email" placeholder="E-mail" />
    <input type="text" name="number" placeholder="Number" />
    
    <input type="submit" name="signup_submit" value="Sign me up" />
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
 </form>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
