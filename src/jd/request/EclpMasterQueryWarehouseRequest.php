<?php

namespace JdJos\jd\request;
class EclpMasterQueryWarehouseRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.master.queryWarehouse";
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
                                                        		                                    	                   			private $deptNo;
    	                        
	public function setDeptNo($deptNo){
		$this->deptNo = $deptNo;
         $this->apiParas["deptNo"] = $deptNo;
	}

	public function getDeptNo(){
	  return $this->deptNo;
	}

                        	                   			private $warehouseNos;
    	                        
	public function setWarehouseNos($warehouseNos){
		$this->warehouseNos = $warehouseNos;
         $this->apiParas["warehouseNos"] = $warehouseNos;
	}

	public function getWarehouseNos(){
	  return $this->warehouseNos;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                                                    	}





        
 

