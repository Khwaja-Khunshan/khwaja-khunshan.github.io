<?php
include 'header.php';
include '../../DB_Connectivity/connection.php';

     // Fetching
     $query = "select * from vacc_list where id='".$_GET['id']."' ";
     $result = mysqli_query($conn,$query);
     $data['vacc_list'] = mysqli_fetch_assoc($result);
?>


<form method="POST">


<div class="col-sm-12 col-xl-6">
                        <div class="bg-dark card-body rounded h-100 p-4">
                        <h4 class="card-title">Add new vaccination</h4>
                        <br>
                            <form>
                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vaccination Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" name = "id" value="<?= $data['vacc_list']['id'] ?? ''?>" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vaccination Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" name = "vacc_name" value="<?= $data['vacc_list']['vacc_name'] ?? ''?>" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Dose</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name = "vacc_dose" value="<?= $data['vacc_list']['vacc_dose'] ?? ''?>" id="inputPassword3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3"  class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name = "status" value="<?= $data['vacc_list']['status'] ?? ''?>" id="inputPassword3">
                                    </div>
                                </div>
                                

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    </form>


                    <?php
    $formData = array();    
    if($_SERVER['REQUEST_METHOD'] == 'POST')        {

        $formData = $_POST;
        // $query = "Insert Into users(first_name,last_name,email,password) Values('".$formData['firstname']."',
        // '".$formData['lastname']."','".$formData['emailaddress']."','".$formData['password']."'
        // )";

        $query = "update vacc_list set vacc_name = '".$formData['vacc_name']."' , vacc_dose = '".$formData['vacc_dose']."',
        status = '".$formData['status']."' where id='".$formData['id']."'" ;

        $isInserted = mysqli_query($conn,$query);
       
        if($isInserted)
        {
            echo '<script>alert("Vaccination is now Approved");
            window.location.href = "index.php";
        </script>';
        
        
        die();
    
        }
        else
        {
          echo "<script>alert('Data could not be inserted')</script>";
        }

      }
?>