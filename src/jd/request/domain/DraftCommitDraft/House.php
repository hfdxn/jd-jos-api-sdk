<?php

namespace JdJos\jd\request\domain\DraftCommitDraft;
class House{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.house.JosHouseSpu";
    }
        
    private $houseImgGroups;
                                        
    public function setHouseImgGroups($houseImgGroups){
        $size = count($houseImgGroups);
        for ($i=0; $i<$size; $i++){
            $houseImgGroups [$i] = $houseImgGroups [$i] ->getInstance();
        }
        $this->params['houseImgGroups'] = $houseImgGroups;
    }
                                    
            
    private $certificates;
                                        
    public function setCertificates($certificates){
        $size = count($certificates);
        for ($i=0; $i<$size; $i++){
            $certificates [$i] = $certificates [$i] ->getInstance();
        }
        $this->params['certificates'] = $certificates;
    }
                                    
            
    private $handleType;
    
    public function setHandleType($handleType){
        $this->params['handleType'] = $handleType;
    }

    public function getHandleType(){
        return $this->handleType;
    }
            
    private $spuFlag;
    
    public function setSpuFlag($spuFlag){
        $this->params['spuFlag'] = $spuFlag;
    }

    public function getSpuFlag(){
        return $this->spuFlag;
    }
            
    private $spuTitle;
    
    public function setSpuTitle($spuTitle){
        $this->params['spuTitle'] = $spuTitle;
    }

    public function getSpuTitle(){
        return $this->spuTitle;
    }
            
    private $spuAvgAmt;
    
    public function setSpuAvgAmt($spuAvgAmt){
        $this->params['spuAvgAmt'] = $spuAvgAmt;
    }

    public function getSpuAvgAmt(){
        return $this->spuAvgAmt;
    }
            
    private $spuTotalAmt;
    
    public function setSpuTotalAmt($spuTotalAmt){
        $this->params['spuTotalAmt'] = $spuTotalAmt;
    }

    public function getSpuTotalAmt(){
        return $this->spuTotalAmt;
    }
            
    private $spuAddresss;
                                        
    public function setSpuAddresss($spuAddresss){
        $size = count($spuAddresss);
        for ($i=0; $i<$size; $i++){
            $spuAddresss [$i] = $spuAddresss [$i] ->getInstance();
        }
        $this->params['spuAddresss'] = $spuAddresss;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>