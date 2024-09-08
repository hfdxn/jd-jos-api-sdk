<?php
class HomefwTaskUploadFinishImgRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.uploadFinishImg";
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
                                    	                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $beforeCompletion1;
    	                        
	public function setBeforeCompletion1($beforeCompletion1){
		$this->beforeCompletion1 = $beforeCompletion1;
         $this->apiParas["beforeCompletion1"] = $beforeCompletion1;
	}

	public function getBeforeCompletion1(){
	  return $this->beforeCompletion1;
	}

                        	                   			private $beforeCompletion2;
    	                        
	public function setBeforeCompletion2($beforeCompletion2){
		$this->beforeCompletion2 = $beforeCompletion2;
         $this->apiParas["beforeCompletion2"] = $beforeCompletion2;
	}

	public function getBeforeCompletion2(){
	  return $this->beforeCompletion2;
	}

                        	                   			private $beforeCompletion3;
    	                        
	public function setBeforeCompletion3($beforeCompletion3){
		$this->beforeCompletion3 = $beforeCompletion3;
         $this->apiParas["beforeCompletion3"] = $beforeCompletion3;
	}

	public function getBeforeCompletion3(){
	  return $this->beforeCompletion3;
	}

                        	                   			private $beforeCompletion4;
    	                        
	public function setBeforeCompletion4($beforeCompletion4){
		$this->beforeCompletion4 = $beforeCompletion4;
         $this->apiParas["beforeCompletion4"] = $beforeCompletion4;
	}

	public function getBeforeCompletion4(){
	  return $this->beforeCompletion4;
	}

                        	                   			private $afterCompletion1;
    	                        
	public function setAfterCompletion1($afterCompletion1){
		$this->afterCompletion1 = $afterCompletion1;
         $this->apiParas["afterCompletion1"] = $afterCompletion1;
	}

	public function getAfterCompletion1(){
	  return $this->afterCompletion1;
	}

                        	                   			private $afterCompletion2;
    	                        
	public function setAfterCompletion2($afterCompletion2){
		$this->afterCompletion2 = $afterCompletion2;
         $this->apiParas["afterCompletion2"] = $afterCompletion2;
	}

	public function getAfterCompletion2(){
	  return $this->afterCompletion2;
	}

                        	                   			private $afterCompletion3;
    	                        
	public function setAfterCompletion3($afterCompletion3){
		$this->afterCompletion3 = $afterCompletion3;
         $this->apiParas["afterCompletion3"] = $afterCompletion3;
	}

	public function getAfterCompletion3(){
	  return $this->afterCompletion3;
	}

                        	                   			private $afterCompletion4;
    	                        
	public function setAfterCompletion4($afterCompletion4){
		$this->afterCompletion4 = $afterCompletion4;
         $this->apiParas["afterCompletion4"] = $afterCompletion4;
	}

	public function getAfterCompletion4(){
	  return $this->afterCompletion4;
	}

}





        
 

