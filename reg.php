<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h1 class ="text-hide"><img src="img/logo.png" />Bright</h1></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav nav-menu">
                <li class="active-li"><a href="#"><span class="active-nav">HOME</span></a></li>
                <li><a href="#">PORTFOLIO</a></li>
                <li><a href="#">SUPPORT</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" class="text-hide facebook">facebook</a></li>
                <li><a href="#" class="text-hide twitter">twitter</a></li>
                <li><a href="#" class="text-hide boll">boll</a></li>
                <li><a href="#" class="text-hide be">Be</a></li>
                <li><a href="#" class="text-hide google">google+</a></li>
                <li><a href="#" class="text-hide rss">rss</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="content">
        <h2>
            <?php
                function reg($name, $email) {
                    if (($name && $email) == NULL) {
                        echo "Error";
                    } else {
                        echo "Thank You for registering " . $name . "<br/>Chack Your email: " . $email;
                    }
                }
                reg($_GET['name'], $_GET['email']);
            ?>
        </h2>
    </div>
</div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>