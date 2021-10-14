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
                        <li class="active"><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li class=""><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                        <li ><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Cart page start-->
        <br> <br> <br>
        <br> <br> <br>
         
        <div class="container tablemargin">
            
                <table class="table table-hover table-responsive">
                    <tbody>
                        <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th>      </th> </tr>
                        <tr><td></td><td></td><td></td><td></td></tr>
                        <tr><td></td><td>Total</td> <td>Rs 0/-</td><td><a  href="success.php" class="btn btn-primary">Confirm Order</a></td></tr>
                    </tbody>
                        
                        
                </table>
        </div>
            
            
        
        <!--Cart page end-->
       <!--Footer Start-->
     <?php
   include "includes/footer.php";
     ?>
       <!--Footer End-->
        
    </body>
</html>
