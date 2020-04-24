<?php
require 'header.php';
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
                        <img src="images/bag.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/bag.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/bag.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div class="box">
                <h1 class="text-center">GUCCI WEAR</h1>
                <form action="details.php" class="form-horizontal" method="post"></form>
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
                    <label for="" class="col-md-5 control-label">Size</label>
                    <div class="col-md-7">
                        <select name="product_size" class="form-control">
                            <option>size</option>
                            <option>small</option>
                            <option>medium</option>
                            <option>large</option>
                        </select>
                    </div>
                </div>
                <p class="price">KES 3000</p>
                <p class="text-center buttons"><button class="btn btn-primary i fa fa-shopping-cart">Add to cart</button></p>
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquid amet blanditiis debitis, dolor eius esse est et harum illum maxime mollitia, provident quaerat suscipit tempora voluptates! Cupiditate, est!
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
        <div class="col sm-2.25 col-md-2.25 col-lg-2.25 col-xl-2.25">
            <p style="font-size: 30px">
                PRODUCTS YOU
                <br>
                MAY LIKE
            </p>
        </div>
        <div class="col sm-2.25 col-md-2.25 col-lg-2.25 col-xl-2.25">
            <a href="#">
                <div class="card" style="width: 12rem;">
                    <img src="images/nn.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">chondo bag</p>
                        <p class="card-text">kes 3000</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col sm-2.25 col-md-2.25 col-lg-2.25 col-xl-2.25">
            <a href="#">
                <div class="card" style="width: 12rem;">
                    <img src="images/nn.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">chondo bag</p>
                        <p class="card-text">kes 3000</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col sm-2.25 col-md-2.25 col-lg-2.25 col-xl-2.25">
            <a href="#">
                <div class="card" style="width: 12rem;">
                    <img src="images/nn.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">chondo bag</p>
                        <p class="card-text">kes 3000</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?
require 'footer.php';
?>
