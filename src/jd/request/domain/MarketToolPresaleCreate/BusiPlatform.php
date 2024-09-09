<?php

namespace JdJos\jd\request\domain\MarketToolPresaleCreate;
class BusiPlatform{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.presale.api.domain.BusiPlatformInfo";
    }
        
    private $channel;
                        
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }
                    
            
    private $selectType;
    
    public function setSelectType($selectType){
        $this->params['selectType'] = $selectType;
    }

    public function getSelectType(){
        return $this->selectType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>