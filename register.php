<?php
echo '<h2>VCAP_SERVICE Environment variable</h2>';
echo "----------------------------------" . "</br>";
$key = "VCAP_SERVICES";
$value = getenv ( $key );
echo $key . ":" . $value . "</br>";
echo "----------------------------------" . "</br>";
$vcap_services = json_decode($_ENV["VCAP_SERVICES" ]);
$db = $vcap_services->{'mysql-5.5'}[0]->credentials;
$mysql_database = $db->name;
$mysql_port=$db->port;
$mysql_server_name =$db->host . ':' . $db->port;
$mysql_username = $db->username; 
$mysql_password = $db->password; 

$con = mysql_connect($mysql_server_name, $mysql_username, $mysql_password);
if (!$con){
    die ('connection failed' . mysql_error());
}
mysql_select_db($mysql_database,$con);   

exit;
/*
$name=$_POST['name']; // Fetching Values from URL.
$email=$_POST['email'];
$number= $_POST['number']; 
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM user WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into user(name, email, mobile_number,social_profile,status) values ('$name', '$email', '$number','facebook',1)"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($con);
*/
?>