<?php 
//declare some parameter to connect DB
$db_name = "assignment";
$host_name = "localhost";
$db_username = "root";
$db_password = "root";
$db_port = "3306";

//create connect to DB
$db_connection = new mysqli(
       $host_name,
       $db_username,
       $db_password,
       $db_name,
       $db_port
);
function execute_query($sql){
       global $db_connection;
       return $db_connection -> query($sql);
}
function encrypt_password($pass){
       return md5($pass);
}

?>
