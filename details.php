<?php
require 'header.php';
include_once 'functions/functions.php';
?>

<div class="container">
    <div class="col-md-12">
        <ul class="breadcrumb">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                shop
            </li>
            <li>
                <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title;?> </a>
            </li>
            <li>
                <?php echo $pro_title;?>
            </li>
        </ul>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <?php require 'sidebar.php';?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="product_images/<?php echo $pro_img1; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="product_images/<?php echo $pro_img2; ?>" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="product_images/<?php echo $pro_img3; ?>" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                < /a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="box">
                <h1 class="text-center"><?php echo $pro_title; ?></h1>

                <?php add_cart(); ?>

                <form action="details.php?add_cart=<?php echo $product_id;?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="" class="col-md-5 control-label">Quantity</label>
                    <div  class="col-md-7">
                        <select name="product_qty" id="" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-5 control-label">Size</label>
                    <div class="col-md-7">
                        <select name="product_size" class="form-control" required oninput="setCustomValidity('')"
                        oninvalid="setCustomValidity('Must pick 1 size for the product')">

                            <option disabled selected>Size</option>
                            <option>small</option>
                            <option>medium</option>
                            <option>large</option>
                        </select>
                    </div>
                </div>
                <center> <h2 class="price">Kes <?php echo $pro_price; ?> </h2></center>
                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart" name="add_cart">Add to cart</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">
            <div class="box" id="details">
                <h4>Product Details</h4>
                <p>
                  <?php $pro_desc;?>
                </p>
                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="container" id="like">
    <div class="row">
        <div class="col sm-3 col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col sm-3 col-md-3 col-lg-3 col-xl-3">
            <p style="font-size: 30px">
                PRODUCTS YOU

                MAY LIKE
            </p>
        </div>

        <?php

        $get_products = "select * from `products` order by rand() DESC LIMIT 0,3";
        $run_products = mysqli_query($conn,$get_products);
        while($row_products = mysqli_fetch_array($run_products)) {

            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_img1 = $row_products['product_img1'];
            $pro_price = $row_products['product_price'];

            echo "

            <div class='col-sm-2 col-md-2 col-lg-2 col-xl-2'>
                             
                <a href='details.php?pro_id=$pro_id'>
                    <img src='product_images/$pro_img1' style='height: 200px'>             
                </a>
                
                <div class ='text'>
                <h6><a href='details.php?pro_id=$pro_id'>$pro_title</a></h6>
                <p class ='price'> Kes $pro_price</p>
                </div>
                </div>
              
               
            
            ";
        }

        ?>

    </div>
</div>

<?php
require 'footer.php';
?>
