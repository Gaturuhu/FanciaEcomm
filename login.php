<?php
require 'configurations.php';
require 'header.php';

$email=$password='';
$email_err=$password_err='';

//grab data from form
if(isset($_POST['btn_login'])) {
    //clean data
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email_err = "Fill in this error";
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = "Fill this field";
    }
    $password = md5($password);
    $sql = "SELECT `id`, `username`, `phone`, `email`, `password` FROM `customers` WHERE email='$email' AND password='$password'";
    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results) > 0) {
        while ($rows = mysqli_fetch_assoc($results)) {
            session_start();
            $id = $rows['id'];
            $email = $rows['email'];
            $_SESSION['id'] = $id;
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;
            header("location:index.php");
            exit();
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
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button class="btn btn-info btn-block" name="btn_login">LOG IN</button>
                            <p>or</p>
                        <a href="signup.php">CREATE AN ACCOUNT</a>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
