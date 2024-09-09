<?php

namespace JdJos\jd\request;
class CarStopChargeNotificationRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.car.stop.charge.notification";
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
                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                                            		                                    	                   			private $StartChargeSeq;
    	                        
	public function setStartChargeSeq($StartChargeSeq){
		$this->StartChargeSeq = $StartChargeSeq;
         $this->apiParas["StartChargeSeq"] = $StartChargeSeq;
	}

	public function getStartChargeSeq(){
	  return $this->StartChargeSeq;
	}

                        	                   			private $SuccStat;
    	                        
	public function setSuccStat($SuccStat){
		$this->SuccStat = $SuccStat;
         $this->apiParas["SuccStat"] = $SuccStat;
	}

	public function getSuccStat(){
	  return $this->SuccStat;
	}

                        	                   			private $StartChargeSeqStat;
    	                        
	public function setStartChargeSeqStat($StartChargeSeqStat){
		$this->StartChargeSeqStat = $StartChargeSeqStat;
         $this->apiParas["StartChargeSeqStat"] = $StartChargeSeqStat;
	}

	public function getStartChargeSeqStat(){
	  return $this->StartChargeSeqStat;
	}

                        	                   			private $FailReason;
    	                        
	public function setFailReason($FailReason){
		$this->FailReason = $FailReason;
         $this->apiParas["FailReason"] = $FailReason;
	}

	public function getFailReason(){
	  return $this->FailReason;
	}

                        	                   			private $ConnectorID;
    	                        
	public function setConnectorID($ConnectorID){
		$this->ConnectorID = $ConnectorID;
         $this->apiParas["ConnectorID"] = $ConnectorID;
	}

	public function getConnectorID(){
	  return $this->ConnectorID;
	}

                            }





        
 

