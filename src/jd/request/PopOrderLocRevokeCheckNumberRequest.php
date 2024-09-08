<?php
class PopOrderLocRevokeCheckNumberRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.loc.revokeCheckNumber";
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
    private  $revokeCheckNumParam;

    public function setRevokeCheckNumParam($revokeCheckNumParam){
        $this->apiParas['revokeCheckNumParam'] = $revokeCheckNumParam;
    }
    public function getRevokeCheckNumParam(){
        return $this->apiParas['revokeCheckNumParam'];
    }
}

?>