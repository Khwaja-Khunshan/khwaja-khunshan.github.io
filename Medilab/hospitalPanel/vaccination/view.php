<?php
    include 'header.php';

    include('../../Db_Connectivity/connection.php');
  
        // Fetching
        $query = "select * from vacc_list where id='".$_GET['id']."' ";
        $result = mysqli_query($conn,$query);
        $data = mysqli_fetch_assoc($result);

?>

<div class="col-sm-12 col-xl-6">
                        <div class="bg-dark card-body rounded h-100 p-4">
                        <h4 class="card-title">Add new vaccination</h4>
                        <br>
                            <form>
                            <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vaccination Id</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" disabled name = "id" id="inputEmail3" value="<?= $data['id'] ?? ''?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vaccination Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" class="form-control" disabled name = "vacc_name" id="inputEmail3" value="<?= $data['vacc_name'] ?? ''?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Dose</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" disabled name = "vacc_dose" id="inputPassword3" value="<?= $data['vacc_dose'] ?? ''?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Dose</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" disabled name = "vacc_dose" id="inputPassword3" value="<?= $data['status'] ?? ''?>">
                                    </div>
                                </div>
                                

                     <a class="btn btn-primary"     href="index.php">Back</a>
                            </form>
                        </div>
                    </div>
                
<?php
include 'footer.php';

?>