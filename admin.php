<?php 
// include database connection
include_once 'database/databaseClass.php';
$db = new database('localhost', 'root', '', 'test');
$db->connect();
?>