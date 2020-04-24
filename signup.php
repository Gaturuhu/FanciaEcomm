<?php
require 'configurations.php';
require 'header.php';
$username=$phone=$email=$password1=$password2='';
$username_err=$phone_err=$email_err=$password1_err=$password2_err='';
if(isset($_POST['btn_signup'])){
//2.clean data
    if (isset($_POST['username'])){
    $username = $_POST['username'];
    }else{
        $username_err = "Fill this field";
    }
    if (isset($_POST['phone'])){
        $phone=$_POST['phone'];
    }else{
        $phone_err="Fill in this field";
    }
    if (isset($_POST['email'])){
        $email=$_POST['email'];
    }else{
        $email_err="Fill in this field";
    }
    if (isset($_POST['password1'])){
        $password1=$_POST['password1'];
    }else{
        $phone_err="Fill in this field";
    }if (isset($_POST['password2'])){
        $password2=$_POST['password2'];
    }else{
        $password2="Fill in this field";
    }
    //check for password match
    if ($password1 != $password2){
        $password2_err = 'Password did not match!';
    }else {
        //check if users exists
        $sql = "SELECT * FROM `customers` WHERE email='$email'";
        $results = mysqli_query($conn, $sql);
        if (mysqli_num_rows($results) > 0) {
            echo "User exists";
            header("location:login.php");
            exit();

        }
        $password1 = md5($password1);

        //add user into the database
        $sql="INSERT INTO `customers`(`id`, `username`, `phone`, `email`, `password`) VALUES (NULL,'$username','$phone','$email','$password1')";
        if (mysqli_query($conn, $sql)) {
            header("location:login.php");
            exit();
        }else{
            echo "Error:".mysqli_error($conn);

        }
    }

}
?>








<!--Reg form-->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-3 col-xl-3"></div>
        <div class="col-md-6 col-lg-6 col-xl-6"></div>
        <div class="col-md-3 col-lg-3 col-xl-3">
            <div id="form-section">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone number</label>
                            <input type="number" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password1" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>

                        <button class="btn btn-info btn-block" name="btn_signup">CREATE ACCOUNT</button>
                        <p>Already have an account?</p>
                        <a href="login.php" style="text-align: center">LOGIN</a>
                    </fieldset>
                </form>
        </div>
    </div>
</div>
<li>name</li>
<li>school</li>


