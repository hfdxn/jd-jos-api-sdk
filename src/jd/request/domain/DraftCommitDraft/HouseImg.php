<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class HouseImg{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.house.JosHousePublishImg";
    }
        
    private $imgUrl;
    
    public function setImgUrl($imgUrl){
        $this->params['imgUrl'] = $imgUrl;
    }

    public function getImgUrl(){
        return $this->imgUrl;
    }
            
    private $imgType;
    
    public function setImgType($imgType){
        $this->params['imgType'] = $imgType;
    }

    public function getImgType(){
        return $this->imgType;
    }
            
    private $imgTitle;
    
    public function setImgTitle($imgTitle){
        $this->params['imgTitle'] = $imgTitle;
    }

    public function getImgTitle(){
        return $this->imgTitle;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>