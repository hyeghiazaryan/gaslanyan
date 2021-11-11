<?php
require_once dirname(__FILE__).'/../app/pages/Websites.php';
require_once dirname(__FILE__).'/../app/pages/Logos.php';
require_once dirname(__FILE__).'/../app/pages/Everything.php';
require_once dirname(__FILE__).'/../app/pages/About.php';
require_once dirname(__FILE__).'/../app/pages/Contacts.php';

require_once dirname(__FILE__).'/../app/pages/Home.php';
require_once dirname(__FILE__).'/../app/pages/Contact.php';
require_once dirname(__FILE__).'/../app/pages/About_.php';
require_once dirname(__FILE__).'/../app/pages/Works.php';
require_once dirname(__FILE__).'/../app/pages/NotFound.php';
require_once dirname(__FILE__).'/../app/providers/WorksectionProvider.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gabby Aslanyan</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="pag fine homes, pagfinehomes.com, modern houses, contemporary houses, homes, luxury homes, high end housing, real estate, contemporary houses for sale wa, contemporary houses for sale eastside, contemporary houses for sale seattle, contemporary houses for sale king county, high end houses for sale, luxury houses for sale, sustainable houses for sale, energy efficient houses for sale, estate size homes in King County">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/pagstyles.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
        <link rel="icon" href="/img/content/favicon.ico" />

        <script src="/js/pagScript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">                

            <!--Main navigation start -->                
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="/"><img  id="pag-logo" src="/img/content/top-art-name.jpg" alt="Gabby Aslanyan"></a>
                        <a href="/?page=contact"><img class="media-contact" src="/img/content/media-contact.png" alt="Contact Icon"></a>
                    </div>
                    <ul class="nav navbar-nav pag-nav-text">
                        <li><a href="/">websites</a></li>
                        <li><a href="/?page=logos">logos</a></li>
                        <li><a href="/?page=everything">everything else</a></li>
                        <li><a href="/?page=about">about</a></li>
                        <li><a href="/?page=contacts">contacts</a></li>
                    </ul>
                </div>
            </nav>
            <!--Main navigation end -->   
            <?php
            $page = !empty($_GET['page']) ? $_GET['page'] : 'websites';
            
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
                case "contact":
                    pageContact();
                    break;
                case "about1":
                    pageAbout1();
                    break;
                case "works":
                    pageWorks();
                    break;
                default:
                    pageNotFound();
                    break;
            }
            ?>
            
            <!--Footer start-->
            <div class="pag-footer container-fluid">
                <ul class="pag-partners">
                    <li><img src="/img/content/partners11.png"></li>
                    <li><img src="/img/content/partners11.png"></li>
                    <li><img src="/img/content/partners11.png"></li>
                    <li><img src="/img/content/partners11.png"></li>
                </ul>
                <ul class="footer-nav">
                    <li><a href="/?page=home">Home</a></li>
                    <li><a href="/?page=works">Our Work</a></li>
                    <li><a href="/?page=about">About Us</a></li>
                    <li><a href="/?page=contact">Contact Us</a></li>        
                </ul>
                <span>© 2018 PAG FINE HOMES LLC. ALL RIGHTS RESERVED</span>
            </div>
            <!--Footer end-->
        </div>
    </body>
</html>
