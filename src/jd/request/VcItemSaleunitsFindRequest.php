<?php

namespace JdJos\jd\request;
class VcItemSaleunitsFindRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.saleunits.find";
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
                                    	}





        
 

