<?php
$db = mysqli_connect("localhost","root","","fancia_ecom");

// Get realIpUser function start
function getRealIpUser(){
    switch (true) {
        case(!empty($_SERVER['HTTP_X_REAL_IP'])) :return $_SERVER['HTTP_X_REAL_IP'];
        case(!empty($_SERVER['HTTP_CLIENT_IP'])) :return $_SERVER['HTTP_CLIENT_IP'];
        case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) :return $_SERVER['HTTP_X_FORWARDED_FOR'];

        default :return $_SERVER['REMOTE_ADDR'];
    }
}
function add_cart(){
        global $db;
        if (isset($_GET['add_cart'])) {

            $ip_add = getRealIpUser();
            $p_id = $_GET['add_cart'];
            $product_qty = $_POST['product_qty'];
            $product_size = $_POST['product_size'];
            $check_product = "select * from `cart` where ip_add= '$ip_add' AND p_id = '$p_id'";

            $run_check = mysqli_query($db, $check_product);

            if (mysqli_num_rows($run_check) > 0) {

                echo "<script>alert('This product has already been added in cart')</script>";
                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            } else {
                $query = "Insert into `cart` (p_id,ip_add,qty,size) values ('$p_id','$ip_add','$product_qty','$product_size')";
                $run_query = mysqli_query($db, $query);

                echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
            }

        }

    }

//end add_cart function


//function getpro start
    function getPro()
    {
        global $db;
        $get_product = "SELECT * FROM `products` order by 1 DESC LIMIT 0,8";

        $run_products = mysqli_query($db, $get_product);

        while ($row_products = mysqli_fetch_array($run_products)) {

            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];


            echo "
       
        <div class='col-md-3 col-sm-6'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='product_images/$pro_img1' style='height: 350px; width: 17rem;'>                    
                 </a>
                 <div class='text'>
                    <h6> <center>
                             <a href='details.php?pro_id=$pro_id'>
                             $pro_title
                             </a>    
                             </center>               
                    </h6> 
                    <p class='price'>
                        <center><strong><u>KES. $pro_price</u></strong></center> 
                     </p> 
                    <p class='button'>
                        <a class='btn btn-success' href='details.php?pro_id=$pro_id'>
                       
                           View details
                           
                        </a>
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                            <i class=' fa fa-shopping-cart'>Add to Cart</i>
                        </a>
                    </p>
                    
                    
                 </div>
            
            </div>

        </div>



        ";
        }
    }

//begin get pcats function
    function getP_cats()
    {
        global $db;

        $get_p_cats = "SELECT * FROM `product_categories`";

        $run_p_cats = mysqli_query($db, $get_p_cats);

        while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
            $p_cat_id = $row_p_cats['p_cat_id'];
            $p_cat_title = $row_p_cats['p_cat_title'];


            echo "
        <li style='list-style-type: none; padding-bottom: 10px;'>
            <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
        </li>
        
        ";
        }
    }

//

    function getCats()
    {
        global $db;

        $get_cats = "SELECT * FROM `categories`";

        $run_p_cats = mysqli_query($db, $get_cats);

        while ($row_cats = mysqli_fetch_array($run_p_cats)) {
            $cat_id = $row_cats['cat_id'];
            $cat_title = $row_cats['cat_titile'];


            echo "

        <li style='list-style-type: none; padding-bottom: 10px;'>
            <a href='shop.php?cat=$cat_id'>$cat_title</a>
        </li>
        
        ";
        }
    }

