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
                Contact Us
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
                       <h2>Feel Free to Contact us</h2>
                       <p class="text-muted">
                           If you have questions, feel free to contact us. our customer service works <strong>24/7</strong>
                       </p>
                   </center>
                   <form action="contact.php" method="post">

                       <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" class="form-control" name="name" required>
                       </div>
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="text" class="form-control" name="email" required>
                       </div>
                       <div class="form-group">
                           <label for="">Subject</label>
                           <input type="text" class="form-control" name="subject" required>
                       </div>
                       <div class="form-group">
                           <label for="">Message</label>
                           <textarea name="message" class="form-control"></textarea>
                       </div>
                       <div class="text-center">
                           <button type="submit" name="submit" class="btn btn-primary">
                           <i class="fa fa-fa-user-md"></i>Send Message
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