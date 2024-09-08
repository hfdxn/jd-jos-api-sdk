<?php
class WeighingSaleOrderBatchSubmitRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.weighing.sale.order.batchSubmit";
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
    private  $clientInfo;

    public function setClientInfo($clientInfo){
        $this->apiParas['clientInfo'] = $clientInfo;
    }
    public function getClientInfo(){
        return $this->apiParas['clientInfo'];
    }
    private  $nsspOrderReq;

    public function setNsspOrderReq($nsspOrderReq){
        $this->apiParas['nsspOrderReq'] = $nsspOrderReq;
    }
    public function getNsspOrderReq(){
        return $this->apiParas['nsspOrderReq'];
    }
}

?>