<?php
namespace CarNotifyStationInfo;
class ChargeConnectorInfoVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.station.entity.ChargeConnectorInfoVO";
    }
        
    private $VoltageLowerLimits;
    
    public function setVoltageLowerLimits($VoltageLowerLimits){
        $this->params['VoltageLowerLimits'] = $VoltageLowerLimits;
    }

    public function getVoltageLowerLimits(){
        return $this->VoltageLowerLimits;
    }
            
    private $ConnectorType;
    
    public function setConnectorType($ConnectorType){
        $this->params['ConnectorType'] = $ConnectorType;
    }

    public function getConnectorType(){
        return $this->ConnectorType;
    }
            
    private $VoltageUpperLimits;
    
    public function setVoltageUpperLimits($VoltageUpperLimits){
        $this->params['VoltageUpperLimits'] = $VoltageUpperLimits;
    }

    public function getVoltageUpperLimits(){
        return $this->VoltageUpperLimits;
    }
            
    private $NationalStandard;
    
    public function setNationalStandard($NationalStandard){
        $this->params['NationalStandard'] = $NationalStandard;
    }

    public function getNationalStandard(){
        return $this->NationalStandard;
    }
            
    private $ConnectorName;
    
    public function setConnectorName($ConnectorName){
        $this->params['ConnectorName'] = $ConnectorName;
    }

    public function getConnectorName(){
        return $this->ConnectorName;
    }
            
    private $ParkNo;
    
    public function setParkNo($ParkNo){
        $this->params['ParkNo'] = $ParkNo;
    }

    public function getParkNo(){
        return $this->ParkNo;
    }
            
    private $Current;
    
    public function setCurrent($Current){
        $this->params['Current'] = $Current;
    }

    public function getCurrent(){
        return $this->Current;
    }
            
    private $power;
    
    public function setPower($power){
        $this->params['power'] = $power;
    }

    public function getPower(){
        return $this->power;
    }
            
    private $ConnectorID;
    
    public function setConnectorID($ConnectorID){
        $this->params['ConnectorID'] = $ConnectorID;
    }

    public function getConnectorID(){
        return $this->ConnectorID;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>