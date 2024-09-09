<?php

namespace JdJos\jd\request;
class HomefwTaskOrderlogisticsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.orderlogistics";
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
                                    	                        	                   			private $saleOrderNo;
    	                        
	public function setSaleOrderNo($saleOrderNo){
		$this->saleOrderNo = $saleOrderNo;
         $this->apiParas["saleOrderNo"] = $saleOrderNo;
	}

	public function getSaleOrderNo(){
	  return $this->saleOrderNo;
	}

}





        
 

