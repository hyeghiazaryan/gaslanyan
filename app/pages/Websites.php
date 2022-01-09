<?php
require_once dirname(__FILE__).'/../providers/WebsiteProvider.php';

function pageWebsites(){
    
    $websiteProvider = new WebsiteProvider();
    $websites = $websiteProvider->getWebsites();
?>
<div class="row-ga">
        <?php
           foreach ($websites as $websiteKey => $website) {
        ?>
        <div class="list-view-style">
            <a href="?page=websites&website=<?php echo $websiteKey?>">
                    <img src="<?php echo $website->getThumbnail()->getFilePath()?>" alt="<?php echo $website->getName()?>"/>
                    <div class="list-view-name"><?php echo $website->getName()?></div>
                    <div class="list-view-undertext"><?php echo $website->getWorksDone()?></div>
            </a>
        </div>
        <?php
           }
        ?>
        <div class="list-view-style">
            <a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/1-impression-list-view.jpg" alt="Impression Web Studio"/>
                    <div class="list-view-name">Impression Web Studio</div>
                    <div class="list-view-undertext">Logo, Website Design, Business Card, Brochure</div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style">
            <a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/2-maynooth-list-view.jpg" alt="Maynooth Furniture Store"/>
                    <div class="list-view-name">Maynooth Furniture Store</div>
                    <div class="list-view-undertext">Dynamic Website and Mobile Design Prototype  </div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style"><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/3-pag-list-view.jpg" alt="PAG Construction"/>
                    <div class="list-view-name">PAG Construction</div>
                    <div class="list-view-undertext">Logo, Graphic Design, Website Design</div>
            </a>    <!-- comment -->
        </div>
    
    

        <div class="list-view-style"><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/4-lesekroken-list-view.jpg" alt="Lesekroken Children Stories"/>
                    <div class="list-view-name">Lesekroken Children Stories</div>
                    <div class="list-view-undertext">Logo, Website Design</div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style"><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/5-roarbikes-list-view.jpg" alt="Roar Bikes Online Store"/>
                    <div class="list-view-name">Roar Bikes Online Store</div>
                    <div class="list-view-undertext">Dynamic Website Design Prototype </div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style" ><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img  src="/img/content/list-view/6-jobdepot-list-view.jpg" alt="Jobdepot Job Search"/>
                    <div class="list-view-name">Jobdepot Job Search</div>
                    <div class="list-view-undertext">Logo, Website Design</div>
            </a>    <!-- comment -->
        </div>

    
    
        <div class="list-view-style"><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/7-sacvoyage-list-view.jpg" alt="SacVoyage Travel Agency"/>
                    <div class="list-view-name">SacVoyage Travel Agency</div>
                    <div class="list-view-undertext">Website Design</div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style"><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img  src="/img/content/list-view/8-kamurj-list-view.jpg" alt="Kamurj Credit Organization"/>
                    <div class="list-view-name">Kamurj Credit Organization</div>
                    <div class="list-view-undertext">Website Design</div>
            </a>    <!-- comment -->
        </div>
        <div class="list-view-style" ><a href="http://www.impressionwebstudio.com/" target="_blank">
                    <img src="/img/content/list-view/9-autoshuka-list-view.jpg" alt="Autoshuka Automobile Marketplace"/>
                    <div class="list-view-name">Autoshuka Automobile Marketplace</div>
                    <div class="list-view-undertext">Website Design</div>
            </a>    <!-- comment -->
        </div>   
   
</div>
<!--Columns end-->
<?php } ?>