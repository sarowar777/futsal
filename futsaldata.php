<?php
class futsaldata{
  private $id;
  public $conn;
  
  public function __construct($id)
  {
     $db=new dbconnection;
     $this->conn=$db->conn;
     $this->id = $id;
  }
 
  public function create($inputData)
  {
    $data="'" .implode("','",$inputData)."'";
    // echo $data;
    $futsalQuery="INSERT INTO availablebooking (date_Avail,futsal_Id,start_Time,end_Time,futsal_Type,futsal_Price) VALUES ($data)";
    $result=$this->conn->query($futsalQuery);
    if($result){
      return true;
    }
    else{
      return false;
    }
   
  }
  public function findOpp($inputFinderData)
  {
    $datafinder="'" .implode("','",$inputFinderData)."'";
    // echo $data;
    $finderQuery="INSERT INTO finder(user_Id,futsal_Name,futsal_Location,futsal_Type,book_Date,start_Time,end_Time) VALUES ($datafinder)";
    $resultfinder=$this->conn->query($finderQuery);
    if($resultfinder){
      return true;
    }
    else{
      return false;
    }
   
  }
 
}

?>