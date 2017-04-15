<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (getenv("VCAP_SERVICES")===false) {
$db = 'XXXX';
define("APP_DB_SCHEMA", $db);
define("APP_DB_STRING", 'xxxx');
//define("APP_DB_HOST", 'xxxx');
//define("APP_DB_PORT", "xxxx");
//define("APP_DB_USERNAME", 'xxxx');
//define("APP_DB_PASSWORD", "xxxx");

} else {

// getting VCAP configuration
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services, true);
$pgsql_config = $services_json["compose-for-postgresql"][0]["credentials"];

define("APP_DB_SCHEMA", $pgsql_config["name"]);
define("APP_DB_STRING", $pgsql_config["uri_cli"])
//define("APP_DB_HOST", $pgsql_config["host"]);
//define("APP_DB_PORT", $pgsql_config["port"]);
//define("APP_DB_USERNAME", $pgsql_config["user"]);
//define("APP_DB_PASSWORD", $pgsql_config["password"]);
}

//$dbConnectionString = "host=" . APP_DB_HOST . " port=" . APP_DB_PORT . " dbname=" . APP_DB_SCHEMA . " user=" . APP_DB_USERNAME . " password=" . APP_DB_PASSWORD;
$dbConnectionString = APP_DB_STRING;
$dbConnection = pg_connect($dbConnectionString);

if (!$dbConnection) {
    print("Connection Failed.");
    exit;
}

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
$strsq0 = "INSERT INTO user ( name, email, mobile_number,social_profile,status) VALUES
('$name', '$email', '$number','facebook',1);";
$result0 = $mysqli->query ( $strsq0 );
if ($result0) {
	echo "insert success!";
} else {
	echo "Cannot insert into the data table; check whether the table is created, or the database is active.";
}

}else{
echo "This email is already registered, Please try another email...";
}
}
*/

 mysqli_close();
?>