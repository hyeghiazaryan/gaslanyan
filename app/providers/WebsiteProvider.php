<?php
require_once dirname(__FILE__).'/../core/Website.php';

class WebsiteProvider { 
    private $websites = [];
    
    public function __construct() {
        $this->websites['impression'] = $this->constructImpression();
        $this->websites['maynooth'] = $this->constructMaynooth();
    }
    
    public function getWebsites(){
        return $this->websites;
    }
   
    private function constructImpression(){
        $website = new Website("impression", "Impression Web Studio", "/img/websites", 9);
        $website->setLink("http://www.impressionwebstudio.com/");
        $website->setWorksDone("Logo, Website Design, Business Card, Brochure");
        $website->setDescription("In May 2008 with 2 of my friends we founded a web studio based in Yerevan, Armenia. It took us months to do lots of research and to come up with the meticulously planned strategies, structure and architecture of the website and services we’d provide. Since we were very low on budget, we planned everything very carefully using as much of our own recourses as we could. This included naming, branding, photography, copywriting, designing, coding and even using my own child and my friend as models.
    In the end we were very proud of our product. It was very versatile, modern and easy to use.
    The company started to grow and gain profits.
    It still exits and even though I moved to US in 2011, I’m still wholeheartedly attached to this project like to my own child.");

        return $website;
    }
    
    private function constructMaynooth(){
        $website = new Website("maynooth", "Maynooth Furniture Store", "/img/websites", 8);
        $website->setLink("http://www.impressionwebstudio.com/");
        $website->setWorksDone("Dynamic Website and Mobile Design Prototype");
        $website->setDescription("Maynooth description asdasf asdlf as dfas dfsdf sad fas df s");
      
        return $website;
    }
} 