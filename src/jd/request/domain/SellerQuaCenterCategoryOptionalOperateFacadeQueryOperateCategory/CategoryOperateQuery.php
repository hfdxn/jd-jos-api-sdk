<?php

namespace JdJos\jd\request\domain\SellerQuaCenterCategoryOptionalOperateFacadeQueryOperateCategory;
class CategoryOperateQuery{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.seller.qua.center.core.export.ohs.category.model.CategoryOperateQuery";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
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