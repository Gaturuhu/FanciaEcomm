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
                <h1 align="center">Please confirm your Payment</h1>
                <form action="confirm.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Invoice No: </label>
                        <input type="text" class="form-control" name="invoice_no" required>
                    </div>
                    <div class="form-group">
                        <label>Amount Sent: </label>
                        <input type="text" class="form-control" name="amount_sent" required>
                    </div>
                    <div class="form-group">
                        <label>Select Payment Method: </label>
                        <select name="select_payment_mode" class="form-control">
                            <option>Select payment Mode</option>
                            <option>Back code</option>
                            <option>UBL / OMI PAISA</option>
                            <option>Easy Pay</option>
                            <option>Western Union</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Transaction / Reference ID: </label>
                        <input type="text" class="form-control" name="ref_no" required>
                    </div>
                    <div class="form-group">
                        <label>Payment Date </label>
                        <input type="text" class="form-control" name="date" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg">
                            <i class="fa fa-user-md">Confirm Payment</i>
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