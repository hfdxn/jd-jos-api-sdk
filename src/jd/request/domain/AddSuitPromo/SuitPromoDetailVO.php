<?php

namespace JdJos\jd\request\domain\AddSuitPromo;
class SuitPromoDetailVO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.promo.api.suit.domain.SuitPromoDetailVO";
    }
        
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $scene;
    
    public function setScene($scene){
        $this->params['scene'] = $scene;
    }

    public function getScene(){
        return $this->scene;
    }
            
    private $endTimes;
                        
    public function setEndTimes($endTimes){
        $this->params['endTimes'] = $endTimes;
    }
                    
            
    private $popVender;
    
    public function setPopVender($popVender){
        $this->params['popVender'] = $popVender;
    }

    public function getPopVender(){
        return $this->popVender;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $beginTimes;
                        
    public function setBeginTimes($beginTimes){
        $this->params['beginTimes'] = $beginTimes;
    }
                    
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $platForm;
                        
    public function setPlatForm($platForm){
        $this->params['platForm'] = $platForm;
    }
                    
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $isXnzt;
    
    public function setIsXnzt($isXnzt){
        $this->params['isXnzt'] = $isXnzt;
    }

    public function getIsXnzt(){
        return $this->isXnzt;
    }
            
    private $memberLevel;
    
    public function setMemberLevel($memberLevel){
        $this->params['memberLevel'] = $memberLevel;
    }

    public function getMemberLevel(){
        return $this->memberLevel;
    }
            
    private $suitPromoWareVOList;
                                        
    public function setSuitPromoWareVOList($suitPromoWareVOList){
        $size = count($suitPromoWareVOList);
        for ($i=0; $i<$size; $i++){
            $suitPromoWareVOList [$i] = $suitPromoWareVOList [$i] ->getInstance();
        }
        $this->params['suitPromoWareVOList'] = $suitPromoWareVOList;
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