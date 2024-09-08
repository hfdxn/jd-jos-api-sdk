<?php
class AfsNegotiationInformationGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.afs.negotiation.Information.get";
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
                                                        		                                                        		                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $refId;
    	                        
	public function setRefId($refId){
		$this->refId = $refId;
         $this->apiParas["refId"] = $refId;
	}

	public function getRefId(){
	  return $this->refId;
	}

                        	                        	                                                        }





        
 

