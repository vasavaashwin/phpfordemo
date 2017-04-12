<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF-8">
    <title>MindMeld Application</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
   
</head>

<body>
<<<<<<< HEAD
<div class="page-header">
  <h1>Welcome <small>Please enter below details</small></h1>
</div>
	<div class="container">
<div class="row">

=======
	<div class="container">
>>>>>>> 975710eeffc6c4e742edadbaf6fc4c449cb11bdf
  <form class="form-horizontal" method = "POST">
   <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
<<<<<<< HEAD
      <input type="text" class="form-control" id="inputName3" placeholder="Name" id="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" id="email">
    </div>
  </div>
 <div class="form-group">
    <label for="inputNumber3" class="col-sm-2 control-label">Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNumber3" placeholder="Number" id="number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="register" class="btn btn-default">Let's Begin</button>
    </div>
  </div>
</form>
	</div>
	</div>
=======
      <input type="text" class="form-control" id="inputName3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
 <div class="form-group">
    <label for="inputNumber3" class="col-sm-2 control-label">Number</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputNumber3" placeholder="Number">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Let's Begin</button>
    </div>
  </div>
</form>
	</div>
>>>>>>> 975710eeffc6c4e742edadbaf6fc4c449cb11bdf
</body>
<script src="https://code.jquery.com/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function(){ 
 
 
 $("#register").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var number = $("#number").val();
if (name == '' || email == '' || number == '' ) {
alert("Please fill all fields...!!!!!!");
} else {
$.post("register.php", {
name: name,
email: email,
number: number
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
alert(data);
});
}
});
 
}); 
</script>
</html>
