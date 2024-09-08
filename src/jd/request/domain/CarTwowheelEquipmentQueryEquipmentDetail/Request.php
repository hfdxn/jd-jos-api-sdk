<?php
namespace CarTwowheelEquipmentQueryEquipmentDetail;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.twowheel.entity.TWEquipmentsDetailRpcRequest";
    }
        
    private $jdVenderId;
    
    public function setJdVenderId($jdVenderId){
        $this->params['jdVenderId'] = $jdVenderId;
    }

    public function getJdVenderId(){
        return $this->jdVenderId;
    }
            
    private $communityId;
    
    public function setCommunityId($communityId){
        $this->params['communityId'] = $communityId;
    }

    public function getCommunityId(){
        return $this->communityId;
    }
            
    private $equipmentId;
    
    public function setEquipmentId($equipmentId){
        $this->params['equipmentId'] = $equipmentId;
    }

    public function getEquipmentId(){
        return $this->equipmentId;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>