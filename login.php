<?php
    session_start();
    session_destroy();
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | InstaLink Manager</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div id="wrapper" class="wrapper">        
        <div class="fxt-template-animation fxt-template-layout5">
            <div class="fxt-bg-img fxt-none-767" data-bg-image="assets/img/figure/bg5-l.jpg">
                <div class="fxt-intro">
                    <div class="sub-title">Welcome To</div>
                    <h1>InstaLink Manager</h1>
                    <p>A one-of a kind solution to embed links in individual instagram posts !!!</p>
                </div>
            </div>
            <div class="fxt-bg-color">
                <div class="fxt-header">
                    <a href="login.php" class="fxt-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                </div>
                <div class="fxt-form">
                    <form method="POST" action="loginlogic.php">
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-1">                                                
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                            <i class="flaticon-envelope"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-2">                                                
                            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                            <i class="flaticon-padlock"></i>
                        </div>
                        <div class="form-group fxt-transformY-50 fxt-transition-delay-3">
                            <div class="fxt-content-between">
                                <button type="submit" class="fxt-btn-fill">Log in</button>
                            </div>
                        </div>
                    </form>                            
                </div> 
                <div class="fxt-footer">
                    <ul class="fxt-socials">
                        <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-5"><a href="https://www.facebook.com/ItsSoumit"
                                title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-6"><a href="https://www.twitter.com/ItsSoumit" title="twitter"><i
                                    class="fab fa-twitter"></i></a></li>
                        <li class="fxt-google fxt-transformY-50 fxt-transition-delay-7"><a href="mailto:its.soumit.das@gmail.com" title="google"><i
                                    class="far fa-envelope"></i></a></li>
                        <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-8"><a href="https://www.linkedin.com/in/ItsSoumit"
                                title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="fxt-instagram fxt-transformY-50 fxt-transition-delay-9"><a href="https://www.instagram.com/itssoumit"
                                title="instagram"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>  
        </div>
    </div>
    <!-- jquery-->
    <script src="assets/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- Validator js -->
    <script src="assets/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/main.js"></script>

</body>
</html>