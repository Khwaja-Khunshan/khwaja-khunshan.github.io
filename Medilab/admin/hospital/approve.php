<?php 
include 'header.php';
include '../DB_Connectivity/connection.php';
if(isset($_GET['id'])){


$id =$_GET['id'];

$query= "select *from hospital where id = $id";
$result = mysqli_query($conn,$query);

$recordFetch = mysqli_fetch_array($result);
$hospitalName= $recordFetch[1]; 
$hospitalPass= $recordFetch[2];
$hospitalEmail= $recordFetch[5];
$hospitalAddress= $recordFetch[3];
$hospitalContact= $recordFetch[4];

$update = "UPDATE `hospital` SET `hospital_name`='$hospitalName',`password`='$hospitalPass',`address`='$hospitalAddress',`contact`='$hospitalContact',`status`='Approved',`email`='$hospitalEmail' WHERE id = $id";


$run = mysqli_query($conn,$update);

if($run){

    echo '<script>alert("Hospital is now Approved");
        window.location.href = "index.php";
    </script>';
    
    
    die();

}
else{
    echo '<script>alert("Sorry")</script>';
    header("Location: index.php");
    die();

}
}
else{
    echo '<script>;
    window.location.href = "index.php";
</script>';

}


?>





<?php include '../footer.php';?>


