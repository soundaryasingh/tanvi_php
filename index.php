<?php
include('include/connect.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using PHP and Mysql</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous"/>
    <!--css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--navbar-->
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src=".\images\dairy.jpeg" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".\admin_area\admin_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".\admin_area\add-to-cart3.php"><i class="fa-solid fa-cart-shopping"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- second child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li> 
    <li class="nav-item">
          <a class="nav-link" href=".\admin_area\admin_login.php">Login</a>
        </li>
    </ul>
 </nav>
<!-- third child -->
  <div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce and community</p>
  </div>

<!-- fourth child -->
<div class="row">
    <div class="col-md-10">
        <!-- products -->
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card ">
  <img src=".\images\tanvi1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Milk</h5>
    <p class="card-text">Price:40/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src=".\images\tanvi2.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yogurt</h5>
    <p class="card-text">Price:70/-</p>
    <a href=".\admin_area\add_to_cart.php" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src=".\images\tanvi8.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panner</h5>
    <p class="card-text">Price:90/-</p>
    <a href=".\admin_area\add_to_cart2.php" class="btn btn-info">Add to cart</a>
    
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src=".\images\tanvi4.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Chocolate Milk</h5>
    <p class="card-text">Price:290/-</p>
    <a href=".\admin_area\add-to-cart3.php" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img src=".\images\tanvi5.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Milk Powder</h5>
    <p class="card-text">Price:110/-</p>
    <a href=".\admin_area\add_to_cart4.php" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi6.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Strawberry Milk</h5>
    <p class="card-text">Price:260/-</p>
    <a href=".\admin_area\add_to_cart5.php" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi7.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yogurt</h5>
    <p class="card-text">Price:150/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi3.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Milk</h5>
    <p class="card-text">Price:90/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi9.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Yogurt</h5>
    <p class="card-text">Price:110/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi10.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Panner</h5>
    <p class="card-text">Price:120/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi11.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Milk powder</h5>
    <p class="card-text">Price:70/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    
  </div>
</div>
            </div>
            <div class="col-md-4 mb-2 ">
            <div class="card">
  <img src=".\images\tanvi12.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Milk</h5>
    <p class="card-text">Price:20/-</p>
    <a href="#" class="btn btn-info">Add to cart</a>
  </div>
</div>
            </div>
</div>
</div>
    <div class="col-md-2 bg-secondary p-0">
        <!--brand to be display -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <?php
            $select_brands="select * from `brands`";
            $result_brands=mysqli_query($con,$select_brands);
           /* $row_data=mysqli_fetch_assoc($result_brands);
            echo $row_data['brand_title']; */
            while($row_data=mysqli_fetch_assoc($result_brands)){
                $brand_title=$row_data['brand_title'];
                $brand_id=$row_data['brand_id'];
                echo "<li class='nav-item'>
                <a href='index.php?brand=$brand_id' class='nav-link  text-light'>$brand_title</a>
            </li>" ;}
        ?>
        </ul>
        <!-- catagoies to be displayed -->
        <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-info">
          <a href="#" class="nav-link text-light"><h4>categories</h4></a>
            </li>
            <?php
            $select_catagories="select * from `catagories`";
            $result_catagories=mysqli_query($con,$select_catagories);
            while($row_data=mysqli_fetch_assoc($result_catagories)){
                $catagory_title=$row_data['catagory_title'];
                $catagory_id =$row_data['catagory_id'];
                echo "<li class='nav-item'>
                <a href='index.php?catagory=$catagory_id' class='nav-link  text-light'>$catagory_title</a>
            </li>" ;
            }
          ?>
          </ul>
        </div>
</div>

<!-- last child -->
 <div class="bg-info p-3 text-center">
    <p>All right reserved @- Designed by soundarya-2024</p>
 </div>
</div>
    <!--bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>
