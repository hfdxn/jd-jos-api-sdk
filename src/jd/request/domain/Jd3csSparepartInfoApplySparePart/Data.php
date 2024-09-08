<?php
namespace Jd3csSparepartInfoApplySparePart;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ApplyOrder";
    }
        
    private $receivePhone;
    
    public function setReceivePhone($receivePhone){
        $this->params['receivePhone'] = $receivePhone;
    }

    public function getReceivePhone(){
        return $this->receivePhone;
    }
            
    private $townName;
    
    public function setTownName($townName){
        $this->params['townName'] = $townName;
    }

    public function getTownName(){
        return $this->townName;
    }
            
    private $companyType;
    
    public function setCompanyType($companyType){
        $this->params['companyType'] = $companyType;
    }

    public function getCompanyType(){
        return $this->companyType;
    }
            
    private $receiveAddress;
    
    public function setReceiveAddress($receiveAddress){
        $this->params['receiveAddress'] = $receiveAddress;
    }

    public function getReceiveAddress(){
        return $this->receiveAddress;
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
            
    private $sparePartList;
                                        
    public function setSparePartList($sparePartList){
        $size = count($sparePartList);
        for ($i=0; $i<$size; $i++){
            $sparePartList [$i] = $sparePartList [$i] ->getInstance();
        }
        $this->params['sparePartList'] = $sparePartList;
    }
                                    
            
    private $purchaserId;
    
    public function setPurchaserId($purchaserId){
        $this->params['purchaserId'] = $purchaserId;
    }

    public function getPurchaserId(){
        return $this->purchaserId;
    }
            
    private $receiveName;
    
    public function setReceiveName($receiveName){
        $this->params['receiveName'] = $receiveName;
    }

    public function getReceiveName(){
        return $this->receiveName;
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
            
    private $channelId;
    
    public function setChannelId($channelId){
        $this->params['channelId'] = $channelId;
    }

    public function getChannelId(){
        return $this->channelId;
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