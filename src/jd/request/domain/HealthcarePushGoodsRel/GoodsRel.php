<?php

namespace JdJos\jd\request\domain\HealthcarePushGoodsRel;
class GoodsRel{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.medical.examination.export.param.third.PushGoodsRelParam";
    }
        
    private $goodsId;
    
    public function setGoodsId($goodsId){
        $this->params['goodsId'] = $goodsId;
    }

    public function getGoodsId(){
        return $this->goodsId;
    }
            
    private $channelType;
    
    public function setChannelType($channelType){
        $this->params['channelType'] = $channelType;
    }

    public function getChannelType(){
        return $this->channelType;
    }
            
    private $relType;
    
    public function setRelType($relType){
        $this->params['relType'] = $relType;
    }

    public function getRelType(){
        return $this->relType;
    }
            
    private $targetGoodsId;
                        
    public function setTargetGoodsId($targetGoodsId){
        $this->params['targetGoodsId'] = $targetGoodsId;
    }
                    
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>