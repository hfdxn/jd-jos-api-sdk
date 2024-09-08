<?php
namespace LocWareFeatureWrite;
class FeatureParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.order.loc.assembledflow.api.jos.domain.LocFeatureJosParam";
    }
        
    private $multiCouponUseTimes;
    
    public function setMultiCouponUseTimes($multiCouponUseTimes){
        $this->params['multiCouponUseTimes'] = $multiCouponUseTimes;
    }

    public function getMultiCouponUseTimes(){
        return $this->multiCouponUseTimes;
    }
            
    private $consumeConfig;
    
    public function setConsumeConfig($consumeConfig){
        $this->params['consumeConfig'] = $consumeConfig;
    }

    public function getConsumeConfig(){
        return $this->consumeConfig;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>