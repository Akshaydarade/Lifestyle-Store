<?php

include "includes/common.php";

if(isset($_POST['submit'])){

    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $query="SELECT id FROM users where email=$email and password=$password";
    $result=mysqli_query($connection,$query);

    

    if(mysqli_num_rows($result)==0){
         echo("No Such User Found ");
    }
    else{
        $row=mysqli_fetch_array($result);
        $_SESSION['email']=$row['email'];
        $_SESSION['id']=$row['id'];
        header('location:product.php');
    }
}


?>