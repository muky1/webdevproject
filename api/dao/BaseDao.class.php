<?php

class BaseDao {
  public function __construct(){

$servername = "localhost";
$username = "root";
$password = "begic123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webproject", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}



  }

  public function insert(){


  }

  public function update(){


  }

  public function query(){


  }

  public function query_unique(){


  }


}
 ?>
