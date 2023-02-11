
<?php include '../admin/DB_Connectivity/connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img style="height: 99.5%;" src="images/images.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Register now </h2>
                        <p>while seats are available !</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Hospital Name</label>
                                    <input type="text" name = "hospital_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Email</label>
                                    <input type="email" name = "email" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Password</label>
                                    <input type="text" name = "password" id="pass" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Address</label>
                                    <input type="text" name = "address" id="address" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Contact</label>
                                    <input type="text" name = "contact" id="contact" />
                                </div>
                            </div>
                           
                        </div>
                       
                        <div class="form-submit">
                            <button type="submit"  class="submit" >Submit</button>
                            <!-- <input type="submit" value="Reset" class="submit" id="reset" name="reset" /> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




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
          header("Location:index.php");
          exit();
        }
        else
        {
          echo "<script>alert('Data could not be inserted')</script>";
        }

      }
?>
      
?>
