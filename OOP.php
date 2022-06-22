<?php

//  Singleton class to access the add ons
class OOP {
    private static $instance;
    private $addons;
    
    private function __construct() {
        $this->addons = array();
    }
    
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new OOP();
        }
        return self::$instance;
    }
    
    public function addAddon($addon) {
        $this->addons[] = $addon;
    }
    
    public function getAddons() {
        return $this->addons;
    }
}
// test code
$oop = OOP::getInstance();
$oop->addAddon('addon1');
$oop->addAddon('addon2');
$oop->addAddon('addon3');
$addons = $oop->getAddons();
var_dump($addons);



class users{
    private $instance;
    private $users = array();
    private static $count=0;
    protected function __construct(){       
    }
    public static function getInstance(){
        if(!self::$count){
            self::$count++;
            return new users();
        }
        return self::$instance;
    }
    public function getArgs(){
        return $this->users;
    }
        // create function to add user
    protected function addUser(...$args){
        $this->users[self::$count] = array(
            'email' => $args[0],
            'name' => $args[1],
            'password' => $args[2]
        );
    }
}
class admin extends users{
    private $role;
    public function __construct(...$args){
        parent::__construct();
        $this->addUser(...$args);
        $this->role=$args[3];
    }
    public function getArgs(){    
        return array();
    }
    public function editArgs(...$args){
        
    }

}
class user extends users{
    private $discrption;
    private $start_date;
    private $end_date;
    public function __construct(...$args){
        parent::__construct(...$args);
        $this->discription=$args[3];
        $this->start_date=$args[4];
        $this->end_date=$args[5];
    }
}
// test code
$admin=new admin('admin@email.com','Ammar','pass','admin');
$user=new user('user@email.com','Ahmad','pass','','','user');
$users=users::getInstance();
//$users->addUser('user@email.com','Ahmad','pass');
