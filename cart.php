<?php
require 'header.php';
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
                        <p class="text-muted">You Currently  have 3 item(s) in your cart</p>
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
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/bag.jpg"  alt="bag1">
                                    </td>
                                    <td>
                                        <a href="#">Gucci Bag</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        KES 3000
                                    </td>
                                    <td>
                                        Small
                                    </td>
                                    <td>
                                        <input type="Checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        $6000
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/bag.jpg"  alt="bag1">
                                    </td>
                                    <td>
                                        <a href="#">Gucci Bag</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        KES 3000
                                    </td>
                                    <td>
                                        Small
                                    </td>
                                    <td>
                                        <input type="Checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        $6000
                                    </td>
                                </tr>
                                </tbody>
                                <tbody>
                                <tr>
                                    <td>
                                        <img class="img-responsive" src="images/bag.jpg"  alt="bag1">
                                    </td>
                                    <td>
                                        <a href="#">Gucci Bag</a>
                                    </td>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        KES 3000
                                    </td>
                                    <td>
                                        Small
                                    </td>
                                    <td>
                                        <input type="Checkbox" name="remove[]">
                                    </td>
                                    <td>
                                        $6000
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">$18000</th>
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
                                    <i class="fa fa-refresh"></i>Checkout
                                </button>
                            </div>
                            <div class="float-right">
                                <button type="submit" name="update" value="update cart" class="btn btn-default">
                                    <i class="fas fa-shopping-basket"></i>Update cart
                                </button>
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
                                    <td>order sub-total</td>
                                    <th>$18000</th>
                                </tr>
                                <tr>
                                    <td>Shipping and handling</td>
                                    <td>$0 </td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>$0 </td>
                                </tr>
                                <tr class="total">
                                    <td>Total</td>
                                    <td>$18000 </td>
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


<?php
require 'footer.php';
?>