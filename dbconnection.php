
<?php
// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'kickers');

class dbconnection
{
  public $conn;
  public function __construct()
  {
    
    $conn=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
   if($conn->connect_error){
    die("<h1>Database Connection failed</h1>");
   }
  //  echo "Database connected successfully";
   return $this->conn=$conn;
  }
  
}

?>