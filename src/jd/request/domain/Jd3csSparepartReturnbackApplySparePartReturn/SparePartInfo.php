<?php
namespace Jd3csSparepartReturnbackApplySparePartReturn;
class SparePartInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.SparePart";
    }
        
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $partsCode;
    
    public function setPartsCode($partsCode){
        $this->params['partsCode'] = $partsCode;
    }

    public function getPartsCode(){
        return $this->partsCode;
    }
            
    private $partsApplyQty;
    
    public function setPartsApplyQty($partsApplyQty){
        $this->params['partsApplyQty'] = $partsApplyQty;
    }

    public function getPartsApplyQty(){
        return $this->partsApplyQty;
    }
            
    private $partsJdId;
    
    public function setPartsJdId($partsJdId){
        $this->params['partsJdId'] = $partsJdId;
    }

    public function getPartsJdId(){
        return $this->partsJdId;
    }
            
    private $oldPartsReturn;
    
    public function setOldPartsReturn($oldPartsReturn){
        $this->params['oldPartsReturn'] = $oldPartsReturn;
    }

    public function getOldPartsReturn(){
        return $this->oldPartsReturn;
    }
            
    private $failureName;
    
    public function setFailureName($failureName){
        $this->params['failureName'] = $failureName;
    }

    public function getFailureName(){
        return $this->failureName;
    }
            
    private $categoryId1;
    
    public function setCategoryId1($categoryId1){
        $this->params['categoryId1'] = $categoryId1;
    }

    public function getCategoryId1(){
        return $this->categoryId1;
    }
            
    private $categoryName3;
    
    public function setCategoryName3($categoryName3){
        $this->params['categoryName3'] = $categoryName3;
    }

    public function getCategoryName3(){
        return $this->categoryName3;
    }
            
    private $categoryId2;
    
    public function setCategoryId2($categoryId2){
        $this->params['categoryId2'] = $categoryId2;
    }

    public function getCategoryId2(){
        return $this->categoryId2;
    }
            
    private $categoryName4;
    
    public function setCategoryName4($categoryName4){
        $this->params['categoryName4'] = $categoryName4;
    }

    public function getCategoryName4(){
        return $this->categoryName4;
    }
            
    private $categoryName1;
    
    public function setCategoryName1($categoryName1){
        $this->params['categoryName1'] = $categoryName1;
    }

    public function getCategoryName1(){
        return $this->categoryName1;
    }
            
    private $categoryId3;
    
    public function setCategoryId3($categoryId3){
        $this->params['categoryId3'] = $categoryId3;
    }

    public function getCategoryId3(){
        return $this->categoryId3;
    }
            
    private $failureId;
    
    public function setFailureId($failureId){
        $this->params['failureId'] = $failureId;
    }

    public function getFailureId(){
        return $this->failureId;
    }
            
    private $categoryName2;
    
    public function setCategoryName2($categoryName2){
        $this->params['categoryName2'] = $categoryName2;
    }

    public function getCategoryName2(){
        return $this->categoryName2;
    }
            
    private $categoryId4;
    
    public function setCategoryId4($categoryId4){
        $this->params['categoryId4'] = $categoryId4;
    }

    public function getCategoryId4(){
        return $this->categoryId4;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $retailPrice;
    
    public function setRetailPrice($retailPrice){
        $this->params['retailPrice'] = $retailPrice;
    }

    public function getRetailPrice(){
        return $this->retailPrice;
    }
            
    private $productNo;
    
    public function setProductNo($productNo){
        $this->params['productNo'] = $productNo;
    }

    public function getProductNo(){
        return $this->productNo;
    }
            
    private $partsName;
    
    public function setPartsName($partsName){
        $this->params['partsName'] = $partsName;
    }

    public function getPartsName(){
        return $this->partsName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>