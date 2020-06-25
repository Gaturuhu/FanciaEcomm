<?php
include_once 'configurations.php';
include_once 'header.php';
include_once 'functions/functions.php';
?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Cart
                </li>
            </ul>
        </div>
        <div class="row">
            <div id="cart" class="col-md-8">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart/form-data">
                        <h1>Shopping Cart</h1>

                        <?php
                        $ip_add = getRealIpUser();
                        $select_cart = "select * from `cart` where ip_add='$ip_add'";
                        $run_cart = mysqli_query($conn,$select_cart);
                        $count = mysqli_num_rows($run_cart);
                        ?>

                        <p class="text-muted">You Currently  have <?php echo $count; ?> item(s) in your cart</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit price</th>
                                        <th>Size</th>
                                        <th colspan="1">Delete</th>
                                        <th colspan="2">Sub-total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php

                                $total = 0;
                                while($row_cart = mysqli_fetch_array($run_cart)){
                                    $pro_id = $row_cart['p_id'];
                                    $pro_size = $row_cart['size'];
                                    $pro_qty = $row_cart['qty'];

                                    $get_products = "select * from `products` where product_id = '$pro_id'";
                                    $run_products = mysqli_query($conn,$get_products);
                                    while($row_products = mysqli_fetch_array($run_products)){

                                        $product_title = $row_products['product_title'];
                                        $product_img1 = $row_products['product_img1'];
                                        $only_price = $row_products['product_price'];
                                        $sub_total = $row_products['product_price']*$pro_qty;
                                        $total += $sub_total;



                                ?>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="product_images/<?php echo $product_img1; ?>"  alt="bag1">
                                    </td>
                                    <td>
                                        <a href="details.php?pro_id=$pro_id"><?php echo $product_title; ?></a>
                                    </td>
                                    <td>
                                        <?php echo $pro_qty; ?>
                                    </td>
                                    <td>
                                        <?php echo $only_price; ?>
                                    </td>
                                    <td>
                                        <?php echo $pro_size; ?>
                                    </td>
                                    <td>
                                        <input type="Checkbox" name="remove[]" value ="<?php $pro_id; ?>" >
                                    </td>
                                    <td>
                                        KSH <?php echo $sub_total; ?>
                                    </td>
                                </tr>

                                    <?php } } ?>

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">KSH <?php echo $total; ?></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <hr>
                        <div class="box-footer">
                            <div class="float-left">
                                <a href="shop.php" class="btn btn-default">
                                   <i class="fa fa-chevron-left"></i>Continue Shopping
                                </a>
                            </div>
                            <div class="float-right">
                                <button type="submit" name="update" value="update cart" class="btn btn-success">
                                    <i class="fa fa-refresh"></i>Update
                                </button>
                                <a href="checkout.php" class = "btn btn-primary">
                                    Proceed Checkout <i class=" fa fa-chevron-right"></i>
                                </a>
                            </div>

                        </div>
                    </form>
                </div>
        </div>
            <div id="cart" class="col-md-4">
                <div id="order-summary" class="card">
                    <div class="card-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shipping and additional costs are calculated based on value you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>order All sub-total</td>
                                    <th>KSH <?php echo $total;?></th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <td>0 </td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>KSH 0 </td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td>KSH <?php echo $total; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <hr>

<?php
function update_cart(){
    global $conn;
    if(isset($_POST['update'])){
        foreach($_POST['remove'] as $remove_id){
            $delete_product = "delete from `cart` where p_id='$remove_id'";
            $run_delete = mysqli_query($conn,$delete_product);

            if($run_delete){
                echo "<script>window.open('cart.php','_self')</script>";
            }
        }

    }
}
echo $up_cart = update_cart();

?>
    <div class="container" id="like">
        <div class="row">
            <div class="col sm-3 col-md-3 col-lg-3 col-xl-3"></div>
            <div class="col sm-2.25 col-md-2.25 col-lg-2.25 col-xl-2.25">
                <p style="font-size: 30px">
                    PRODUCTS YOU
                    <br>
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