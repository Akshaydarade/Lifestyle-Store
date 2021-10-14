<?php

include "includes/header.php";
require "includes/common.php";


if (isset($_SESSION['email'])){
    header('location:products.php');
}
?>
        
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand active" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li class=""><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Home page start-->
        <div id="banner_image">
            <div class="container">
                <div id="banner_content">
                     <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands.</p>
                    
                    <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                </div>
                
            </div>
            
        </div>
         
       
        <!--Home page end-->
       <!--Footer Start-->
       <?php
   include "includes/footer.php";
     ?>
       <!--Footer End-->
        
    </body>
</html>
