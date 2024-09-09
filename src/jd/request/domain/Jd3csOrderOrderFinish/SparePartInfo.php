<?php

namespace JdJos\jd\request\domain\Jd3csOrderOrderFinish;
class SparePartInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePartInfo";
    }
        
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $thirdCategoryName;
    
    public function setThirdCategoryName($thirdCategoryName){
        $this->params['thirdCategoryName'] = $thirdCategoryName;
    }

    public function getThirdCategoryName(){
        return $this->thirdCategoryName;
    }
            
    private $productModel;
    
    public function setProductModel($productModel){
        $this->params['productModel'] = $productModel;
    }

    public function getProductModel(){
        return $this->productModel;
    }
            
    private $sparePartType;
    
    public function setSparePartType($sparePartType){
        $this->params['sparePartType'] = $sparePartType;
    }

    public function getSparePartType(){
        return $this->sparePartType;
    }
            
    private $sparePartCode;
    
    public function setSparePartCode($sparePartCode){
        $this->params['sparePartCode'] = $sparePartCode;
    }

    public function getSparePartCode(){
        return $this->sparePartCode;
    }
            
    private $sparePartName;
    
    public function setSparePartName($sparePartName){
        $this->params['sparePartName'] = $sparePartName;
    }

    public function getSparePartName(){
        return $this->sparePartName;
    }
            
    private $newApplyNum;
    
    public function setNewApplyNum($newApplyNum){
        $this->params['newApplyNum'] = $newApplyNum;
    }

    public function getNewApplyNum(){
        return $this->newApplyNum;
    }
            
    private $newUseNum;
    
    public function setNewUseNum($newUseNum){
        $this->params['newUseNum'] = $newUseNum;
    }

    public function getNewUseNum(){
        return $this->newUseNum;
    }
            
    private $newRetreatNum;
    
    public function setNewRetreatNum($newRetreatNum){
        $this->params['newRetreatNum'] = $newRetreatNum;
    }

    public function getNewRetreatNum(){
        return $this->newRetreatNum;
    }
            
    private $usedRetreatNum;
    
    public function setUsedRetreatNum($usedRetreatNum){
        $this->params['usedRetreatNum'] = $usedRetreatNum;
    }

    public function getUsedRetreatNum(){
        return $this->usedRetreatNum;
    }
            
    private $usedRetreat;
    
    public function setUsedRetreat($usedRetreat){
        $this->params['usedRetreat'] = $usedRetreat;
    }

    public function getUsedRetreat(){
        return $this->usedRetreat;
    }
            
    private $deliveryCode;
    
    public function setDeliveryCode($deliveryCode){
        $this->params['deliveryCode'] = $deliveryCode;
    }

    public function getDeliveryCode(){
        return $this->deliveryCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>