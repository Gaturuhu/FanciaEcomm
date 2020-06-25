<?php
require 'configurations.php';
require 'header.php';
include_once 'functions/functions.php';
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
                   <?php
                   if(isset($_POST['submit'])){
                       //Admin receives the message
                       $sender_name = $_POST['name'];
                       $sender_email = $_POST['email'];
                       $sender_subject = $_POST['subject'];
                       $sender_message = $_POST['message'];

                       $receiver_email = "j.gaturuhumugure@gmail.com";
                       mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                       //auto reply to the sender with this
                       $email = $_POST['email'];
                       $subject = "welcome to our website";
                       $msg = "Thanks fo sending us the message, our team will get back to you ASAP";
                       $from = "j.gaturuhumugure@gmail.com";
                       mail($email,$subject,$msg,$from);
                       echo "<h3 align='center'>Your message has been sent successfully</h3>";

                   }

                   ?>
               </div>
           </div>
       </div>
   </div>
</div>




<?php
require 'footer.php';
?>