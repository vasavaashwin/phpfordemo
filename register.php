<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
$name=$_POST['name']; // Fetching Values from URL.
$email=$_POST['email'];
$number= $_POST['number']; 
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
/*if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM user WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){ */
$strsq0 = "INSERT INTO user ( name, email, mobile_number,social_profile,status) VALUES
('$name', '$email', '$number','facebook',1);";
$result0 = mysql_query ( $strsq0 );
if ($result0) {
	echo "insert success!";
} else {
	echo "Cannot insert into the data table; check whether the table is created, or the database is active.";
}
/*
}else{
echo "This email is already registered, Please try another email...";
}
}
*/

mysql_close();
?>