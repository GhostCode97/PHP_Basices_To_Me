<?php 
// include database connection
include_once 'database/databaseClass.php';
$db = new databaseClass('localhost', 'root', '', 'test');
$db->connect();
$db->createTable('users', 'id INT(11) NOT NULL AUTO_INCREMENT, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY (id)');
echo "Table created";
echo '<br><pre>';
$db->selelect('users', '*', '', 'id');
$result = $db->result;
print_r($result);
echo "</pre>";
echo  "<h2>email </h2>";
$email = 'ammarabed@gmail.com';
$name= 'ammar';
$password = '123';
$db->selelect('users', 'email', '', 'id');
$result = $db->result;
// convert insted array to array
$result = array_map(function($item){
    return $item['email'];
}, $result);

// check if email exist
if(in_array($email,$result)){
    echo "email already exist";
}else{
    $db->insert('users', 'name, email, password', "'$name', '$email', '$password'");
    echo "email inserted";
}
echo "</pre>";
$db->disconnect();
?>