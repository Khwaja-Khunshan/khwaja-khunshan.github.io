
<?php include '../../DB_Connectivity/connection.php';?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Sign up now</h2>
          <form method = "POST" >
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name = "firstName" id="form3Example1" class="form-control" />
                  <label class="form-label" name ="firstName" for="form3Example1">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name = "lastName" id="form3Example2" class="form-control" />
                  <label class="form-label" name ="lastName" for="form3Example2">Last name</label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name = "email" id="form3Example3" class="form-control" />
              <label class="form-label" name ="email" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name = "password" id="form3Example4" class="form-control" />
              <label class="form-label" name ="password" for="form3Example4">Password</label>
            </div> </div>

			<div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="number" name = "age" id="form3Example2" class="form-control" />
                  <label class="form-label" name ="age" for="form3Example2">Age</label>
                </div>
              </div>
           

			<div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" name = "gender" id="form3Example2" class="form-control" />
                  <label class="form-label" name ="gender" for="form3Example2">Gender</label>
                </div>
              </div>
            </div>
            <!-- Checkbox -->
    
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Sign up
            </button>

            <!-- Register buttons -->
            <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
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

		$query = "Insert Into patient(firstName,lastName,email,password,age,gender) Values('".$formData['firstName']."','".$formData['lastName']."','".$formData['email']."','".$formData['password']."','".$formData['age']."','".$formData['gender']."')";
		// echo"<pre>";
		// print_r($query);
		// die();
        $isInserted = mysqli_query($conn,$query);
        if($isInserted)
        {
			
			echo '<script>
			window.location.href = "../../login/index.php";
		</script>';
		
		
		die();
        }
   

      }
?>



