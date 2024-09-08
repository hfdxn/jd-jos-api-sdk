<?php
namespace JdiSupplyBatchAddOrUpdateSupplierStock;
class SupplierStockDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.supply.chain.channel.sdk.dto.SupplierStockDto";
    }
        
    private $wareHouseCode;
    
    public function setWareHouseCode($wareHouseCode){
        $this->params['wareHouseCode'] = $wareHouseCode;
    }

    public function getWareHouseCode(){
        return $this->wareHouseCode;
    }
            
    private $comingStockNum;
    
    public function setComingStockNum($comingStockNum){
        $this->params['comingStockNum'] = $comingStockNum;
    }

    public function getComingStockNum(){
        return $this->comingStockNum;
    }
            
    private $stockNum;
    
    public function setStockNum($stockNum){
        $this->params['stockNum'] = $stockNum;
    }

    public function getStockNum(){
        return $this->stockNum;
    }
            
    private $futureStockDate;
    
    public function setFutureStockDate($futureStockDate){
        $this->params['futureStockDate'] = $futureStockDate;
    }

    public function getFutureStockDate(){
        return $this->futureStockDate;
    }
            
    private $availableStockNum;
    
    public function setAvailableStockNum($availableStockNum){
        $this->params['availableStockNum'] = $availableStockNum;
    }

    public function getAvailableStockNum(){
        return $this->availableStockNum;
    }
            
    private $thirdSkuId;
    
    public function setThirdSkuId($thirdSkuId){
        $this->params['thirdSkuId'] = $thirdSkuId;
    }

    public function getThirdSkuId(){
        return $this->thirdSkuId;
    }
            
    private $comingStockDate;
    
    public function setComingStockDate($comingStockDate){
        $this->params['comingStockDate'] = $comingStockDate;
    }

    public function getComingStockDate(){
        return $this->comingStockDate;
    }
            
    private $maxStockNum;
    
    public function setMaxStockNum($maxStockNum){
        $this->params['maxStockNum'] = $maxStockNum;
    }

    public function getMaxStockNum(){
        return $this->maxStockNum;
    }
            
    private $futureStockNum;
    
    public function setFutureStockNum($futureStockNum){
        $this->params['futureStockNum'] = $futureStockNum;
    }

    public function getFutureStockNum(){
        return $this->futureStockNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>