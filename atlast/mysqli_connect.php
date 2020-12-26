<?php
// DEFINE('DB_USER','Harry');
// DEFINE('DB_PASSWORD','passpasshello');
// DEFINE('DB_HOST','localhost');
// DEFINE('DB_NAME','airline_reservation');

//$dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="airline_reservation";

//Create connection
$dbc =mysqli_connect($db_host,$db_user,$db_password,$db_name);

if(!$dbc){
    // die("Connection failed")
    die("Connection failed :".mysqli_connect_error());

}
?>
