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
                My Account
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <center>
                        <img src="images/model.jpg" alt="logo-profile" style="height: 200px">
                        <br>
                        <br>
                        <h6 align="center" class="panel-title">
                            Name: Gaturuhu
                        </h6>
                    </center>
                    <hr>
                </div>
                <div class="panel-body">
                    <nav>
                        <li class="<?php if(isset($_GET['my_orders'])){echo "active";} ?>">
                            <a href="my_account.php?my_orders">
                                <i class="fa fa-list"></i> My Orders
                            </a>
                        </li>
                        <br>
                        <li class="<?php if(isset($_GET['pay_offline'])){echo "active";} ?>">
                            <a href="my_account.php?pay_offline">
                                <i class="fa fa-bolt"></i> Pay offline
                            </a>
                        </li>
                        <br>
                        <li class="<?php if(isset($_GET['edit_account'])){echo "active";} ?>">
                            <a href="my_account.php?edit_account">
                                <i class="fa fa-pencil"></i> Edit Account
                            </a>
                        </li>
                        <br>
                        <li class="<?php if(isset($_GET['change_pass'])){echo "active";} ?>">
                            <a href="my_account.php?change_pass">
                                <i class="fa fa-user"></i> Change Password
                            </a>
                        </li>
                        <br>
                        <li class="<?php if(isset($_GET['delete_account'])){echo "active";} ?>">
                            <a href="my_account.php?delete_account">
                                <i class="fa fa-trash-o"></i> Delete Account
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> Log Out
                            </a>
                        </li>
                        <br>


                    </nav>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="box">
                <?php

                if(isset($_GET['my_orders']))
                    include("my_orders.php");

                ?>
                <?php

                if(isset($_GET['pay_offline']))
                    include("pay_offline.php");
                ?>
                <?php

                if(isset($_GET['edit_account']))
                    include("edit_account.php");
                ?>
                <?php

                if(isset($_GET['change_pass']))
                    include("change_pass.php");
                ?>
                <?php

                if(isset($_GET['delete_account']))
                    include("delete_account.php");
                ?>


            </div>
        </div>
    </div>


</div>

<?php
require 'footer.php';
?>
