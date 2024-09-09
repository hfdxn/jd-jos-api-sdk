<?php

namespace JdJos\jd\request\domain\PromoActivityCreate;
class ActivityShowDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promo.activity.sdk.model.ActivityShowDTO";
    }
        
    private $adword;
    
    public function setAdword($adword){
        $this->params['adword'] = $adword;
    }

    public function getAdword(){
        return $this->adword;
    }
            
    private $link;
    
    public function setLink($link){
        $this->params['link'] = $link;
    }

    public function getLink(){
        return $this->link;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>