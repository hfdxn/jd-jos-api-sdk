<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class LineationPrice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.price.JosLineationPrice";
    }
        
    private $lpType;
    
    public function setLpType($lpType){
        $this->params['lpType'] = $lpType;
    }

    public function getLpType(){
        return $this->lpType;
    }
            
    private $lineationPrice;
    
    public function setLineationPrice($lineationPrice){
        $this->params['lineationPrice'] = $lineationPrice;
    }

    public function getLineationPrice(){
        return $this->lineationPrice;
    }
            
    private $lpUrl;
    
    public function setLpUrl($lpUrl){
        $this->params['lpUrl'] = $lpUrl;
    }

    public function getLpUrl(){
        return $this->lpUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>