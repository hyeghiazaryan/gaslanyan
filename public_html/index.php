<?php
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
error_reporting(-1);
require_once dirname(__FILE__).'/../app/pages/Websites.php';
require_once dirname(__FILE__).'/../app/pages/Logos.php';
require_once dirname(__FILE__).'/../app/pages/Everything.php';
require_once dirname(__FILE__).'/../app/pages/About.php';

require_once dirname(__FILE__).'/../app/pages/Home.php';
require_once dirname(__FILE__).'/../app/pages/NotFound.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gabby Aslanyan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="UX designer, ux design, ui design, ui designer, web design, web designer, portfolio, ux portfolio, ui portfolio">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/gaslanyan.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
        <link rel="icon" href="/img/content/favicon.ico" />

        <script src="/js/gaslanyan.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">
            <?php
            $page = !empty($_GET['page']) ? $_GET['page'] : 'websites';
            ?>

            <!--Main navigation start -->                
            <nav class="navbar">
                <div class="container-fluid">
                    <div>
                        <a href="/"><img  id="ga-logo" src="/img/content/top-art-name.jpg" alt="Gabby Aslanyan"></a>
                        <hr class="rounded">
                    </div>
                    <ul class="nav-text">
                        <li><a <?php if($page == "websites") echo 'class="active"'?> href="/">websites</a></li>
                        <li><a <?php if($page == "logos") echo 'class="active"'?> href="/?page=logos">logos</a></li>
                        <li><a <?php if($page == "everything") echo 'class="active"'?> href="/?page=everything">everything else</a></li>
                        <li><a <?php if($page == "about") echo 'class="active"'?> href="/?page=about">about</a></li>
                    </ul>
                </div>
            </nav>
            <!--Main navigation end -->   
            <?php
            
            switch ($page) {
                case "websites":
                    pageWebsites();
                    break;
                case "logos":
                    pageLogos();
                    break;
                case "everything":
                    pageEverything();
                    break;
                case "about":
                    pageAbout();
                    break;
                case "contacts":
                    pageContacts();
                    break;
                case "home":
                    pageHome();
                    break;
                default:
                    pageNotFound();
                    break;
            }
            ?>
            
            <!--Footer start-->
            <div id="ga-footer">
        
                    <div class="social-icons"><a href="mailto:gaslanyan@gmail.com"><img src="/img/content/icons-email-60x60.png" alt="Email icon"></a></div>
                    <div class="social-icons"><a href="https://www.linkedin.com/in/gohar-gabby-aslanyan-45639080"><img src="/img/content/icons-linkedin-60x60.png" alt="Email icon"></a></div>
                    <div class="social-icons"><a href="https://www.facebook.com/gohar.aslanyan.98"><img src="/img/content/icons-facebook-60x60.png" alt="Email icon"></a></div>

             
                <ul class="footer-nav">
                    <li><a <?php if($page == "websites") echo 'class="active"'?> href="/">websites</a></li>
                    <li><a <?php if($page == "logos") echo 'class="active"'?> href="/?page=logos">logos</a></li>
                    <li><a <?php if($page == "everything") echo 'class="active"'?> href="/?page=everything">everything else</a></li>
                    <li><a <?php if($page == "about") echo 'class="active"'?> href="/?page=about">about</a></li>
                </ul>
                <span>Gabby Aslanyan © 2022</span>
            </div>
            <!--Footer end-->
        </div>
    </body>
</html>
