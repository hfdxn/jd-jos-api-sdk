<?php

namespace JdJos\jd\request;
class PopOrderSopLogisticsUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.sop.logistics.update";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $oneGlobalOrderModelNoLogistic;

    public function setOneGlobalOrderModelNoLogistic($oneGlobalOrderModelNoLogistic){
        $this->apiParas['oneGlobalOrderModelNoLogistic'] = $oneGlobalOrderModelNoLogistic;
    }
    public function getOneGlobalOrderModelNoLogistic(){
        return $this->apiParas['oneGlobalOrderModelNoLogistic'];
    }
    private  $logisticsGlobalModelList;

    public function setLogisticsGlobalModelList($logisticsGlobalModelList){
        $this->apiParas['logisticsGlobalModelList'] = $logisticsGlobalModelList;
    }
    public function getLogisticsGlobalModelList(){
        return $this->apiParas['logisticsGlobalModelList'];
    }
}

?>