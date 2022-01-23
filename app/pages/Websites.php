<?php
require_once dirname(__FILE__).'/../providers/WebsiteProvider.php';

function pageWebsites(){
    
    $websiteProvider = new WebsiteProvider();
    $websites = $websiteProvider->getWebsites();
    
    $websiteKey = !empty($_GET['website']) ? $_GET['website'] : null;
    
    if($websiteKey != null || isset($websites[$websiteKey])){
       $website = $websites[$websiteKey];
       $websiteKeys = array_keys($websites);
       $websiteIndex = array_search($websiteKey, $websiteKeys);
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
            $prev = null;
            $next = null;
            foreach ($websites as $k => $v) {
                if($k != $website->getKey()){
                    
                }
                else{
                    
                }
            }
        ?>
        <div class="description">
            <div class="list-view-name big-text"><?php echo $website->getName()?></div>
            <div class="list-view-undertext"><?php echo $website->getWorksDone()?></div>

            <?php if($website->getLink()) { ?> 
            <div><a href="<?php echo $website->getLink()?>" target="_blank" id="visit">visit website</a></div>
            <?php } ?>
            <?php if($website->getMobileLink()) { ?> 
            <div><a href="<?php echo $website->getMobileLink()?>" target="_blank" id="visit">visit mobile</a></div>
            <?php } ?>

            <p class="mobile-hide"><?php echo $website->getDescription()?></p>
            
            <?php if($websiteIndex > 0 ) {?>
            <div class="list-view-name mobile-hide"><a href="?page=websites&website=<?php echo $websites[$websiteKeys[$websiteIndex-1]]->getKey()?> ">< Previous Project </a></div>
            <?php } ?>

            <?php if($websiteIndex < count($websites) -1 ) {?>
            <div class="list-view-name mobile-hide"><a href="?page=websites&website=<?php echo $websites[$websiteKeys[$websiteIndex+1]]->getKey() ?>">Next Project ></a></div>
            <?php } ?>
            

        </div>

        <div class="works">
            
            <div id="pictureDescription" class="list-view-name"><?php echo ($website->getPictureDescriptions())[1]?></div>

            <div class="works-order mobile-arrows"><a href="#myCarousel" data-slide="prev"><img class="works-arrows" src="/img/content/left-arrow.png"></a></div> 
            
            
            <div id="myCarousel" class="carousel slide works-order" data-ride="carousel" data-interval="false">
                <!-- Indicators -->
                <?php /* 
                <ol class="carousel-indicators">
                    
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <?php
                        for ($i = 1; $i < count($website->getPictures()); $i++) {
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i?>"></li>
                    <?php } ?>
                </ol>
                 */
                ?>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php
                    $first = true;
                    foreach ($website->getPictures() as $picture) {                                       
                    ?>
                    <div class="item<?php if($first){ echo " active"; $first = false;} ?>">
                        <a href="<?php echo $picture->getBigFilePath()?>" data-toggle="lightbox" data-gallery="picture-gallery" data-type="image">
                            <img class="works-image works-order" src="<?php echo $picture->getFilePath() ?>" alt="<?php echo $website->getName() ?>" />
                        </a>
                    </div>
                    <?php }?>
                </div>

            </div>              
            <div class="works-order mobile-arrows"><a href="#myCarousel" data-slide="next"><img class="works-arrows" src="/img/content/right-arrow.png"></a></div>
            <div class="list-view-name"><span id="currentPicture">1</span>/<?php echo count($website->getPictures())?></div>
        </div>
    
        <div class="description">
            
            <p class="mobile-show"><?php echo $website->getDescription()?></p>
            
            <?php if($websiteIndex > 0 ) {?>
            <div class="list-view-name mobile-show"><a href="?page=websites&website=<?php echo $websites[$websiteKeys[$websiteIndex-1]]->getKey()?> ">< Previous Project </a></div>
            <?php } ?>

            <?php if($websiteIndex < count($websites) -1 ) {?>
            <div class="list-view-name mobile-show"><a href="?page=websites&website=<?php echo $websites[$websiteKeys[$websiteIndex+1]]->getKey() ?>">Next Project ></a></div>
            <?php } ?>
            
   
        </div>    
    
    
        <script src="/js/lightbox.js"></script>
        <script type="text/javascript">
                            var currentPicture = 1;
                            var pictureDescriptions = [];
                            
                            <?php 
                            foreach($website->getPictureDescriptions() as $ind => $desc){
                                echo "pictureDescriptions[$ind] = \"$desc\";\r\n";
                            }
                            ?>
                            
                            $(document).ready(function ($) {
                                $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                                    event.preventDefault();
                                    $(this).ekkoLightbox();
                                });
                            });
                            
                            $('#myCarousel').on('slide.bs.carousel', function (obj) {
                                if(obj.direction == "left") {
                                    if(currentPicture == <?php echo count($website->getPictures())?>) {
                                        currentPicture = 1;
                                    }
                                    else {
                                        currentPicture++;
                                    }
                                }
                                else {
                                    if(currentPicture == 1) {
                                        currentPicture = <?php echo count($website->getPictures())?>;
                                    }
                                    else {
                                        currentPicture--;
                                    }
                                }

                                $('#currentPicture').text(currentPicture);
                                $('#pictureDescription').text(pictureDescriptions[currentPicture]);
                            })
                            
                            
        </script>
        <?php
        }
        ?>    
</div>
<!--Columns end-->
<?php } ?>