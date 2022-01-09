<?php
require_once dirname(__FILE__).'/../core/Website.php';

class WebsiteProvider { 
    private $websites = [];
    
    public function __construct() {
        $this->websites['impression'] = $this->constructImpression();
        //$this->workSections['available'] = $this->constructAvailableNow();
        //$this->workSections['under'] = $this->constructUnder();
    }
    
    public function getWebsites(){
        return $this->websites;
    }
   
    
    private function constructImpression(){
        $website = new Website("impression", "Impression Web Studio", "/img/websites", 9);
        $website->setLink("http://www.impressionwebstudio.com/");
        $website->setWorksDone("Logo, Website Design, Business Card, Brochure");

        return $website;
    }
} 