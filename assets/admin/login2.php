<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Login</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <div class="layer">
            <!-- Login Container -->
            <div id="login-container">
                <!-- Login Header -->
                <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                    <i class="fa fa-cube"></i> <strong>Login ADMIN Web Wonosido</strong>
                </h1>
                <!-- END Login Header -->

                <!-- Login Block -->
                <div class="block animation-fadeInQuickInv">
                    <!-- Login Title -->
                    <div class="block-title">
                        
                        <h2>ISI DATA DENGAN BENAR!!</h2>
                    </div>
                    <!-- END Login Title -->

                    <!-- Login Form -->
                    <form id="form-login" action="dashboard.php" method="post" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="text" id="login-email" name="login-email" class="form-control" placeholder="Masukan Email..">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Masukan password..">
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-8">
                                
                            </div>
                            <div class="col-xs-4 text-right">
                                <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Masuk</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Login Form -->
                </div>
                <!-- END Login Block -->

                <!-- Footer -->
                <footer class="text-muted text-center animation-pullUp">
                    <small><span id="year-copy"></span> &copy; <a href="" target="_blank">Wonosido</a></small>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Login Container -->

            <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
            <script src="js/vendor/jquery-2.2.4.min.js"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/app.js"></script>

            <!-- Load and execute javascript code used only in this page -->
            <script src="js/pages/readyLogin.js"></script>
            <script>$(function(){ ReadyLogin.init(); });</script>
        </div>
    </body>
</html>