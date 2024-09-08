<?php
namespace CarTwowheelEquipmentQueryEquipmentsPage;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.twowheel.entity.TWQueryEquipmentsRpcRequest";
    }
        
    private $latitude;
    
    public function setLatitude($latitude){
        $this->params['latitude'] = $latitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }
            
    private $searchName;
    
    public function setSearchName($searchName){
        $this->params['searchName'] = $searchName;
    }

    public function getSearchName(){
        return $this->searchName;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $longitude;
    
    public function setLongitude($longitude){
        $this->params['longitude'] = $longitude;
    }

    public function getLongitude(){
        return $this->longitude;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>