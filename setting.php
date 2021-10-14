
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
                        <li ><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li class="active"><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li ><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--setting page start-->
        <br><br><br>
         
        <div class="container ">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <h3 style="font-weight:bold">Change Password</h3>
                    <form>
                        <div class="form-group">
                            
                            <input type="password"  class="form-control" id="firstname" name="firstname" placeholder="Old Password" >
                        </div>
                         <div class="form-group">
                            
                            <input type="password"  class="form-control" id="mail" name="email" placeholder="New Password" >
                        </div>
                         <div class="form-group">
                            
                            <input type="password"  class="form-control" id="pass" name="password" placeholder="Re-type New Password" >
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Change</button>
                            
                    </form>
                    
                </div>
            </div>
        </div>
        <!--setting page end-->
       <!--Footer Start-->
       <?php
   include "includes/footer.php";
     ?>
       <!--Footer End-->
        
    </body>
</html>
