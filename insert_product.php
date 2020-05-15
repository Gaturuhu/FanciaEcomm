<?php
require 'db.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom styles-->
    <link rel="stylesheet" href="styles.css">
    <!--Font awesome Link-->
    <script src="https://kit.fontawesome.com/1b3f5a09b7.js" crossorigin="anonymous"></script>
    <title>Insert Products</title>
</head>
<body>
<div class="row">
     <div class="col-lg-12">
         <ol class="breadcrumb">
             <li class="active">
                 <i class="fa fa-dashboard">Dashboard/Insert products
                 </i>
             </li>
         </ol>
     </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5 class="panel-title">

                        <i class="fa fa-money fa-fw"></i> Insert Product

                    </h5>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel-body">
            <form method="post" class="form-horizontal" enctype="multipart/form-data">
                <div class="form-group">
                        <label class="col-md-3 control-label">Product Title</label>
                        <div>
                            <input name="product_title" type="text" class="form-control" required>
                        </div>
                </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Category</label>
                        <div>
                            <select name="product_cat"  class="form-control" required>

                                <option>Select a category</option>
                                <?php

                                $sql= "SELECT * FROM `product_categories`";
                                $run_p_cats=mysqli_query($conn,$sql);

                                while($row=mysqli_fetch_assoc($run_p_cats)){

                                    $p_cat_id=$row['p_cat_id'];
                                    $p_cat_title=$row['p_cat_title'];

                                    echo"
                                     <option value='$p_cat_id'>$p_cat_title</option>
                                    
                                     ";
                                }
                                ?>
                            </select>
                        </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Category</label>
                    <div>
                        <select name="cat"  class="form-control">

                            <option>Select a category</option>
                            <?php

                            $get_cat= "SELECT * FROM `categories`";
                            $run_cat=mysqli_query($conn,$get_cat);

                            while($row=mysqli_fetch_assoc($run_cat)){

                                $cat_id=$row['cat_id'];
                                $cat_title=$row['cat_titile'];

                                echo"
                                     <option value='$cat_id'>$cat_title</option>
                                    
                                     ";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Product Image 1</label>
                    <div>
                        <input name="product_img1" type="file" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Product Image 2</label>
                    <div>
                        <input name="product_img2" type="file" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Product Image 3</label>
                    <div>
                        <input name="product_img3" type="file" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Product price</label>
                    <div>
                        <input name="product_price" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Product keywords</label>
                    <div>
                        <input name="product_keywords" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Product Desc</label>
                    <div>
                        <textarea name="product_desc" cols="19" rows="16" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div>
                        <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



</body>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>

<?php
if(isset($_POST['submit'])){

    $product_title=$_POST['product_title'];
    $product_cat=$_POST['product_cat'];
    $cat=$_POST['cat'];
    $product_price=$_POST['product_price'];
    $product_keywords=$_POST['product_keywords'];
    $product_desc=$_POST['product_desc'];

    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];

    $temp_name1= $_FILES['product_img1']['tmp_name'];
    $temp_name2= $_FILES['product_img2']['tmp_name'];
    $temp_name3= $_FILES['product_img3']['tmp_name'];


    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");

    $insert_product="INSERT INTO `products`(`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES 
(NULL,'$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc')";


    $run_product=mysqli_query($conn,$insert_product);
    if($run_product){
        echo"<script>alert('Product added successfully')</script>";
        echo "<script>window.open('insert_product.php','_self')</script>";
    }


}

?>


