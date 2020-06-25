<?php
$servername='localhost';
$username='root';
$password='';
$db_name='fancia_ecom';
$conn = mysqli_connect($servername,$username,$password,$db_name);
//check if conn is successful
if(!$conn) {
    die("connection to the database unsuccessful<br>" . mysqli_connect_error());
}
?>