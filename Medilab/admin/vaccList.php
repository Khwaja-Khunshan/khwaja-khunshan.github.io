
<?php 
include 'header.php';
include '../DB_Connectivity/connection.php';
$query = "select * from vacc_list  ";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registered Vaccine</h4>
                 
                    </p>
                    <a href="../../hospital_registration/index.php" class="btn btn-secondary">Add New</a>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> S No </th>
                            <th> Vaccination Name </th>
                            <th> Vaccination Dose </th>
                            <th>Status</th>
                            <th colspan="3">Action</th>
                        
                          </tr>
                        </thead>
                        <tbody>
                        
                        <?php 
      for($i = 0; $i<count($data); $i++)
      {
        ?>
        <tr>
          <td scope="row"><?php echo $i+1;?></td>
          <td scope="row"><?php echo $data[$i]['vacc_name'] ?? ''?></td>
          <td scope="row"><?php echo $data[$i]['vacc_dose'] ?? ''?></td>
          <td>Available </td>
          <td><a href="edit.php?id=<?= $data[$i]['id']?>" class="btn btn-success" >Edit</a> </td>
          <td><a href="delete.php?id=<?= $data[$i]['id']?>" class="btn btn-danger" >Delete</a> </td>
          <!-- <td><button onclick="deleteRole(<?= $data[$i]['id']?>)" class="btn btn-danger" >Delete</button> </td> -->
          <td><a href="view.php?id=<?= $data[$i]['id']?>" class="btn btn-primary" >View</a> </td>
        </tr>
     <?php
      }
    ?>

                      
                      
                      
                      </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

<?php include 'footer.php';?>


