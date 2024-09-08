<?php
namespace ComJdMarketToolPromoApiSuitServiceSuitPromoInitOuterService;
class SuitPromoInitQueryVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.promo.api.suit.domain.SuitPromoInitQueryVO";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $busiCode;
    
    public function setBusiCode($busiCode){
        $this->params['busiCode'] = $busiCode;
    }

    public function getBusiCode(){
        return $this->busiCode;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
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