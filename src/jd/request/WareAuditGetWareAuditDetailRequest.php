<?php
class WareAuditGetWareAuditDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.audit.getWareAuditDetail";
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
    private  $wareAuditParam;

    public function setWareAuditParam($wareAuditParam){
        $this->apiParas['wareAuditParam'] = $wareAuditParam;
    }
    public function getWareAuditParam(){
        return $this->apiParas['wareAuditParam'];
    }
}

?>