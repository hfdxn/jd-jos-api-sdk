<?php
namespace FullCouponCreateFullCoupon;
class BusiPlatform{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.promo.api.open.domain.orderpromo.OpenBusiPlatformCreateModelInfo";
    }
        
    private $selectType;
    
    public function setSelectType($selectType){
        $this->params['selectType'] = $selectType;
    }

    public function getSelectType(){
        return $this->selectType;
    }
            
    private $channelList;
                        
    public function setChannelList($channelList){
        $this->params['channelList'] = $channelList;
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
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>