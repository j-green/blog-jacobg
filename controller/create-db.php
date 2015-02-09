<?php
require_once("../model/database.php");

$connection = new mysqli($host, $username, $password);

if ($connection->connect_error) {
    die("<p>Error: " . $connection->connect_error . "</p>");
} 

$exists = $connection->select_db($database);

if(!$exists) {
    $query = $connection->query("CREATE DATABASE $database");
    
if($query) {
    echo "<p>Successfully created database:  ". $database . "</p>";
    }
}


else{
    echo "<p>Database already .</p>";
}
//$query = $connection->query