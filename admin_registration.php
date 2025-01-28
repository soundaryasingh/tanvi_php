<?php
include('../include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    body{
        overflow:hidden;
    }
</style>
</head>
<body>
   <div class="container-fluid mb-3">
   <h2 class="text-center mb-5">User Registration</h2>
   <div class="row d-flex justify-content-center">
    <div class="col-lg-3 col-xl-5 ">
        <img src="../images/dairy3.png" alt="Admin Registration" class="image-fluid">
    </div>
    <div class="col-lg-6 col-xl-4">
       <form action="" method="post">
        <div class="form-outline mb-4"> 
            <label for="username" class="form-label">Username
            </label>
            <input type="text" id="username"name="username" placeholder="Enter Your User Name" required="required" class="form-control">
        </div>
        <div class="form-outline mb-4"> 
            <label for="email" class="form-label">Email
            </label>
            <input type="email" id="email"name="email" placeholder="Enter Your email" required="required" class="form-control">
        </div>
        <div class="form-outline mb-4"> 
            <label for="password" class="form-label">Address
            </label>
            <input type="text" id="address"name="address" placeholder="Enter Your address" required="required" class="form-control">
        </div>
        <div>
        <button><a href="../index.php" class="nav-link text-light bg-info border-0">Register</a></button>
        </div>
       </form>
    </div>
    
   </div>
   </div> 
</body>
</html>