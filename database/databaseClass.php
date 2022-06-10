<?php
//create class database
class database
{
    private $host ;
    private $user ;
    private $pass ;
    private $dbname ;
    protected $conn;
    public $result;
    // default constructor

    // create constructor to set variables 
    public function __construct($host='localhost', $user='root', $pass='', $dbname='')
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->dbname = $dbname;
    }
    // return infromation of database
    public function getInfo()
    {
        return "Host: ".$this->host."<br>User: ".$this->user."<br>Password: ".$this->pass."<br>Database: ".$this->dbname;
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
    // create function select to select data from database
}
class databaseClass extends database
{
    public $name_table;
    public $name_column;
    public $name_value;
    public $name_where;

    // constructor to set variables
    public function __construct($host='localhost', $user='root', $pass='', $dbname='')
    {
        parent::__construct($host, $user, $pass, $dbname);
    }
    // crate table function
    public function createTable($table, $columns)
    {
        $this->name_table = $table;
        $this->name_column = $columns;
        $sql = "CREATE TABLE IF NOT EXISTS " . $this->name_table . " (" . $this->name_column . ")";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function selelect($table, $column, $value)
    {
        $this->name_table = $table;
        $this->name_column = $column;
        $this->name_value = $value;
       // $sql = "SELECT " . $this->name_column . " FROM " . $this->name_table . " WHERE " . $this->name_where . " = '" . $this->name_value . "'";
        $sql = "SELECT $this->name_column FROM $this->name_table";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->result;
    }
    // insert data to database
    public function insert($table, $columns, $values)
    {
        $this->name_table = $table;
        $this->name_column = $columns;
        $this->name_value = $values;
        $sql = "INSERT INTO " . $this->name_table . " (" . $this->name_column . ") VALUES (" . $this->name_value . ")";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    // delete data from database
    public function delete($table, $column, $value)
    {
        $this->name_table = $table;
        $this->name_column = $column;
        $this->name_value = $value;
        $sql = "DELETE FROM " . $this->name_table . " WHERE " . $this->name_column . " = '" . $this->name_value . "'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    // delete all data from database
    public function deleteAll($table)
    {
        $this->name_table = $table;
        $sql = "DELETE FROM " . $this->name_table;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}



// create function insert to insert data to database
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
