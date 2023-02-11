<?php include 'header.php';?>
<?php include '../../DB_Connectivity/connection.php';?>


<form  method="POST">   
    
<div class="col-sm-12 col-xl-6">
                        <div class="bg-dark card-body rounded h-100 p-4">
                        <h4 class="card-title">Add new vaccination</h4>
                        <br>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vaccination Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" name = "vacc_name" id="inputEmail3">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Dose</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name = "vacc_dose" id="inputPassword3">
                                    </div>
                                </div>
                                

                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
              </form>
  <?php
    $formData = array();
    $data = $_SERVER['REQUEST_METHOD'];
    if($data == 'POST')
    {
      // echo "<pre>";
      // print_r($_REQUEST);
      // echo "<br>";
      // die("Code is stopped here...");

        $formData = $_POST;

		$query = "Insert Into vacc_list(vacc_name,vacc_dose) Values('".$formData['vacc_name']."','".$formData['vacc_dose']."')";
		// echo"<pre>";
		// print_r($query);
		// die();
        $isInserted = mysqli_query($conn,$query);
        if($isInserted)
        {
          // header("Location:index.php");
          // exit();
        }
        else
        {
          echo "<script>alert('Data could not be inserted')</script>";
        }

      }
?>

<?php include 'footer.php';?>





