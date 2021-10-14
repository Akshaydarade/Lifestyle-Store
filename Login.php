<?php

include "includes/header.php";
require "includes/common.php";
?>
  

         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li class="active"><a href="Login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--log in page start-->
         <br><br><br>
        <div class="container ">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                 <div class="form-group">
                            
                                     <input type="email"  class="form-control input-lg" id="mail" name="email" placeholder="Email" required>
                        </div>
                                 <div class="form-group">
                            
                                     <input type="password"  class="form-control input-lg" id="pass" name="password" placeholder="Password" required>
                        </div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </form>
                            
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="signup.php"> Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Login page end-->
       <!--Footer Start-->
       <?php
   include "includes/footer.php";
     ?>
       <!--Footer End-->
        
    </body>
</html>
