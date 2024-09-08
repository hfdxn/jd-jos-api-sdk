<?php
class PopTaurusQueryDayBillListNoPayRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.taurus.queryDayBillListNoPay";
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
                                                        		                                    	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                   			private $charset;
    	                        
	public function setCharset($charset){
		$this->charset = $charset;
         $this->apiParas["charset"] = $charset;
	}

	public function getCharset(){
	  return $this->charset;
	}

                        	                   			private $dataType;
    	                        
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["dataType"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
	}

                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                   			private $checksum;
    	                        
	public function setChecksum($checksum){
		$this->checksum = $checksum;
         $this->apiParas["checksum"] = $checksum;
	}

	public function getChecksum(){
	  return $this->checksum;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                        	                   			private $payState;
    	                        
	public function setPayState($payState){
		$this->payState = $payState;
         $this->apiParas["payState"] = $payState;
	}

	public function getPayState(){
	  return $this->payState;
	}

                        	                   			private $secAccountNo;
    	                        
	public function setSecAccountNo($secAccountNo){
		$this->secAccountNo = $secAccountNo;
         $this->apiParas["secAccountNo"] = $secAccountNo;
	}

	public function getSecAccountNo(){
	  return $this->secAccountNo;
	}

                        	                            }





        
 

