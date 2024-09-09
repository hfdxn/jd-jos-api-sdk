<?php

namespace JdJos\jd\request\domain\LogisticsEwaybillWaybillCreate;
class FromAddress{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.waybill.WaybillAddress";
    }
        
    private $provinceName;
    
    public function setProvinceName($provinceName){
        $this->params['provinceName'] = $provinceName;
    }

    public function getProvinceName(){
        return $this->provinceName;
    }
            
    private $cityName;
    
    public function setCityName($cityName){
        $this->params['cityName'] = $cityName;
    }

    public function getCityName(){
        return $this->cityName;
    }
            
    private $countryName;
    
    public function setCountryName($countryName){
        $this->params['countryName'] = $countryName;
    }

    public function getCountryName(){
        return $this->countryName;
    }
            
    private $countrysideName;
    
    public function setCountrysideName($countrysideName){
        $this->params['countrysideName'] = $countrysideName;
    }

    public function getCountrysideName(){
        return $this->countrysideName;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
            
    private $contact;
    
    public function setContact($contact){
        $this->params['contact'] = $contact;
    }

    public function getContact(){
        return $this->contact;
    }
            
    private $phone;
    
    public function setPhone($phone){
        $this->params['phone'] = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $oaid;
    
    public function setOaid($oaid){
        $this->params['oaid'] = $oaid;
    }

    public function getOaid(){
        return $this->oaid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>