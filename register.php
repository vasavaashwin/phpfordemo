<?php
//error_reporting(E_ALL);
ini_set('display_errors', 0);
$name=$_POST['name']; // Fetching Values from URL.
$email=$_POST['email'];
$number= $_POST['number']; 
$social_profile = '';
if(!empty($_POST['social_profile'])){
	foreach($_POST['social_profile'] as $sprofile){
		$social_profile= $social_profile.$sprofile.','; 	
	}
	
	$social_profile = substr($social_profile,0,strlen($social_profile)-1);
}



if(!$_ENV["VCAP_SERVICES"]){ //local dev

$dsn = 'pgsql:dbname=newdatabase;user=postgres;password=aim123;host=localhost;port=5432;';	
}else{	
	//postgres://admin:WUHZQQUELISSUWGO@sl-us-dal-9-portal.6.dblayer.com:22912/compose
//$dsn = 'postgres://admin:WUHZQQUELISSUWGO@sl-us-dal-9-portal.6.dblayer.com:22912/compose';
$dsn = 'pgsql:dbname=compose;user=admin;password=WUHZQQUELISSUWGO;host=sl-us-dal-9-portal.6.dblayer.com;port=22912;';
}

//postgres
try{
	// create a PostgreSQL database connection
	$conn = new PDO($dsn);
	//$conn = new PDO("pgsql:dbname=compose;host=sl-us-dal-9-portal.6.dblayer.com", 'admin', 'WUHZQQUELISSUWGO'); 
	//$conn = pg_connect($dsn);

	// display a message if connected to the PostgreSQL successfully
	if($conn){
		//echo "Connected to the <strong>compose</strong> database successfully!";
	}
}catch (PDOException $e){
//	var_dump($e);
	// report error message
	echo $e->getMessage(); 
}



	
	 try {	
$statement = $conn->prepare("INSERT INTO appusers(username,
            email,
            mobile_number,
            social_profile,
            status,
			create_date)
    VALUES(:username, :email, :mobile_number,:social_profile,:status,NOW())  RETURNING id");
$statement->execute(array(
    "username" => $name,
    "email" => $email,
    "mobile_number" => $number,
	"social_profile" => $social_profile,
	"status" => "1"
));		
		
   //echo $statement->queryString;die;
   //$statement->debugDumpParams();echo '<hr>';
$row =$statement->fetch(PDO::FETCH_ASSOC);; 
//print_r($row);
$id = $row['id'];
 } catch(PDOException $e) {
        echo $e->getMessage();
    }
	
/*
$sql= "SELECT * FROM appusers";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
*/
//print_r($result);
	
$result = array('success'=>true,'id'=>$id,'message'=>'Successfully register.');
echo json_encode($result);

?>