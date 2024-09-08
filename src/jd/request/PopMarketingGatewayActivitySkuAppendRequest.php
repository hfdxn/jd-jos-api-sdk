<?php
class PopMarketingGatewayActivitySkuAppendRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.marketing.gateway.activity.sku.append";
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
                                                        		                                    	                        	                   			private $refActId;
    	                        
	public function setRefActId($refActId){
		$this->refActId = $refActId;
         $this->apiParas["refActId"] = $refActId;
	}

	public function getRefActId(){
	  return $this->refActId;
	}

                        	                        	                   			private $skuFilePath;
    	                        
	public function setSkuFilePath($skuFilePath){
		$this->skuFilePath = $skuFilePath;
         $this->apiParas["skuFilePath"] = $skuFilePath;
	}

	public function getSkuFilePath(){
	  return $this->skuFilePath;
	}

                        	                        	                   			private $mktActRefereeNo;
    	                        
	public function setMktActRefereeNo($mktActRefereeNo){
		$this->mktActRefereeNo = $mktActRefereeNo;
         $this->apiParas["mktActRefereeNo"] = $mktActRefereeNo;
	}

	public function getMktActRefereeNo(){
	  return $this->mktActRefereeNo;
	}

                        	                   			private $mktActBaseNo;
    	                        
	public function setMktActBaseNo($mktActBaseNo){
		$this->mktActBaseNo = $mktActBaseNo;
         $this->apiParas["mktActBaseNo"] = $mktActBaseNo;
	}

	public function getMktActBaseNo(){
	  return $this->mktActBaseNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $skuIds;
                              public function setSkuIds($skuIds ){
                 $this->skuIds=$skuIds;
                 $this->apiParas["skuIds"] = $skuIds;
              }

              public function getSkuIds(){
              	return $this->skuIds;
              }
                                                                                                                                        	                        	                   			private $skuUploadType;
    	                        
	public function setSkuUploadType($skuUploadType){
		$this->skuUploadType = $skuUploadType;
         $this->apiParas["skuUploadType"] = $skuUploadType;
	}

	public function getSkuUploadType(){
	  return $this->skuUploadType;
	}

                        	                        	                            }





        
 

