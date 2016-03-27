<!DOCTYPE html>
<html class="no-js">  
    <head>
        <meta charset="utf-8">
        <title>ProUI - Responsive Bootstrap Admin Template</title>
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">     
        <link rel="stylesheet" href="asset/css/plugins.css">
        <link rel="stylesheet" href="asset/css/main.css">
        <link rel="stylesheet" href="asset/css/themes.css">
        <script src="asset/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js"></script>
    </head>
    <body>

        
        <div id="login-background">
          
            <img src="img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
        
        </div>
       
        <div id="login-container" class="animation-fadeIn">
           
            <div class="login-title text-center">
                <h1 align="center"> Login Area</h1>
            </div>
            
            <div class="block push-bit">
               
                <form action="con_login.php" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                <input type="text" name="username" class="form-control input-lg" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                <input type="password" name="password" class="form-control input-lg" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-actions">
                       
                        <div class="col-xs-8 text-right">
                            <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                        </div>
                    </div>
                    
                </form>
                
 
               
            </div>
       
            <footer class="text-muted text-center">
                <small><span id="year-copy"></span> &copy; <a href="" target="_blank">STIKOM & UHAMKA</a></small>
            </footer>
           
        </div>
    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

 
        <script src="asset/js/vendor/bootstrap.min.js"></script>
        <script src="asset/js/plugins.js"></script>
        <script src="asset/js/app.js"></script>

      
        <script src="asset/js/pages/login.js"></script>
        <script>$(function(){ Login.init(); });</script>
    </body>
</html>

