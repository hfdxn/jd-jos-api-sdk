<?php
namespace CarNotifyStationInfo;
class ChargeStationsInfoVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.station.entity.ChargeStationsInfoVO";
    }
        
    private $Pictures;
                        
    public function setPictures($Pictures){
        $this->params['Pictures'] = $Pictures;
    }
                    
            
    private $StationLng;
    
    public function setStationLng($StationLng){
        $this->params['StationLng'] = $StationLng;
    }

    public function getStationLng(){
        return $this->StationLng;
    }
            
    private $SiteGuide;
    
    public function setSiteGuide($SiteGuide){
        $this->params['SiteGuide'] = $SiteGuide;
    }

    public function getSiteGuide(){
        return $this->SiteGuide;
    }
            
    private $Address;
    
    public function setAddress($Address){
        $this->params['Address'] = $Address;
    }

    public function getAddress(){
        return $this->Address;
    }
            
    private $ServiceTel;
    
    public function setServiceTel($ServiceTel){
        $this->params['ServiceTel'] = $ServiceTel;
    }

    public function getServiceTel(){
        return $this->ServiceTel;
    }
            
    private $SupportOrder;
    
    public function setSupportOrder($SupportOrder){
        $this->params['SupportOrder'] = $SupportOrder;
    }

    public function getSupportOrder(){
        return $this->SupportOrder;
    }
            
    private $OperatorID;
    
    public function setOperatorID($OperatorID){
        $this->params['OperatorID'] = $OperatorID;
    }

    public function getOperatorID(){
        return $this->OperatorID;
    }
            
    private $StationID;
    
    public function setStationID($StationID){
        $this->params['StationID'] = $StationID;
    }

    public function getStationID(){
        return $this->StationID;
    }
            
    private $StationRemark;
    
    public function setStationRemark($StationRemark){
        $this->params['StationRemark'] = $StationRemark;
    }

    public function getStationRemark(){
        return $this->StationRemark;
    }
            
    private $Remark;
    
    public function setRemark($Remark){
        $this->params['Remark'] = $Remark;
    }

    public function getRemark(){
        return $this->Remark;
    }
            
    private $StationName;
    
    public function setStationName($StationName){
        $this->params['StationName'] = $StationName;
    }

    public function getStationName(){
        return $this->StationName;
    }
            
    private $EquipmentRemark;
    
    public function setEquipmentRemark($EquipmentRemark){
        $this->params['EquipmentRemark'] = $EquipmentRemark;
    }

    public function getEquipmentRemark(){
        return $this->EquipmentRemark;
    }
            
    private $StationTel;
    
    public function setStationTel($StationTel){
        $this->params['StationTel'] = $StationTel;
    }

    public function getStationTel(){
        return $this->StationTel;
    }
            
    private $StationLat;
    
    public function setStationLat($StationLat){
        $this->params['StationLat'] = $StationLat;
    }

    public function getStationLat(){
        return $this->StationLat;
    }
            
    private $StationStatus;
    
    public function setStationStatus($StationStatus){
        $this->params['StationStatus'] = $StationStatus;
    }

    public function getStationStatus(){
        return $this->StationStatus;
    }
            
    private $CountryCode;
    
    public function setCountryCode($CountryCode){
        $this->params['CountryCode'] = $CountryCode;
    }

    public function getCountryCode(){
        return $this->CountryCode;
    }
            
    private $StationType;
    
    public function setStationType($StationType){
        $this->params['StationType'] = $StationType;
    }

    public function getStationType(){
        return $this->StationType;
    }
            
    private $EquipmentOwnerID;
    
    public function setEquipmentOwnerID($EquipmentOwnerID){
        $this->params['EquipmentOwnerID'] = $EquipmentOwnerID;
    }

    public function getEquipmentOwnerID(){
        return $this->EquipmentOwnerID;
    }
            
    private $Construction;
    
    public function setConstruction($Construction){
        $this->params['Construction'] = $Construction;
    }

    public function getConstruction(){
        return $this->Construction;
    }
            
    private $MatchCars;
    
    public function setMatchCars($MatchCars){
        $this->params['MatchCars'] = $MatchCars;
    }

    public function getMatchCars(){
        return $this->MatchCars;
    }
            
    private $ParkFee;
    
    public function setParkFee($ParkFee){
        $this->params['ParkFee'] = $ParkFee;
    }

    public function getParkFee(){
        return $this->ParkFee;
    }
            
    private $ParkInfo;
    
    public function setParkInfo($ParkInfo){
        $this->params['ParkInfo'] = $ParkInfo;
    }

    public function getParkInfo(){
        return $this->ParkInfo;
    }
            
    private $ServiceFee;
    
    public function setServiceFee($ServiceFee){
        $this->params['ServiceFee'] = $ServiceFee;
    }

    public function getServiceFee(){
        return $this->ServiceFee;
    }
            
    private $Payment;
    
    public function setPayment($Payment){
        $this->params['Payment'] = $Payment;
    }

    public function getPayment(){
        return $this->Payment;
    }
            
    private $ElectricityFee;
    
    public function setElectricityFee($ElectricityFee){
        $this->params['ElectricityFee'] = $ElectricityFee;
    }

    public function getElectricityFee(){
        return $this->ElectricityFee;
    }
            
    private $ConnectorRemark;
    
    public function setConnectorRemark($ConnectorRemark){
        $this->params['ConnectorRemark'] = $ConnectorRemark;
    }

    public function getConnectorRemark(){
        return $this->ConnectorRemark;
    }
            
    private $AreaCode;
    
    public function setAreaCode($AreaCode){
        $this->params['AreaCode'] = $AreaCode;
    }

    public function getAreaCode(){
        return $this->AreaCode;
    }
            
    private $EquipmentInfos;
                                        
    public function setEquipmentInfos($EquipmentInfos){
        $size = count($EquipmentInfos);
        for ($i=0; $i<$size; $i++){
            $EquipmentInfos [$i] = $EquipmentInfos [$i] ->getInstance();
        }
        $this->params['EquipmentInfos'] = $EquipmentInfos;
    }
                                    
            
    private $ParkNums;
    
    public function setParkNums($ParkNums){
        $this->params['ParkNums'] = $ParkNums;
    }

    public function getParkNums(){
        return $this->ParkNums;
    }
            
    private $BusineHours;
    
    public function setBusineHours($BusineHours){
        $this->params['BusineHours'] = $BusineHours;
    }

    public function getBusineHours(){
        return $this->BusineHours;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>