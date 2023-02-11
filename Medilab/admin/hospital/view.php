<?php
    include 'header.php';

    include('../Db_Connectivity/connection.php');
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        // Fetching
        $query = "select * from hospital where id='".$_GET['id']."' ";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);
    }
?>



<form >
<div class="container-fluid">
<div class="form-group col-md-6">
    <label for="exampleInputfirstname">Hospital name</label>

    <input type="text" disabled class="form-control" id="exampleInputfirstname" name="firstname" value="<?= $data['hospital_name'] ?? ''?>" aria-describedby="firstname" placeholder="Enter first name">
    
    <small id="firstname" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputlastname">Email</label>
    <input type="text" disabled class="form-control" id="exampleInputlastname" name="lastname" value="<?= $data['email'] ?? ''?>" aria-describedby="lastname" placeholder="Enter last name">
    <small id="lastname" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail">Password</label>
    <input type="email" disabled class="form-control" id="exampleInputEmail1" name="emailaddress" value="<?= $data['password'] ?? ''?>" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputEmail">Cotact</label>
    <input type="email" disabled class="form-control" id="exampleInputEmail1" name="emailaddress" value="<?= $data['contact'] ?? ''?>" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword">Address</label>
    <input type="text" disabled class="form-control" name="password" id="exampleInputPassword1" value="<?php echo $data['address'] ?? ''?>" placeholder="Password">

  
</form>
<?php
include '../footer.php';

?>