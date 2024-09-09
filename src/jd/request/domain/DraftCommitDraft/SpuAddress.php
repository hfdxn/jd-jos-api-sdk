<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class SpuAddress{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.house.JosHouseSpuAddress";
    }
        
    private $thirdCode;
    
    public function setThirdCode($thirdCode){
        $this->params['thirdCode'] = $thirdCode;
    }

    public function getThirdCode(){
        return $this->thirdCode;
    }
            
    private $addressDes;
    
    public function setAddressDes($addressDes){
        $this->params['addressDes'] = $addressDes;
    }

    public function getAddressDes(){
        return $this->addressDes;
    }
            
    private $firstName;
    
    public function setFirstName($firstName){
        $this->params['firstName'] = $firstName;
    }

    public function getFirstName(){
        return $this->firstName;
    }
            
    private $addressImg;
    
    public function setAddressImg($addressImg){
        $this->params['addressImg'] = $addressImg;
    }

    public function getAddressImg(){
        return $this->addressImg;
    }
            
    private $addressLat;
    
    public function setAddressLat($addressLat){
        $this->params['addressLat'] = $addressLat;
    }

    public function getAddressLat(){
        return $this->addressLat;
    }
            
    private $addressLon;
    
    public function setAddressLon($addressLon){
        $this->params['addressLon'] = $addressLon;
    }

    public function getAddressLon(){
        return $this->addressLon;
    }
            
    private $fourCode;
    
    public function setFourCode($fourCode){
        $this->params['fourCode'] = $fourCode;
    }

    public function getFourCode(){
        return $this->fourCode;
    }
            
    private $firstCode;
    
    public function setFirstCode($firstCode){
        $this->params['firstCode'] = $firstCode;
    }

    public function getFirstCode(){
        return $this->firstCode;
    }
            
    private $thirdName;
    
    public function setThirdName($thirdName){
        $this->params['thirdName'] = $thirdName;
    }

    public function getThirdName(){
        return $this->thirdName;
    }
            
    private $fourName;
    
    public function setFourName($fourName){
        $this->params['fourName'] = $fourName;
    }

    public function getFourName(){
        return $this->fourName;
    }
            
    private $secondCode;
    
    public function setSecondCode($secondCode){
        $this->params['secondCode'] = $secondCode;
    }

    public function getSecondCode(){
        return $this->secondCode;
    }
            
    private $secondName;
    
    public function setSecondName($secondName){
        $this->params['secondName'] = $secondName;
    }

    public function getSecondName(){
        return $this->secondName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>