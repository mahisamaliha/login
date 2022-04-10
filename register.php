<?php
    $showAlert = false;
    $showError = false;
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        include 'partials/_dbconnect.php';

        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone_no = $_POST["phone_no"];
        $dob = $_POST["dob"];
        $password = $_POST["password"];
        $cpassword =  $_POST["cpassword"];

        $exists = false;
    
        $email_query = "SELECT * FROM users Where email = '$email' ";
        $email_query_run = mysqli_query($conn, $email_query);

        if(mysqli_num_rows($email_query_run) > 0){
            $showError = "Email already exists";
        }

        else{
            //if(($password == $cpassword) && $exists == false)
            if(($password == $cpassword)){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone_no`, `dob`, `password`) VALUES ('$first_name', '$last_name', '$email.', '$phone_no', '$dob', '$hash')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $showAlert = true;
                }
            }
            else{
                $showError = "Passwords didn't match";
            }
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Register</title>
    </head>
    
    <body>
        <?php require 'partials/_nav.php' ?>
    
        <?php

        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>success</strong> Your account is now created.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';}

        if($showError){
            echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong> '. $showError.'
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>

            </div>';}
        ?>

        <div class= "container">
            <h1 class = "text-center"> Register Yourself </h1>
        
            <form action = "/Login/register.php" method = "post">

                <div class="form-group col-md-6">
                    <label for="first_name">First Name</label>
                    <input type="name" class="form-control" id="first_name" name = "first_name" Required  placeholder="Enter First Name">
                </div>

                <div class="form-group col-md-6">
                    <label for="last_name">Last Name</label>
                    <input type="name" class="form-control" id="last_name" name = "last_name" Required  placeholder="Enter Last Name">
                </div>

                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name = "email" Required  placeholder="Enter Email">
                </div>

                <div class="form-group col-md-6">
                    <label for="phone_no">Phone No</label>
                    <input type="number" class="form-control" id="phone_no" name = "phone_no" Required  placeholder="Enter Phone No">
                </div>

                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name = "dob" Required  placeholder="Enter Date of Birth">
                </div>

                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name = "password" Required placeholder="Password">
                </div>

                <div class="form-group col-md-6">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name = "cpassword" Required placeholder="Password">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>
        
                <button type="submit" class="btn btn-primary">Register</button>
            
            </form>
        
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>