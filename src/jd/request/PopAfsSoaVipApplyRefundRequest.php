<?php
class PopAfsSoaVipApplyRefundRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.afs.soa.vipApplyRefund";
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
                                    	                   			private $ids;
    	                        
	public function setIds($ids){
		$this->ids = $ids;
         $this->apiParas["ids"] = $ids;
	}

	public function getIds(){
	  return $this->ids;
	}

                        	                   			private $venderID;
    	                        
	public function setVenderID($venderID){
		$this->venderID = $venderID;
         $this->apiParas["venderID"] = $venderID;
	}

	public function getVenderID(){
	  return $this->venderID;
	}

}





        
 

