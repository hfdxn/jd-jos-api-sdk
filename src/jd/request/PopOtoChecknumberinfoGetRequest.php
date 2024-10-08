<?php

namespace JdJos\jd\request;
class PopOtoChecknumberinfoGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.oto.checknumberinfo.get";
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
                                    	                        	                   			private $orderId;
    	                                                            
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["order_id"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $cardNumber;
    	                                                            
	public function setCardNumber($cardNumber){
		$this->cardNumber = $cardNumber;
         $this->apiParas["card_number"] = $cardNumber;
	}

	public function getCardNumber(){
	  return $this->cardNumber;
	}

                        	                   			private $pwdNumber;
    	                                                            
	public function setPwdNumber($pwdNumber){
		$this->pwdNumber = $pwdNumber;
         $this->apiParas["pwd_number"] = $pwdNumber;
	}

	public function getPwdNumber(){
	  return $this->pwdNumber;
	}

}





        
 

