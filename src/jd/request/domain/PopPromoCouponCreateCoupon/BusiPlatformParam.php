<?php

namespace JdJos\jd\request\domain\PopPromoCouponCreateCoupon;
class BusiPlatformParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.platform.PlatformOuterParam";
    }
        
    private $selectType;
    
    public function setSelectType($selectType){
        $this->params['selectType'] = $selectType;
    }

    public function getSelectType(){
        return $this->selectType;
    }
            
    private $channel;
    
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }

    public function getChannel(){
        return $this->channel;
    }
            
    private $channelSelectType;
    
    public function setChannelSelectType($channelSelectType){
        $this->params['channelSelectType'] = $channelSelectType;
    }

    public function getChannelSelectType(){
        return $this->channelSelectType;
    }
            
    private $platform;
    
    public function setPlatform($platform){
        $this->params['platform'] = $platform;
    }

    public function getPlatform(){
        return $this->platform;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>