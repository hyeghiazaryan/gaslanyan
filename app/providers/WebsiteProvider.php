<?php
require_once dirname(__FILE__).'/../core/Website.php';

class WebsiteProvider { 
    private $websites = [];
    
    public function __construct() {
        $this->websites['impression'] = $this->constructImpression();
        $this->websites['maynooth'] = $this->constructMaynooth();
        $this->websites['pag'] = $this->constructPag();
        $this->websites['lesekroken'] = $this->constructLesekroken();
        $this->websites['roarbikes'] = $this->constructRoarbikes();
        $this->websites['jobdepot'] = $this->constructJobdepot();
        $this->websites['sacvoyage'] = $this->constructSacvoyage();
        $this->websites['kamurj'] = $this->constructKamurj();
        $this->websites['autoshuka'] = $this->constructAutoshuka();
    }
    
    public function getWebsites(){
        return $this->websites;
    }
   
    private function constructImpression(){
        $website = new Website("impression", "Impression Web Studio", "/img/websites", 9);
        $website->setLink("http://www.impressionwebstudio.com/");
        $website->setWorksDone("Logo, Website Design, Business Card, Brochure");
        $website->setDescription("In May 2008, with two of my friends, we founded a web studio based in Yerevan, Armenia and named it Impression Web Studio. We offered web site design and coding from scratch to the finished product for individuals and businesses, located in Armenia, Europe and USA.  It took us several weeks to do lots of research and to come up with the meticulously planned strategies, structure and architecture of the website and services we’d provide. Since we were very low on budget, we planned everything very carefully using as much of our own resources as we could. This included naming, branding, photography, copywriting, designing, coding and even using my own child and my friend as models. In the end we were very proud of our product. It was very versatile, modern and easy to use. The company started to grow and gain profits. It still exists and even though I moved to the US in 2011, I’m still wholeheartedly attached to this project like to my own child.");

        return $website;
    }
    
    private function constructMaynooth(){
        $website = new Website("maynooth", "Maynooth Furniture Store", "/img/websites", 8);
        $website->setLink("https://xd.adobe.com/view/bb2fc23f-9684-4c1b-a02a-42dde20475ea-ee7c/");
        $website->setMobileLink("https://xd.adobe.com/view/bb2fc23f-9684-4c1b-a02a-42dde20475ea-ee7c/");
        $website->setWorksDone("Dynamic Website and Mobile Design Prototype");
        $website->setDescription("Maynooth Furniture was one of the two online projects that I had to complete while taking an online course of Adobe XD. The requirement was to design a dynamic prototype for an online furniture store. Login/signup information, store locator, ability to add an item to the cart, product page with detailed description, contacts page and testimonials were required, as well. The target audience was mainly middle aged women. I have both desktop and mobile versions of the prototype here. I also added some animation to my prototype’s logo page for some practice.");
      
        return $website;
    }
    
    private function constructPag(){
        $website = new Website("pag", "PAG Construction", "/img/websites", 6);
        $website->setLink("https://pagfinehomes.gaslanyan.com/");
        $website->setWorksDone("Logo, Graphic Design, Website Design");
        $website->setDescription("Pag description");
      
        return $website;
    }
    
        private function constructLesekroken(){
        $website = new Website("lesekroken", "Lesekroken Children Stories", "/img/websites", 4);
        $website->setLink("https://lesekroken.no//");
        $website->setWorksDone("Logo, Website Design");
        $website->setDescription("Lesekroken description");
        
        $website->addPictureDescription(1, "blah blah blah");
      
        return $website;
    }
    
        private function constructRoarbikes(){
        $website = new Website("roarbikes", "Roar Bikes Online Store", "/img/websites", 6);
        $website->setLink("https://xd.adobe.com/view/728b17e4-fbfd-4266-bd39-f06b180dd40c-27d8/");
        $website->setWorksDone("Dynamic Website Design Prototype");
        $website->setDescription("Roarbikes description");
      
        return $website;
    }
    
        private function constructJobdepot(){
        $website = new Website("jobdepot", "Jobdepot Job Search", "/img/websites", 2);
        $website->setLink("http://jobdepot.us");
        $website->setWorksDone("Logo, Website Design");
        $website->setDescription("Jobdepot description");
      
        return $website;
    }
    
        private function constructSacvoyage(){
        $website = new Website("sacvoyage", "SacVoyage Travel Agency", "/img/websites", 7);
        $website->setWorksDone("Website Design");
        $website->setDescription("Sacvoyage description");
      
        return $website;
    }
    
        private function constructKamurj(){
        $website = new Website("kamurj", "Kamurj Credit Organization", "/img/websites", 6);
        $website->setWorksDone("Website Design");
        $website->setDescription("Kamurj description");
      
        return $website;
    }
    
        private function constructAutoshuka(){
        $website = new Website("autoshuka", "Autoshuka Automobile Marketplace", "/img/websites", 3);
        $website->setWorksDone("Website Design");
        $website->setDescription("Autoshuka description");
      
        return $website;
    }
} 