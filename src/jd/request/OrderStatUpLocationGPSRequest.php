<?php
class OrderStatUpLocationGPSRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.OrderStat.upLocationGPS";
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
    private  $locationGPSParam;

    public function setLocationGPSParam($locationGPSParam){
        $this->apiParas['locationGPSParam'] = $locationGPSParam;
    }
    public function getLocationGPSParam(){
        return $this->apiParas['locationGPSParam'];
    }
}

?>