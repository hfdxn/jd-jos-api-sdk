<?php
class UeOrderConfirmBizProgressRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.confirmBizProgress";
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
                                                        		                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderNos;
                              public function setOrderNos($orderNos ){
                 $this->orderNos=$orderNos;
                 $this->apiParas["orderNos"] = $orderNos;
              }

              public function getOrderNos(){
              	return $this->orderNos;
              }
                                                                                                                                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                            }





        
 

