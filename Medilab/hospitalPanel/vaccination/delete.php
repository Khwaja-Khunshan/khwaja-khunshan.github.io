<?php

include 'header.php';

include('../../Db_Connectivity/connection.php');
    
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
      // Fetching
      $query = "delete from vacc_list where id='".$_GET['id']."' ";
      // die($query);
      $isDeleted = mysqli_query($conn,$query);
      if($isDeleted)
      {
        $data['is_deleted'] = 1;
        echo '<script>alert("Vaccination is now Deleted");
        window.location.href = "index.php";
    </script>';
    
    
    die();
       
      }
      else
      {
        $data['is_deleted'] = 0;
        echo '<script>alert("Vaccination is now Approved");
        window.location.href = "index.php";
    </script>';
    
    
    die();
     
      }
    }
    include 'footer.php';


?>