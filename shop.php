<?php
include_once 'header.php';
include_once 'functions/functions.php';
?>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        shop
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <?php
                require 'sidebar.php';
                ?>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9">

                <?php

                    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat'])){
                echo "
                
                
                <div class='box'>
                    <h1>Shop</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam consequatur fuga fugiat laborum m
                        olestiae odio quidem reprehenderit veritatis? Assumenda atque minima nulla praesentium! Dignissimos
                    </p>
                    <hr>
                    ";
                         }
                        }
                ?>
                <div class="row">
                    <?php
                    $per_page = 6;

                    if(!isset($_GET['p_cat'])) {
                        if (!isset($_GET['cat'])) {


                            if(isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }else{
                                    $page=1;
                                }
                            $start_from = ($page-1) * $per_page;

                                $get_products = "SELECT * FROM `products` ORDER by 1 DESC LIMIT $start_from,$per_page";
                                $run_products = mysqli_query($conn, $get_products);

                                while($row_products = mysqli_fetch_array($run_products)){

                                    $pro_id = $row_products['product_id'];
                                    $pro_title =$row_products['product_title'];
                                    $pro_price =$row_products['product_price'];
                                    $pro_img1 =$row_products['product_img1'];

                                    echo"
                                    <div class='col-md-4 col-sm-6 center-responsive'>
                                        <div class='product'>
                                            <a href='details.php?pro_id=$pro_id'>
                                                <img class='img-responsive' src='product_images/$pro_img1' style='height: 350px; width: 17rem'>
                                            </a>
                                            
                                            <div class='text'>
                                                <h6> <center>
                                                <a href='details.php?pro_id=$pro_id'>$pro_title</a>                                         
                                                </center></h6>
                                                <p class='price'>
                                                    <center><strong><u>KES. $pro_price</u></strong></center>
                                                </p>
                                                <p class='button'>
                                                    <a class='btn btn-success' href='details.php?pro_id=$pro_id'>
                                                      View details
                                                    </a>   
                                                    <a class='btn btn-primary' href='details.php?pro_id'>
                                                      <i class='fa fa-shopping-cart'></i>Add To Cart
                                                    </a>                                                   
                                                </p>
                                            </div>
                                        
                                        
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    ";
                                }

                            }


                            ?>

                </div>
                <center>
                    <ul class="pagination">
                        <?php
                        $query = "SELECT * FROM `products`";
                        $result = mysqli_query($conn, $query);
                        $total_records = mysqli_num_rows($result);
                        $total_pages = ceil($total_records/$per_page);

                        echo"
                        <li>
                            <a href='shop.php?page=1'>".'First page'."</a>
                        </li>                       
                        
                        ";
                        for ($i=1; $i<=$total_pages; $i++){
                            echo "
                            <li>
                                 <a href='shop.php?page=".$i."'>".$i."</a>
                            </li>
                            ";
                        };

                        echo "
                        <li>
                                 <a href='shop.php?page=$total_pages'>".'Last Page'."</a>
                            </li>
                        
                        ";


                        }
                        ?>
                    </ul>
                </center>

                    <?php

                    getpcatpro();

                    getcatpro();

                    ?>

            </div>
        </div>
    </div>
</div>


<?php
require 'footer.php';
?>

