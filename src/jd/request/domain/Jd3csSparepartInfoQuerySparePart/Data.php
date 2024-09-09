<?php

namespace JdJos\jd\request\domain\Jd3csSparepartInfoQuerySparePart;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePartParam";
    }
        
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $secondCatId;
    
    public function setSecondCatId($secondCatId){
        $this->params['secondCatId'] = $secondCatId;
    }

    public function getSecondCatId(){
        return $this->secondCatId;
    }
            
    private $fourthCatName;
    
    public function setFourthCatName($fourthCatName){
        $this->params['fourthCatName'] = $fourthCatName;
    }

    public function getFourthCatName(){
        return $this->fourthCatName;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $secondCatName;
    
    public function setSecondCatName($secondCatName){
        $this->params['secondCatName'] = $secondCatName;
    }

    public function getSecondCatName(){
        return $this->secondCatName;
    }
            
    private $firstCatName;
    
    public function setFirstCatName($firstCatName){
        $this->params['firstCatName'] = $firstCatName;
    }

    public function getFirstCatName(){
        return $this->firstCatName;
    }
            
    private $thirdCatId;
    
    public function setThirdCatId($thirdCatId){
        $this->params['thirdCatId'] = $thirdCatId;
    }

    public function getThirdCatId(){
        return $this->thirdCatId;
    }
            
    private $pageNo;
    
    public function setPageNo($pageNo){
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo(){
        return $this->pageNo;
    }
            
    private $firstCatId;
    
    public function setFirstCatId($firstCatId){
        $this->params['firstCatId'] = $firstCatId;
    }

    public function getFirstCatId(){
        return $this->firstCatId;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $providerIds;
                        
    public function setProviderIds($providerIds){
        $this->params['providerIds'] = $providerIds;
    }
                    
            
    private $fourthCatId;
    
    public function setFourthCatId($fourthCatId){
        $this->params['fourthCatId'] = $fourthCatId;
    }

    public function getFourthCatId(){
        return $this->fourthCatId;
    }
            
    private $thirdCatName;
    
    public function setThirdCatName($thirdCatName){
        $this->params['thirdCatName'] = $thirdCatName;
    }

    public function getThirdCatName(){
        return $this->thirdCatName;
    }
            
    private $jdGoodsCode;
    
    public function setJdGoodsCode($jdGoodsCode){
        $this->params['jdGoodsCode'] = $jdGoodsCode;
    }

    public function getJdGoodsCode(){
        return $this->jdGoodsCode;
    }
            
    private $goodsCode;
    
    public function setGoodsCode($goodsCode){
        $this->params['goodsCode'] = $goodsCode;
    }

    public function getGoodsCode(){
        return $this->goodsCode;
    }
            
    private $goodsName;
    
    public function setGoodsName($goodsName){
        $this->params['goodsName'] = $goodsName;
    }

    public function getGoodsName(){
        return $this->goodsName;
    }
            
    private $productModel;
    
    public function setProductModel($productModel){
        $this->params['productModel'] = $productModel;
    }

    public function getProductModel(){
        return $this->productModel;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>