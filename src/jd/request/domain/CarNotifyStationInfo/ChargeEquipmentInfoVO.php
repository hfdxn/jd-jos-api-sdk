<?php

namespace JdJos\jd\request\domain\CarNotifyStationInfo;
class ChargeEquipmentInfoVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.station.entity.ChargeEquipmentInfoVO";
    }
        
    private $EquipmentID;
    
    public function setEquipmentID($EquipmentID){
        $this->params['EquipmentID'] = $EquipmentID;
    }

    public function getEquipmentID(){
        return $this->EquipmentID;
    }
            
    private $ManufacturerID;
    
    public function setManufacturerID($ManufacturerID){
        $this->params['ManufacturerID'] = $ManufacturerID;
    }

    public function getManufacturerID(){
        return $this->ManufacturerID;
    }
            
    private $EquipmentLng;
    
    public function setEquipmentLng($EquipmentLng){
        $this->params['EquipmentLng'] = $EquipmentLng;
    }

    public function getEquipmentLng(){
        return $this->EquipmentLng;
    }
            
    private $ConnectorInfos;
                                        
    public function setConnectorInfos($ConnectorInfos){
        $size = count($ConnectorInfos);
        for ($i=0; $i<$size; $i++){
            $ConnectorInfos [$i] = $ConnectorInfos [$i] ->getInstance();
        }
        $this->params['ConnectorInfos'] = $ConnectorInfos;
    }
                                    
            
    private $EquipmentName;
    
    public function setEquipmentName($EquipmentName){
        $this->params['EquipmentName'] = $EquipmentName;
    }

    public function getEquipmentName(){
        return $this->EquipmentName;
    }
            
    private $EquipmentModel;
    
    public function setEquipmentModel($EquipmentModel){
        $this->params['EquipmentModel'] = $EquipmentModel;
    }

    public function getEquipmentModel(){
        return $this->EquipmentModel;
    }
            
    private $ProductionDate;
    
    public function setProductionDate($ProductionDate){
        $this->params['ProductionDate'] = $ProductionDate;
    }

    public function getProductionDate(){
        return $this->ProductionDate;
    }
            
    private $EquipmentType;
    
    public function setEquipmentType($EquipmentType){
        $this->params['EquipmentType'] = $EquipmentType;
    }

    public function getEquipmentType(){
        return $this->EquipmentType;
    }
            
    private $EquipmentLat;
    
    public function setEquipmentLat($EquipmentLat){
        $this->params['EquipmentLat'] = $EquipmentLat;
    }

    public function getEquipmentLat(){
        return $this->EquipmentLat;
    }
            
    private $Power;
    
    public function setPower($Power){
        $this->params['Power'] = $Power;
    }

    public function getPower(){
        return $this->Power;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>