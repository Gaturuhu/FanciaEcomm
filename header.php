<?php
require 'configurations.php';
require 'functions/functions.php';

?>
<?php
if(isset($_GET['pro_id'])){
    $product_id = $_GET['pro_id'];
    $get_product = "select * from `products` where product_id = '$product_id' ";
    $run_product = mysqli_query($conn, $get_product);
    $row_product = mysqli_fetch_array($run_product);

    $p_cat_id = $row_product['p_cat_id'];
    $pro_title = $row_product['product_title'];
    $pro_price = $row_product['product_price'];
    $pro_desc = $row_product['product_desc'];
    $pro_img1 = $row_product['product_img1'];
    $pro_img2 = $row_product['product_img2'];
    $pro_img3 = $row_product['product_img3'];

    $get_p_cat = "select * from `product_categories` where p_cat_id = '$p_cat_id'";
    $run_p_cat = mysqli_query($conn,$get_p_cat);
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    $p_cat_title = $row_p_cat['p_cat_title'];

}
?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles-->
    <link rel="stylesheet" href="styles.css">
    <!--Font awesome Link-->
    <script src="https://kit.fontawesome.com/1b3f5a09b7.js" crossorigin="anonymous"></script>

    <title>FANCIA BAGS & DESIGNS</title>
</head>
<body>
<div id="top">  <!--top menu begin-->
    <div class="container"><!--container begin-->
        <div class="row"><!--row start-->
            <div class="col-md-6 offer"><!-- col-md-6 offer start-->
                <a href="login.php" class="btn btn-success btn-sm">Welcome</a>
                <a href="">SHOPPING CART:<?php total_price(); ?> | <?php items(); ?> ITEMS</a>
            </div><!-- col-md-6 offer end-->
            <div class="col-md-6"> <!--col-md 6 begin-->
                <ul class="menu"> <!--menu begin-->
                    <li>
                        <a href="customer_register.php">Register</a>
                    </li>
                    <li>
                        <a href="my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Go To Cart</a>
                    </li>
                    <li>
                        <a href="login.php">Customer Login</a>
                    </li>
                </ul><!--menu end-->
            </div> <!--col-md 6 end-->
        </div><!--row end-->

    </div><!--container end-->
</div><!--top menu end-->
<!--    navbar start-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!--<a class="navbar-brand" href="index.php"><img src="images/weblogo.png" alt=""></a>-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="my_account.php">My Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
        <div class="search">
            <form method="get" action="results.php" class="form-inline my-2 my-lg-0">
                <input type="text" class="form-control mr-sm-2" placeholder="Search" name="user_query" required>
                <span class="input-group-btn">
                            <button type="submit" name="search" value="search" class="btn btn-outline-success my-2 my-sm-0" >
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
            </form>
        </div>
        <a href="cart.php" class="btn navbar-btn btn-primary right">
            <i class="fa fa-shopping-cart"></i>
            <span><?php items();?> ITEMS IN CART</span>
        </a>
    </div>
</nav>
<!--    navbar end-->