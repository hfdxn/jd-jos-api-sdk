<?php
namespace Jd3csOrderUpLoadLocationGPS;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.LocationGPSParam";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $lng;
    
    public function setLng($lng){
        $this->params['lng'] = $lng;
    }

    public function getLng(){
        return $this->lng;
    }
            
    private $locationType;
    
    public function setLocationType($locationType){
        $this->params['locationType'] = $locationType;
    }

    public function getLocationType(){
        return $this->locationType;
    }
            
    private $engineerId;
    
    public function setEngineerId($engineerId){
        $this->params['engineerId'] = $engineerId;
    }

    public function getEngineerId(){
        return $this->engineerId;
    }
            
    private $lat;
    
    public function setLat($lat){
        $this->params['lat'] = $lat;
    }

    public function getLat(){
        return $this->lat;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>