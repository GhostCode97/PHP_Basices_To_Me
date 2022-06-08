<?php
//create class database
class database
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $dbname = '';
    protected $conn;
    protected $result;
    // create constructor to set variables 
    public function __construct($host, $user, $pass, $dbname)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }
    //create function connect
    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
        return $this->conn;
    }
    // create function disconnect
    public function disconnect()
    {
        $this->conn = null;
    }
    // create function select
    public function select($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    // create function insert
    public function insert($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    // create function update
    public function update($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
    // create function delete
    public function delete($query)
    {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    }
}
// $conn = mysqli_connect('localhost', 'root', '', 'eco');
// $servername = "localhost";
// $username = "username";
// $password = "password";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
