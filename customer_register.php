<?php
require 'configurations.php';
require 'header.php';
?>
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Register
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-3">
                <?php
                require 'sidebar.php';
                ?>
            </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-header">
                        <center>
                            <h2>Register a new account</h2>
                            <p class="text-muted">
                                If you have questions, feel free to contact us. our customer service works <strong>24/7</strong>
                            </p>
                        </center>
                        <form action="customer_register.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="">Your Name</label>
                                <input type="text" class="form-control" name="c_name" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Email</label>
                                <input type="text" class="form-control" name="c_email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Password</label>
                                <input type="password" class="form-control" name="c_password" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Country</label>
                                <input type="text" class="form-control" name="c_country" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your City</label>
                                <input type="text" class="form-control" name="c_city" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Contact</label>
                                <input type="text" class="form-control" name="c_contact" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Address</label>
                                <input type="text" class="form-control" name="c_address" required>
                            </div>
                            <div class="form-group">
                                <label for="">Your Profile photo</label>
                                <input type="file" class="form-control form-height-custom" name="c_image" required>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary">
                                    <i class="fa fa-fa-user-md"></i> Register
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php
require 'footer.php';
?>