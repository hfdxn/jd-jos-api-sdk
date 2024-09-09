<?php

namespace JdJos\jd\request\domain\Jd3csOrderSyncSiteAbilityInfo;
class ServiceAreaInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ServiceAreaInfo";
    }
        
    private $townName;
    
    public function setTownName($townName){
        $this->params['townName'] = $townName;
    }

    public function getTownName(){
        return $this->townName;
    }
            
    private $cityName;
    
    public function setCityName($cityName){
        $this->params['cityName'] = $cityName;
    }

    public function getCityName(){
        return $this->cityName;
    }
            
    private $countyId;
    
    public function setCountyId($countyId){
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId(){
        return $this->countyId;
    }
            
    private $provinceName;
    
    public function setProvinceName($provinceName){
        $this->params['provinceName'] = $provinceName;
    }

    public function getProvinceName(){
        return $this->provinceName;
    }
            
    private $cityId;
    
    public function setCityId($cityId){
        $this->params['cityId'] = $cityId;
    }

    public function getCityId(){
        return $this->cityId;
    }
            
    private $townId;
    
    public function setTownId($townId){
        $this->params['townId'] = $townId;
    }

    public function getTownId(){
        return $this->townId;
    }
            
    private $provinceId;
    
    public function setProvinceId($provinceId){
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId(){
        return $this->provinceId;
    }
            
    private $countyName;
    
    public function setCountyName($countyName){
        $this->params['countyName'] = $countyName;
    }

    public function getCountyName(){
        return $this->countyName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>