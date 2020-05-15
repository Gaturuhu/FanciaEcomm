<?php
$db = mysqli_connect("localhost","root","","fancia_ecom");

function getPro(){
    global $db;
    $get_product = "SELECT * FROM `products` order by 1 DESC LIMIT 0,8";

    $run_products = mysqli_query($db,$get_product);

    while($row_products=mysqli_fetch_array($run_products)){

        $pro_id = $row_products['product_id'];
        $pro_title =$row_products['product_title'];
        $pro_price =$row_products['product_price'];
        $pro_img1 =$row_products['product_img1'];


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
//begin get pcats function
function getP_cats(){
    global $db;

    $get_p_cats = "SELECT * FROM `product_categories`";

    $run_p_cats = mysqli_query($db, $get_p_cats);

    while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];


        echo"
        <li style='list-style-type: none; padding-bottom: 10px;'>
            <a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a>
        </li>
        
        ";
    }
}

//

function getCats(){
    global $db;

    $get_cats = "SELECT * FROM `categories`";

    $run_p_cats = mysqli_query($db, $get_cats);

    while ($row_cats=mysqli_fetch_array($run_p_cats)){
        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_titile'];


        echo"

        <li style='list-style-type: none; padding-bottom: 10px;'>
            <a href='shop.php?cat=$cat_id'>$cat_title</a>
        </li>
        
        ";
    }
}

//getpcatpro function begin
function getpcatpro(){
    global $db;

    if(isset($_GET['p_cat'])){
        $p_cat_id = $_GET['p_cat'];

        $get_p_cat = "SELECT * FROM `product_categories` WHERE p_cat_id = '$p_cat_id'";

        $run_p_cat = mysqli_query($db,$get_p_cat);

        $row_p_cat = mysqli_fetch_array($run_p_cat);

        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "SELECT * FROM `products` WHERE p_cat_id = '$p_cat_id'";

        $run_products = mysqli_query($db,$get_products);

        $count = mysqli_num_rows($run_products);

        if($count == 0){

            echo "
            <div class ='box'>
                <h1>No product found in this category</h1>
            </div>
            ";

        }else{
            echo"
            <div class ='box'>
                <h1>$p_cat_title</h1>
                <p>$p_cat_desc</p>
            </div>
            ";
        }
        while($row_products = mysqli_fetch_array($run_products)){
            $pro_id = $row_products['product_id'];
            $pro_title =$row_products['product_title'];
            $pro_price =$row_products['product_price'];
            $pro_img1 =$row_products['product_img1'];

            echo "
            <div class='col-md-3 col-sm-6 center-responsive'>
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
function getcatpro(){
    global $db;

    if(isset($_GET['cat'])){

        $cat_id = $_GET['cat'];
        $get_cat = "SELECT * FROM `categories` WHERE cat_id = '$cat_id'";
        $run_cat = mysqli_query($db, $get_cat);

        $row_cat = mysqli_fetch_array($run_cat);
        $cat_title = $row_cat['cat_titile'];
        $cat_desc = $row_cat['cat_desc'];
        $get_cat = "SELECT * FROM `products` WHERE cat_id = '$cat_id'";

        $run_products = mysqli_query($db,$get_cat);

        $count = mysqli_num_rows($run_products);

        if($count == 0){
            echo"
            <div class ='box'>
            <h1>No product found in this category</h1>
            
            </div>
            
            ";
        }else{
            echo"
            <div>
            <h1> $cat_title</h1>
            <p>$cat_desc</p>
            </div>
            
            ";
        }





    }
}


//getcatpro function end




