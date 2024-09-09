<?php

namespace JdJos\jd\request\domain\YipCustomizedSkuCustomServiceBatchApply;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.customization.center.open.entity.customService.SkuServiceApplyDetailVo";
    }
        
    private $customContents;
    
    public function setCustomContents($customContents){
        $this->params['customContents'] = $customContents;
    }

    public function getCustomContents(){
        return $this->customContents;
    }
            
    private $serviceCd2Id;
    
    public function setServiceCd2Id($serviceCd2Id){
        $this->params['serviceCd2Id'] = $serviceCd2Id;
    }

    public function getServiceCd2Id(){
        return $this->serviceCd2Id;
    }
            
    private $serviceCd1Id;
    
    public function setServiceCd1Id($serviceCd1Id){
        $this->params['serviceCd1Id'] = $serviceCd1Id;
    }

    public function getServiceCd1Id(){
        return $this->serviceCd1Id;
    }
            
    private $salePrice;
    
    public function setSalePrice($salePrice){
        $this->params['salePrice'] = $salePrice;
    }

    public function getSalePrice(){
        return $this->salePrice;
    }
            
    private $indexName;
    
    public function setIndexName($indexName){
        $this->params['indexName'] = $indexName;
    }

    public function getIndexName(){
        return $this->indexName;
    }
            
    private $indexId;
    
    public function setIndexId($indexId){
        $this->params['indexId'] = $indexId;
    }

    public function getIndexId(){
        return $this->indexId;
    }
            
    private $purchasePrice;
    
    public function setPurchasePrice($purchasePrice){
        $this->params['purchasePrice'] = $purchasePrice;
    }

    public function getPurchasePrice(){
        return $this->purchasePrice;
    }
            
    private $techId;
    
    public function setTechId($techId){
        $this->params['techId'] = $techId;
    }

    public function getTechId(){
        return $this->techId;
    }
            
    private $required;
    
    public function setRequired($required){
        $this->params['required'] = $required;
    }

    public function getRequired(){
        return $this->required;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>