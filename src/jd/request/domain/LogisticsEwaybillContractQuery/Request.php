<?php
namespace LogisticsEwaybillContractQuery;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.request.open.QueryContractRequest";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $vendorCode;
    
    public function setVendorCode($vendorCode){
        $this->params['vendorCode'] = $vendorCode;
    }

    public function getVendorCode(){
        return $this->vendorCode;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
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