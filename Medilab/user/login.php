
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    


<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" action="" id="signup-form" class="signup-form">
                <h2 class="form-title">Login Here</h2>
               
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                
               
                <div class="form-group">
                    <input type="submit" name="login_btn" id="submit" class="form-submit" value="Sign up"/>
                </div>
            </form>
           
            
            <p class="loginhere">
               Register Hospital From Here <a href="../registation form/index.php" class="loginhere-link">Register</a>
            </p>

            <p class="loginhere">
               Register Patient From Here <a href="../registation form/patient_registation.php" class="loginhere-link">Register</a>
            </p>
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="../registation form/vendor/jquery/jquery.min.js"></script>
<script src="../registation form/js/main.js"></script>



<!-- <?php

    if(isset($_POST["login_btn"]))
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
       

        require_once("../connection.php");

        $select_email = "select `email` from `user` where email = '$email'";
        $exec_email = mysqli_query($con,$select_email);
        $num_email = mysqli_num_rows($exec_email); 
        if($num_email > 0)
        {
            $select_pass = "select * from `user` where email = '$email' and password = '$password'";
            $exec_pass = mysqli_query($con,$select_pass);
            $num_pass = mysqli_num_rows($exec_pass);
           
            if($num_pass > 0)
            {
                $arr = mysqli_fetch_array($exec_pass);
                 $role = $arr[1];
                 $status = $arr[10];
                
                if($role == 0 )
                {
                    $_SESSION["name"] = $arr[2];
                    $_SESSION["role"] = "0";

                    header("location:main.php");
                }

               else if($role == 1 )
                {
                    if ($status == 'approved') {
                        $_SESSION["name"] = $arr[2];
                        $_SESSION["id"] = $arr[0];
                        $_SESSION["hospitalname"] = $arr[7];
                        $_SESSION["haddress"] = $arr[8];
                        $_SESSION["role"] = "1";
    
                        header("location:../Website/index.php");
                    }
                    else {
                        ?>
                        <script>alert("you are in panding please try again later");</script>
                        <?php
                    }
                   
                }
               else if($role == 2)
                {
                    if ($status == 'approved') {
                    $_SESSION["name"] = $arr[2];
                    $_SESSION["id"] = $arr[0];
                    $_SESSION["role"] = "2";

                    header("location:../Website/index.php");
                    }
                    else {
                        ?>
                        <script>alert("Your Request has been submitted for Approval,  please try again later");</script>
                        <?php
                    }
                 
                }
            







                else
                {
                    ?>
                    <script>alert("sorry you can't login");</script>
                    <?php
                }
            }
            else
            {
                ?>
                <script>alert("your password does not exist")</script>
                <?php
            }
        }
        else
        {
            ?>
            <script>alert("your email does not exist")</script>
            <?php
        }
    }

?> -->






</body>
</html>