
<!DOCTYPE html>
<html>
    <head>
         <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
       
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="hostelbooking.css">
        <title>LOGIN PAGE</title>
       
      
    </head>
 
    <body>
         
        <div class="header">
           <div class="inner-header">
                <div class="logo_login" >
                    <center>
                    <a href="https://www.lifestylestores.com/in/en/" target="_blank">HOSTEL BOOKING</a>
                    </center>
                </div>
                
            </div>
        </div>
                 
        <div class="content">
            <div class="banner-image">
                <div class="inner-banner-image">
                    <center>
                    <div class="banner_login">
                          <h1> Login </h1>
                          <form action="login_script.php" method="POST">
                              
                        <div class="form-group">
                            <div>
                            <label for="firstname"> User - ID :     </label>
                            </div>
                            <div>
                                
                                <input type="number" class="form-control"  placeholder="User - ID" name="user" required >
                           
                            </div>
                        </div>
                        <div class="form-group">
                            <div>
                            <label for="firstname">Password:</label>
                            </div>
                            <div>
                                <input type="number" class="form-control" placeholder="Password" name="pass" required >
                              
                            </div>
                        </div>
                    
                        <div class="container">
            <div class="row">
                <center>
                <div class="col-xs-4">
                                   
                   
                                   </div>
            </div>
        </div>
                          
                        <button  type="submit" class="btn-danger">
                           Log In
                        </button>
                          </form>
                              
                    </div>
                    </center>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <center>
                <p>
                    Copyright © Hostel booking. All Rights Reserved | Contact Us: +91 90000 00000
                </p>
                </center>
            </div>
        </footer>
        
    </body>
</html>
