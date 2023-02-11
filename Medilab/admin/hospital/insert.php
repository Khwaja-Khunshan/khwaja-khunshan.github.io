
<?php include 'header.php';?>
<?php include '../DB_Connectivity/connection.php';?>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Hospital Registration Form</h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Hospital Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name = "hospital_name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" name = "email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword4" name = "password" placeholder="Password">
                      </div>

                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name = "address" placeholder="address"	>
                      </div>
					  <div class="form-group">
                        <label for="exampleInputName1">Contact No</label>
                        <input type="number" class="form-control" id="exampleInputName1" name = "contact" placeholder="Name">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

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

		$query = "Insert Into hospital(hospital_name,email,password,address,contact) Values('".$formData['hospital_name']."','".$formData['email']."','".$formData['password']."','".$formData['address']."','".$formData['contact']."')";
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

<?php include '../footer.php';?>


