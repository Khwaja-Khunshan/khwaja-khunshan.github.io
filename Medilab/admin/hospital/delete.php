<?php

include 'header.php';

include('../Db_Connectivity/connection.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
      // Fetching
      $query = "delete from hospital where id='".$_GET['id']."' ";
      // die($query);
      $isDeleted = mysqli_query($conn,$query);
      if($isDeleted)
      {
        $data['is_deleted'] = 1;
       
      }
      else
      {
        $data['is_deleted'] = 0;
       
      }
    }
    include 'footer.php';


?>