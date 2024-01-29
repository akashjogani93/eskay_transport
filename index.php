<!DOCTYPE html>
<html lang="en">


<?php include 'bs4.php' ?>
<body  class="hold-transition login-page" style="background-image: url(./img/des.png); background-repeat: no-repeat;">
    <div class="container ">
    <div class="card-body login-card-body">
        <div class="row">
            <div class="col-lg-6 offset-1 mt-5">
                <div class="card">
                    <div class="card-header bg-primary text-white h4">
                    <b><h4 align="center"> ADMIN LOG IN</h4></b>
                    </div>
                    <div class="card-body" style="background-color:#e7ebef;">
                        <form action="" method="post">
                            <div class="form-group">
                            <label for="" class="h5">Email</label>
                                <input type="text" class="form-control" placeholder="abc@abc.com" required name="email">
                            </div>
                            <div class="form-group">
                                <label for="" class="h5">Password</label>
                                <input type="password" class="form-control" required placeholder="*****" maxlength="20" name="password"> 
                             
                            </div>
                            <div class="form-group">
                              <center>  <button class="btn btn-primary  btn-lg" style="margin-top:15px";  name="login">Login</button></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "con.php";
        session_start();
        if(isset($_POST['login']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $qry="SELECT * FROM `admin` wHERE  `email`='$email' AND `password`='$password'";
			$exc=mysqli_query($con,$qry);
			if(mysqli_affected_rows($con)!=0)
            {
                    $_SESSION['email']=$email;
                    echo "<script>alert('login successfull..');</script>";
                    header("location:dashboard.php");
            }
            else
            {
                echo "<script>alert('username/password incorrcet');</script>";
            }
        }
    ?>
</body>



</html>
