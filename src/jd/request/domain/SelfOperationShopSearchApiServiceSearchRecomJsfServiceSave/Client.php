<?php
namespace SelfOperationShopSearchApiServiceSearchRecomJsfServiceSave;
class Client{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.self.operation.shop.api.common.Client";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $open_id_isv;
    
    public function setOpen_id_isv($open_id_isv){
        $this->params['open_id_isv'] = $open_id_isv;
    }

    public function getOpen_id_isv(){
        return $this->open_id_isv;
    }
            
    private $xid_isv;
    
    public function setXid_isv($xid_isv){
        $this->params['xid_isv'] = $xid_isv;
    }

    public function getXid_isv(){
        return $this->xid_isv;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>