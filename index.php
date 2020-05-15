<?php
require 'db.php';
require 'header.php';
require 'functions/functions.php';
?>
<!--    carousel start-->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slider-02.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-01.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
                <div class="carousel-item">
                    <img src="images/slider-03.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<!--    carousel end-->
<!--    simple advantages tag-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="icon">
                    <i class="fa fa-heart"></i>
                    <h3>Value</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut dolores illo itaque maxime modi qui quia quos voluptate voluptatibus?</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="icon">
                    <i class="fa fa-tag"></i>
                    <h3>Pricing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corporis cumque dignissimos, eligendi ipsum minus necessitatibus nisi omnis possimus repellendus.</p>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="icon">
                    <i class="fa fa-thumbs-up"></i>
                    <h3>Guarantee</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eos itaque nobis omnis optio rem totam unde voluptas. Deleniti, vero.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div id="box">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h2>OUR LATEST PRODUCTS</h2>
                </div>
            </div>
        </div>
    </div>
<!--store front-->
 <div id="content" class="container">
     <div class="row">
         <?php
         getPro();
         ?>
     </div>
 </div>

<?php
require 'footer.php';
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>