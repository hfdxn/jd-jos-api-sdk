<?php
namespace HealthcareBatchPushGoodsStoreRel;
class BatchGoodsStoreRel{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.medical.examination.export.param.third.BatchPushGoodsStoreRelParam";
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
            
    private $relations;
                                        
    public function setRelations($relations){
        $size = count($relations);
        for ($i=0; $i<$size; $i++){
            $relations [$i] = $relations [$i] ->getInstance();
        }
        $this->params['relations'] = $relations;
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