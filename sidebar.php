<?php
require 'db.php';
require 'functions/functions.php';
?>

<div class="card" style="width: 16rem;">
        <div class="card-body">
        <p class="side-card-title">PRODUCT CATEGORIES</p>
            <hr>

          <p>

            <?php
            getP_cats();
            ?>

        </p>

    </div>
</div>
<br>
<br>
<div class="card">
    <div class="card-body">
        <p class="side-card-title">PRODUCT CATEGORIES</p>
        <hr>
        <?php
        getCats();
        ?>

    </div>
</div>