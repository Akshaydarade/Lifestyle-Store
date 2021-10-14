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
                        <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li ><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--signup page start-->
        <br> <br> <br>
         
        <div class="container ">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <h3 style="font-weight:bold">Sign Up</h3>
                    <form method="post" action="index.php">
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" id="firstname" name="firstname" placeholder="Name" >
                        </div>
                         <div class="form-group">
                            
                            <input type="email"  class="form-control" id="mail" name="email" placeholder="Email" >
                        </div>
                         <div class="form-group">
                            
                            <input type="password"  class="form-control" id="pass" name="password" placeholder="Password" >
                        </div>
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" id="city" name="city" placeholder="City" >
                        </div>
                         <div class="form-group">
                            
                            <input type="text"  class="form-control" id="contact" name="contact" placeholder="Contact" >
                        </div>
                        <div class="form-group">
                            
                            <input type="text"  class="form-control" id="add" name="address" placeholder="Address" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                            
                    </form>
                    
                </div>
            </div>
        </div>
        <!--signup page end-->
       <!--Footer Start-->
       <?php
   include "includes/footer.php";
     ?>
       <!--Footer End-->
        
    </body>
</html>


<?php
if(isset($_POST['submit'])){
    $name=$_POST['firstname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $address=$_POST['address'];
    
    $query="INSERT INTO users (name,email,password,city,contact,address)";
    $query.="values('$name','$email','$password','$city','$contact','$address');";
    $register_query=mysqli_query($connection,$query);
    if(!$register_query)
    die("Query Failed".mysqli_error($connection));
}
?>