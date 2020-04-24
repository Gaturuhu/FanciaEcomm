<?php
require 'header.php';
require 'configurations.php';
?>




















<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6"></div>
        <div class="col-md-3 col-lg-3 col-xl-3">
            <div id="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-info btn-block" name="btn_login">LOG IN</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>