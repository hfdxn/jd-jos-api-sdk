<?php
namespace SellerQuaCenterBrandOperateFacadeQueryOperateBrand;
class BrandOperateQuery{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.qua.center.core.export.ohs.brand.model.BrandOperateQuery";
    }
        
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $pageNum;
    
    public function setPageNum($pageNum){
        $this->params['pageNum'] = $pageNum;
    }

    public function getPageNum(){
        return $this->pageNum;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>