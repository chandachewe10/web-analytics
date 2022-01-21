<?php

class Db{

public static $servername = "localhost";    
public static  $username = "root";
public static $password = "";
public static $dbname = "ipman";

}

$conn = new mysqli(Db::$servername, Db::$username, Db::$password, Db::$dbname);
if ($conn){
 return 'Connected successfully';
}

?>