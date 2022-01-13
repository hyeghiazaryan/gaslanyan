<?php

require_once dirname(__FILE__).'/Picture.php';

class Website { 
    private $key;
    private $name;
    private $picturePath;
    private $pictures = [];
    private $link;
    private $thumbnail;
    private $worksDone;
    private $description;
    
    function __construct($key, $name, $pictureBasePath, $pictureCount) {
        $this->key = $key;
        $this->name = $name;
        $this->picturePath = $pictureBasePath."/".$key;
        $this->initThumbnail();
        
        for($i = 1; $i <= $pictureCount; $i++){
            $this->addPicture(new Picture($i.'.jpg'));
        }
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function addPicture($picture){
        $picture->setPath($this->picturePath);
        $this->pictures[] = $picture;
    }
    
    public function getPictures(){
        return $this->pictures;
    }
    
    
    function getPicturePath() {
        return $this->picturePath;
    }

    function setPicturePath($picturePath) {
        $this->picturePath = $picturePath;
    }
    
    function getLink() {
        return $this->link;
    }

    function setLink($link) {
        $this->link = $link;
    }
    
    public function getThumbnail() {
        return $this->thumbnail;
    }

    public function initThumbnail() {
        $this->thumbnail = new Picture("thumbnail.jpg");
        $this->thumbnail->setPath($this->picturePath);        
    }
    
    public function getWorksDone() {
        return $this->worksDone;
    }

    public function setWorksDone($worksDone): void {
        $this->worksDone = $worksDone;
    }

    public function getKey() {
        return $this->key;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description): void {
        $this->description = $description;
    }
} 