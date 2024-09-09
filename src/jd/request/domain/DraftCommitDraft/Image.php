<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class Image{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.JosImage";
    }
        
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
            
    private $index;
    
    public function setIndex($index){
        $this->params['index'] = $index;
    }

    public function getIndex(){
        return $this->index;
    }
            
    private $colorId;
    
    public function setColorId($colorId){
        $this->params['colorId'] = $colorId;
    }

    public function getColorId(){
        return $this->colorId;
    }
            
    private $attrValueAlias;
    
    public function setAttrValueAlias($attrValueAlias){
        $this->params['attrValueAlias'] = $attrValueAlias;
    }

    public function getAttrValueAlias(){
        return $this->attrValueAlias;
    }
            
    private $imgId;
    
    public function setImgId($imgId){
        $this->params['imgId'] = $imgId;
    }

    public function getImgId(){
        return $this->imgId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>