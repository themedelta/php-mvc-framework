<?php
$host = "#host"; //hostname
$db = "#db"; //database name
$user = "#user"; //db username
$pass = "#pass"; //db password
$collection = '#collection'; //collection name
$mongo = new MongoClient("mongodb://#host", array("username" => $user, "password" => $pass, "db" => $db)); //connect to mongodb
$mongoadmin = new MongoClient("mongodb://#host"); //connect to mongo admin db
//$mongo = new MongoClient(); //localhost
$conn = $mongo->$db; //select db
?>