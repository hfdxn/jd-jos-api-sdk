<?php
class HomefwOwnwarehouseListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.ownwarehouse.list";
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
                                    	                        	                        	                   			private $warehouseName;
    	                        
	public function setWarehouseName($warehouseName){
		$this->warehouseName = $warehouseName;
         $this->apiParas["warehouseName"] = $warehouseName;
	}

	public function getWarehouseName(){
	  return $this->warehouseName;
	}

}





        
 