//getpcatpro function begin
    function getpcatpro()
    {
        global $db;

        if (isset($_GET['p_cat'])) {
            $p_cat_id = $_GET['p_cat'];

            $get_p_cat = "SELECT * FROM `product_categories` WHERE p_cat_id = '$p_cat_id'";

            $run_p_cat = mysqli_query($db, $get_p_cat);

            $row_p_cat = mysqli_fetch_array($run_p_cat);

            $p_cat_title = $row_p_cat['p_cat_title'];

            $p_cat_desc = $row_p_cat['p_cat_desc'];

            $get_products = "SELECT * FROM `products` WHERE p_cat_id = '$p_cat_id'";

            $run_products = mysqli_query($db, $get_products);

            $count = mysqli_num_rows($run_products);

            if ($count == 0) {

                echo "
            <div class ='box'>
                <h1>No product found in this category</h1>
            </div>
            ";

            } else {
                echo "
            <div class ='box'>
                <h1>$p_cat_title</h1>
                <p>$p_cat_desc</p>
            </div>
            ";
            }
            while ($row_products = mysqli_fetch_array($run_products)) {
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_img1 = $row_products['product_img1'];

                echo "
            <div class='col-md-3 col-sm-6'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img class='img-responsive' src='product_images/$pro_img1' style='height: 350px; width: 17rem;'>                    
                 </a>
                 <div class='text'>
                    <h6> <center>
                             <a href='details.php?pro_id=$pro_img1' >
                             $pro_title
                             </a>    
                             </center>               
                    </h6> 
                    <p class='price'>
                        <center><strong><u>KES. $pro_price</u></strong></center> 
                     </p> 
                    <p class='button'>
                        <a class='btn btn-success' href='details.php?pro_id=$pro_id'>
                        
                            View details
                        </a>
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
                            <i class=' fa fa-shopping-cart'>Add to Cart</i>
                        </a>
                    </p>
                    
                    
                 </div>
            
            </div>

        </div>
            
            ";


            }


        }


    }

//getpcatpro function end

//getcatpro function begin
    function getcatpro()
    {
        global $db;

        if (isset($_GET['cat'])) {

            $cat_id = $_GET['cat'];
            $get_cat = "SELECT * FROM `categories` WHERE cat_id = '$cat_id'";
            $run_cat = mysqli_query($db, $get_cat);

            $row_cat = mysqli_fetch_array($run_cat);
            $cat_title = $row_cat['cat_titile'];
            $cat_desc = $row_cat['cat_desc'];
            $get_cat = "SELECT * FROM `products` WHERE cat_id = '$cat_id' LIMIT 0,6";

            $run_products = mysqli_query($db, $get_cat);

            $count = mysqli_num_rows($run_products);

            if ($count == 0) {
                echo "
            <div class ='box'>
            <h1>No product found in this category</h1>
            
            </div>
            
            ";
            } else {
                echo "
            <div>
            <h1> $cat_title</h1>
            <p>$cat_desc</p>
            </div>
            
            ";
            }
            while ($row_products = mysqli_fetch_array($run_products)) {

                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_price = $row_products['product_price'];
                $pro_desc = $row_products['product_desc'];
                $pro_img1 = $row_products['product_img1'];

                echo "
            <div class='col-md-3 col-sm-6'>
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
    }

//getcatpro function end

//items function start

    function items()
    {
        global $db;
        $ip_add = getRealIpUser();
        $get_items = "select * from `cart` where ip_add ='$ip_add'";
        $run_items = mysqli_query($db, $get_items);
        $count_items = mysqli_num_rows($run_items);

        echo $count_items;
    }

//items function end

//total_price function start

    function total_price()
    {
        global $db;
        $ip_add = getRealIpUser();

        $total = 0;
        $select_cart = "select * from `cart` where ip_add = '$ip_add'";
        $run_cart = mysqli_query($db, $select_cart);

        while ($record = mysqli_fetch_array($run_cart)) {

            $pro_id = $record['p_id'];
            $pro_qty = $record['qty'];
            $get_price = "select * from `products` where product_id = '$pro_id'";
            $run_price = mysqli_query($db, $get_price);
            while ($row_price = mysqli_fetch_array($run_price)) {

                $sub_total = $row_price['product_price'] * $pro_qty;
                $total += $sub_total;
            }

        }
        echo "KSH " . $total;
    }


//total_price function end




