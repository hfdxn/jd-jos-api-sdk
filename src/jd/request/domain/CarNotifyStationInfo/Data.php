<?php
namespace CarNotifyStationInfo;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.car.dianmu.client.station.entity.StationsInfoRequest";
    }
        
    private $StationInfos;
                                        
    public function setStationInfos($StationInfos){
        $size = count($StationInfos);
        for ($i=0; $i<$size; $i++){
            $StationInfos [$i] = $StationInfos [$i] ->getInstance();
        }
        $this->params['StationInfos'] = $StationInfos;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>