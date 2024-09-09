<?php

namespace JdJos\jd\request\domain\CreateAppointment;
class AppointmentInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.appointment.api.domain.AppointmentInfo";
    }
        
    private $robStartTime;
    
    public function setRobStartTime($robStartTime){
        $this->params['robStartTime'] = $robStartTime;
    }

    public function getRobStartTime(){
        return $this->robStartTime;
    }
            
    private $appointmentType;
    
    public function setAppointmentType($appointmentType){
        $this->params['appointmentType'] = $appointmentType;
    }

    public function getAppointmentType(){
        return $this->appointmentType;
    }
            
    private $groupType;
    
    public function setGroupType($groupType){
        $this->params['groupType'] = $groupType;
    }

    public function getGroupType(){
        return $this->groupType;
    }
            
    private $autoAddCart;
    
    public function setAutoAddCart($autoAddCart){
        $this->params['autoAddCart'] = $autoAddCart;
    }

    public function getAutoAddCart(){
        return $this->autoAddCart;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $strategyParam;
    
    public function setStrategyParam($strategyParam){
        $this->params['strategyParam'] = $strategyParam;
    }

    public function getStrategyParam(){
        return $this->strategyParam;
    }
            
    private $needCheck;
    
    public function setNeedCheck($needCheck){
        $this->params['needCheck'] = $needCheck;
    }

    public function getNeedCheck(){
        return $this->needCheck;
    }
            
    private $appointmentEndTime;
    
    public function setAppointmentEndTime($appointmentEndTime){
        $this->params['appointmentEndTime'] = $appointmentEndTime;
    }

    public function getAppointmentEndTime(){
        return $this->appointmentEndTime;
    }
            
    private $skuIds;
                        
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }
                    
            
    private $preSale;
    
    public function setPreSale($preSale){
        $this->params['preSale'] = $preSale;
    }

    public function getPreSale(){
        return $this->preSale;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $appointmentStartTime;
    
    public function setAppointmentStartTime($appointmentStartTime){
        $this->params['appointmentStartTime'] = $appointmentStartTime;
    }

    public function getAppointmentStartTime(){
        return $this->appointmentStartTime;
    }
            
    private $hideMemberNumber;
    
    public function setHideMemberNumber($hideMemberNumber){
        $this->params['hideMemberNumber'] = $hideMemberNumber;
    }

    public function getHideMemberNumber(){
        return $this->hideMemberNumber;
    }
            
    private $wareIds;
                        
    public function setWareIds($wareIds){
        $this->params['wareIds'] = $wareIds;
    }
                    
            
    private $robEndTime;
    
    public function setRobEndTime($robEndTime){
        $this->params['robEndTime'] = $robEndTime;
    }

    public function getRobEndTime(){
        return $this->robEndTime;
    }
            
    private $hideYuyuePrice;
    
    public function setHideYuyuePrice($hideYuyuePrice){
        $this->params['hideYuyuePrice'] = $hideYuyuePrice;
    }

    public function getHideYuyuePrice(){
        return $this->hideYuyuePrice;
    }
            
    private $open_id_seller;
    
    public function setOpen_id_seller($open_id_seller){
        $this->params['open_id_seller'] = $open_id_seller;
    }

    public function getOpen_id_seller(){
        return $this->open_id_seller;
    }
            
    private $xid_seller;
    
    public function setXid_seller($xid_seller){
        $this->params['xid_seller'] = $xid_seller;
    }

    public function getXid_seller(){
        return $this->xid_seller;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>