<?php
require 'db.php';
?>

<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <h4>Pages</h4>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    <li><a href="cart.php">CART</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
                <hr>
                <h4>User Section</h4>
                <ul>
                    <li><a href="login.php">LOG IN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                </ul>
                <hr>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <h4>Top Product Categories</h4>
                <hr>
                <ul>
                   <?php

                   $get_p_cats = "SELECT * FROM `product_categories`";

                   $run_p_cats = mysqli_query($conn,$get_p_cats);
                   while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                       $p_cat_id = $row_p_cats['p_cat_id'];
                       $p_cat_title = $row_p_cats['p_cat_title'];


                       echo "
                        <li>
                            <a href='shop.php?p_cat_id'>
                                $p_cat_title
                            </a>
                        </li>
                       
                       ";
                   }
                   ?>
                </ul>
                <hr>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <h4>Find us</h4>
                <p>
                    <strong>Information House</strong>
                    <br>254 Lane
                    <br>Nairobi
                    <br>Kenya
                    <br>info@fanciabags.co.ke
                    <br><strong>0703417901</strong>
                </p>
                <a href="contact.php">Check out our contact page</a>
                <hr>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <h4>Get the news</h4>
                <p class="text-muted">
                    Bags are awesome. Get Yours Today.
                </p>
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="email">
                        <span class="input-group-btn">
                            <input type="submit" value="subscribe" class="btn btn-info">
                        </span>
                    </div>
                </form>
                <hr>
                <h4>Keep in touch</h4>
                <p class="social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-github"></a>
                </p>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p style="justify-content: center">&copy 2020 Coding is life</p>
            </div>
        </div>
    </div>
</div>
