<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];

    echo "Your Name is ".$name . "<br>";
    echo "Your Email is ".$email;
}
?>