<?php
    if(isset($_POST['submit'])){
    include 'common/db.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $ins = "INSERT INTO teacher SET name='$name', email='$email', password='$password'";
    if(mysqli_query($con,$ins)){
        header('location:form.php');
    }
    mysqli_close($con);
    }
?>