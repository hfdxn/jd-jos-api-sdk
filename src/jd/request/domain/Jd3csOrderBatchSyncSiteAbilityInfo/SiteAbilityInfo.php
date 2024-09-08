<?php
namespace Jd3csOrderBatchSyncSiteAbilityInfo;
class SiteAbilityInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.BatchSiteAbility";
    }
        
    private $categoryId1;
    
    public function setCategoryId1($categoryId1){
        $this->params['categoryId1'] = $categoryId1;
    }

    public function getCategoryId1(){
        return $this->categoryId1;
    }
            
    private $category1;
    
    public function setCategory1($category1){
        $this->params['category1'] = $category1;
    }

    public function getCategory1(){
        return $this->category1;
    }
            
    private $categoryId2;
    
    public function setCategoryId2($categoryId2){
        $this->params['categoryId2'] = $categoryId2;
    }

    public function getCategoryId2(){
        return $this->categoryId2;
    }
            
    private $category2;
    
    public function setCategory2($category2){
        $this->params['category2'] = $category2;
    }

    public function getCategory2(){
        return $this->category2;
    }
            
    private $categoryId3;
    
    public function setCategoryId3($categoryId3){
        $this->params['categoryId3'] = $categoryId3;
    }

    public function getCategoryId3(){
        return $this->categoryId3;
    }
            
    private $category3;
    
    public function setCategory3($category3){
        $this->params['category3'] = $category3;
    }

    public function getCategory3(){
        return $this->category3;
    }
            
    private $secondServiceTypeId;
    
    public function setSecondServiceTypeId($secondServiceTypeId){
        $this->params['secondServiceTypeId'] = $secondServiceTypeId;
    }

    public function getSecondServiceTypeId(){
        return $this->secondServiceTypeId;
    }
            
    private $secondServiceTypeName;
    
    public function setSecondServiceTypeName($secondServiceTypeName){
        $this->params['secondServiceTypeName'] = $secondServiceTypeName;
    }

    public function getSecondServiceTypeName(){
        return $this->secondServiceTypeName;
    }
            
    private $serviceAreaList;
                                        
    public function setServiceAreaList($serviceAreaList){
        $size = count($serviceAreaList);
        for ($i=0; $i<$size; $i++){
            $serviceAreaList [$i] = $serviceAreaList [$i] ->getInstance();
        }
        $this->params['serviceAreaList'] = $serviceAreaList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>