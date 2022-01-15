<?php
require_once dirname(__FILE__).'/../providers/WebsiteProvider.php';

function pageWebsites(){
    
    $websiteProvider = new WebsiteProvider();
    $websites = $websiteProvider->getWebsites();
    
    $websiteKey = !empty($_GET['website']) ? $_GET['website'] : null;
    
    if($websiteKey != null || isset($websites[$websiteKey])){
       $website = $websites[$websiteKey];
    }
    else {
        $website = null;
    }
?>
<div class="row-ga">
        <?php
        if ($website == null) {
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
        }
        else {
        ?>
        <div class="description">
            <div class="list-view-name"><?php echo $website->getName()?></div>
            <div class="list-view-undertext"><?php echo $website->getWorksDone()?></div>

            
            <div><a href="" id="visit">visit website</a></div>

            <p><?php echo $website->getDescription()?></p>

            <div class="list-view-name"><a href="">Next Project ></a></div>
            <div class="list-view-name"><a href="">< Previous Project </a></div>    
        </div>

        <div class="works">
            <div class="list-view-name">1/2</div>
            <div class="list-view-name">Home page with a dynamic carousel</div>

            <div class="works-order"><a href="prev project"><img class="works-arrows" src="/img/content/left-arrow.png"></a></div>  
            <img class="works-image works-order" src="/img/content/single-view/impression/1-impression-single-view.jpg">
            <div class="works-order"><a href="prev project"><img class="works-arrows" src="/img/content/right-arrow.png"></a></div> 
        </div>
        <?php
        }
        ?>    
</div>
<!--Columns end-->
<?php } ?>