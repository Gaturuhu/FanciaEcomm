<?php
require 'db.php';
require 'header.php';

?>

<div class="carousel-inner">
    <div class="carousel-item active">
        <?php
        $get_slides="select * from slider LIMIT 0,3";
        $run_slides=mysqli_query($conn,$get_slides);
        while($row_slides=mysqli_fetch_array($run_slides)){
            $slide_name=$row_slides['slide_name'];
            $slide_image=$row_slides['slide_image'];

            echo"
                    
                    <div class='item active'>
                    <img src='images/$slide_image' alt='' style='height: 300px'>
                    </div>
                    ";
        }
        ?>
        <div class="carousel-caption d-none d-md-block"></div>
    </div>


