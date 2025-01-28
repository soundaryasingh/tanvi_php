<?php
include('../include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
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
   <h2 class="text-center mb-5">Admin login</h2>
   <div class="row d-flex justify-content-center">
    <div class="col-lg-7 col-xl-5 ">
        <img src="../images/dairy2.png" alt="Admin Login" class="image-fluid">
    </div>
    <div class="col-lg-6 col-xl-4">
       <form action="" method="post">
        <div class="form-outline mb-4"> 
            <label for="username" class="form-label">Username
            </label>
            <input type="text" id="username"name="username" placeholder="Enter Your User Name" required="required" class="form-control">
        </div>
        <div class="form-outline mb-4"> 
            <label for="password" class="form-label">Password
            </label>
            <input type="password" id="password"name="password" placeholder="Enter Your password" required="required" class="form-control">
        </div>
        <div>
        <button><a href="index.php" class="nav-link text-light bg-info border-0">Login</a></button>
        </div>
       </form>
    </div>
    
   </div>
   </div> 
</body>
</html>