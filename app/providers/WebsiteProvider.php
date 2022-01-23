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
        $website->setDescription("In May, 2008, two of my friends founded a web studio based in Yerevan, Armenia and included me as the designer. We named it Impression Web Studio. The services we offered included designing and coding websites from scratch to the finished product for individuals and businesses. Our clients were located in Armenia, Europe, and the USA. It took us several weeks and lots of research to come up with the meticulously planned strategies, structure and architecture of the website and the services we’d provide. Since we had a very low budget in the beginning, we used as much of our own resources as we could. This included naming, branding, photography, copywriting, designing, coding, and using my own child along with my friend as photography models. In the end, we were very proud of our product. It was versatile, modern, and easy to use. The company started to grow and gain profits. It still exists, and even though I moved to the US in 2011, I’m still wholeheartedly attached to this project.");

        $website->addPictureDescription(1, "Homepage with the dynamic carousel");
        $website->addPictureDescription(2, "About us page");
        $website->addPictureDescription(3, "Services we provide page");
        $website->addPictureDescription(4, "List view portfolio page with pagination");
        $website->addPictureDescription(5, "Single view portfolio page");
        $website->addPictureDescription(6, "Contact form page with studio’s map");
        $website->addPictureDescription(7, "Web studio workers business card design");
        $website->addPictureDescription(8, "Web studio’s two sided pamphlet");
        $website->addPictureDescription(9, "Another version of homepage design");
        return $website;
    }
    
    private function constructMaynooth(){
        $website = new Website("maynooth", "Maynooth Furniture Store", "/img/websites", 8);
        $website->setLink("https://xd.adobe.com/view/bb2fc23f-9684-4c1b-a02a-42dde20475ea-ee7c/");
        $website->setMobileLink("https://xd.adobe.com/view/215bca31-4835-4f61-7a06-275044fd8ba1-576a/?fullscreen");
        $website->setWorksDone("Dynamic Website and Mobile Design Prototype");
        $website->setDescription("Maynooth Furniture was one of the two online projects I had to complete while taking an online course of ‘Prototyping with Adobe XD’. The requirement was to design a dynamic prototype for an online furniture store. Login/signup information, store locator, ability to add an item to the cart, product page with detailed description, contacts page and testimonials were required as well. The target audience was mainly considered middle aged women from the middle class. Both desktop and mobile versions of the prototype are available with some differences and experimental elements. All the buttons (except for the footer) are clickable, including the “store locator” and “my account” icons, the logo, all the list view pictures,  the “i” information icon on the product page, and the “home”, “living room”, and “contact” items on the navigation bar. I also added a touch of animation to the mobile page, which is reachable by clicking on the store locator icon on the mobile version.");
        
        $website->addPictureDescription(1, "Desktop homepage with different sections");
        $website->addPictureDescription(2, "Desktop list view page with filters");
        $website->addPictureDescription(3, "Desktop single view or product page with description");
        $website->addPictureDescription(4, "Desktop contact us page");
        $website->addPictureDescription(5, "Mobile home page and animation page");
        $website->addPictureDescription(6, "Mobile single view and list view pages");
        $website->addPictureDescription(7, "Desktop entire prototype design screenshot");
        $website->addPictureDescription(8, "Mobile entire prototype design screenshot");

        return $website;
    }
    
    private function constructPag(){
        $website = new Website("pag", "PAG Construction", "/img/websites", 6);
        $website->setLink("https://pagfinehomes.gaslanyan.com/");
        $website->setWorksDone("Logo, Graphic Design, Website Design");
        $website->setDescription("PAG Fine Homes is a construction company that builds sustainable, high-quality, multi-generational estate size homes in King County, WA. Their main customers are upper and middle class families. The initial request was to create a logo, a website, and a building sign. The depicted logo characterizes house roofs above a smooth path, and also has a form of a crown to reflect the high-end approach of the company. The website includes many photos of the houses built, information blocks, 3D tour links, company information, and contacts.");
      
        $website->addPictureDescription(1, "Homepage with the dynamic carousel and information sections");
        $website->addPictureDescription(2, "List view page with photos and a 3D tour link");
        $website->addPictureDescription(3, "Contact us page");
        $website->addPictureDescription(4, "Builder sign for a specific project with floor plans");
        $website->addPictureDescription(5, "General builder sign with contact information");
        $website->addPictureDescription(6, "Final version of the logo with different color schemes");
        
        return $website;
    }
    
        private function constructLesekroken(){
        $website = new Website("lesekroken", "Lesekroken Children Stories", "/img/websites", 4);
        $website->setLink("https://lesekroken.no//");
        $website->setWorksDone("Logo, Website Design");
        $website->setDescription("Lesekroken, which means “Reading Hooks” in Norwegian, is a non-profit organization. They help immigrant kids in Norway whose native language is not Norwegian, to listen to stories and tales in their own language. I was asked to create a logo and a colorful website for kids using  illustrations they provided. The project was designed by me in 2012, and is still online with some modifications they made later.");
        
        $website->addPictureDescription(1, "Homepage with provided illustrations and multi-language links");
        $website->addPictureDescription(2, "Our objective page");
        $website->addPictureDescription(3, "Sign-up information page");
        $website->addPictureDescription(4, "Contact us page");
      
        return $website;
    }
    
        private function constructRoarbikes(){
        $website = new Website("roarbikes", "Roar Bikes Online Store", "/img/websites", 6);
        $website->setLink("https://xd.adobe.com/view/728b17e4-fbfd-4266-bd39-f06b180dd40c-27d8/");
        $website->setWorksDone("Dynamic Website Design Prototype");
        $website->setDescription("Roar Bikes was the first project I completed while taking an online ‘Prototyping in Adobe XD’ course. The requirement was to design a prototype for an urban city bike shop. Their main customers were hipster men with a modern lifestyle and high quality expectations. I designed the project with a masculine and minimalistic approach in mind. The “read more” and “add to cart” buttons, menu with the login and contact information, left and right arrows, all 4 sections of the description on the product page, and the logo are clickable.");
        
        $website->addPictureDescription(1, "Homepage prototype with model selection and testimonials");
        $website->addPictureDescription(2, "Product page with item’s color choice");
        $website->addPictureDescription(3, "Product page with item’s description choice");
        $website->addPictureDescription(4, "Login or signup page");
        $website->addPictureDescription(5, "Contact and address page");
        $website->addPictureDescription(6, "Entire prototype design screenshot");
      
        return $website;
    }
    
        private function constructJobdepot(){
        $website = new Website("jobdepot", "Jobdepot Job Search", "/img/websites", 2);
        $website->setLink("http://jobdepot.us");
        $website->setWorksDone("Logo, Website Design");
        $website->setDescription("Jobdepot.us was planned as a powerful job search engine, which would combine results from 3 main job search websites: Indeed, CareerBuilder, and SimplyHired. The requirements were to design a minimalistic website with stress on the American colors. Even though users can still perform a successful search, unfortunately, only some of the information is displayed on the website at this moment.");
        
        $website->addPictureDescription(1, "Homepage or initial search page");
        $website->addPictureDescription(2, "Inner page with browsed jobs");
      
        return $website;
    }
    
        private function constructSacvoyage(){
        $website = new Website("sacvoyage", "SacVoyage Travel Agency", "/img/websites", 7);
        $website->setWorksDone("Website Design");
        $website->setDescription("SacVoyage was one of the largest Armenian tour operators both for incoming and outgoing tourism. The website included multiple pages with different content, some even coming from third party websites and services. The main goal was to create a colorful, welcoming website for tourists visiting Armenia, as well as for outgoing tourists. The logo had been provided. Unfortunately, the website has been taken down and only the design of the pages is available.");
        
        $website->addPictureDescription(1, "Homepage with incoming and outgoing tours sections");
        $website->addPictureDescription(2, "Incoming tour operator page");
        $website->addPictureDescription(3, "Outgoing tour operator page");
        $website->addPictureDescription(4, "Tours search page");
        $website->addPictureDescription(5, "Car rental services page");
        $website->addPictureDescription(6, "Hotel booking page");
        $website->addPictureDescription(7, "Contact us page");
      
        return $website;
    }
    
        private function constructKamurj(){
        $website = new Website("kamurj", "Kamurj Credit Organization", "/img/websites", 6);
        $website->setWorksDone("Website Design");
        $website->setDescription("Kamurj is a credit organization based in Armenia. They are focused on providing loans for agriculture and small business development in the rural regions of the country. It was very important to develop an easy-to-use website for entrepreneurs in different age groups and digital skills. The site includes different informational pages, a loan calculator, detailed description of loan packages, information about branches, and a sitemap page. My goal as a designer was to organize lots of information into useful sections and to give the website a lighter feeling. The website’s initial design is not online anymore and only the design of the pages is available.");
        
        $website->addPictureDescription(1, "Homepage with company’s description");
        $website->addPictureDescription(2, "Different loans description page");
        $website->addPictureDescription(3, "Company’s goals page");
        $website->addPictureDescription(4, "Company branches’ addresses page");
        $website->addPictureDescription(5, "Sitemap page");
        $website->addPictureDescription(6, "Contact us page");
      
        return $website;
    }
    
        private function constructAutoshuka(){
        $website = new Website("autoshuka", "Autoshuka Automobile Marketplace", "/img/websites", 3);
        $website->setWorksDone("Website Design");
        $website->setDescription("Avtoshuka.am was one of the largest projects we designed. The website presents a used and new vehicle marketplace, with powerful search capabilities, detailed descriptions, auto dealers, auto loans, and information for car enthusiasts. The portal had plenty of information to deliver, along with banners, so the design planning process had to be very thoughtful and thorough. As a designer, I tried my best to organize tons of information into legible, easy-on-the-eyes sections and to give it a modern, useful layout. Unfortunately, the website is not online anymore and only the design of the pages is available.");
        
        $website->addPictureDescription(1, "Homepage with powerful search");
        $website->addPictureDescription(2, "Search results with more filters");
        $website->addPictureDescription(3, "Single view or product page with detailed descriptions");
      
        return $website;
    }
} 