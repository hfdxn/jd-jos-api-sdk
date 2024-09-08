<?php
class InteractCenterApiJosJosFansActivityWriteServiceCreateGiftActivityWithResultRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.interact.center.api.jos.JosFansActivityWriteService.createGiftActivityWithResult";
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
    private  $clientSource;

    public function setClientSource($clientSource){
        $this->apiParas['clientSource'] = $clientSource;
    }
    public function getClientSource(){
        return $this->apiParas['clientSource'];
    }
    private  $giftActivity;

    public function setGiftActivity($giftActivity){
        $this->apiParas['giftActivity'] = $giftActivity;
    }
    public function getGiftActivity(){
        return $this->apiParas['giftActivity'];
    }
}

?>