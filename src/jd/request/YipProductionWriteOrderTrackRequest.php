<?php

namespace JdJos\jd\request;
class YipProductionWriteOrderTrackRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.yip.production.writeOrderTrack";
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
                                                        		                                    	                   			private $creationTime;
    	                        
	public function setCreationTime($creationTime){
		$this->creationTime = $creationTime;
         $this->apiParas["creationTime"] = $creationTime;
	}

	public function getCreationTime(){
	  return $this->creationTime;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                            }





        
 

