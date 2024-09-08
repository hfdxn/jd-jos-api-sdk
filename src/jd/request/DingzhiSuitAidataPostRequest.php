<?php
class DingzhiSuitAidataPostRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dingzhi.suit.aidata.post";
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
                                                        		                                    	                   			private $output;
    	                        
	public function setOutput($output){
		$this->output = $output;
         $this->apiParas["output"] = $output;
	}

	public function getOutput(){
	  return $this->output;
	}

                        	                   			private $input;
    	                        
	public function setInput($input){
		$this->input = $input;
         $this->apiParas["input"] = $input;
	}

	public function getInput(){
	  return $this->input;
	}

                        	                   			private $bizNo;
    	                        
	public function setBizNo($bizNo){
		$this->bizNo = $bizNo;
         $this->apiParas["bizNo"] = $bizNo;
	}

	public function getBizNo(){
	  return $this->bizNo;
	}

                        	                   			private $invokeRealTimes;
    	                        
	public function setInvokeRealTimes($invokeRealTimes){
		$this->invokeRealTimes = $invokeRealTimes;
         $this->apiParas["invokeRealTimes"] = $invokeRealTimes;
	}

	public function getInvokeRealTimes(){
	  return $this->invokeRealTimes;
	}

                        	                   			private $createTime;
    	                        
	public function setCreateTime($createTime){
		$this->createTime = $createTime;
         $this->apiParas["createTime"] = $createTime;
	}

	public function getCreateTime(){
	  return $this->createTime;
	}

                        	                   			private $isAdopt;
    	                        
	public function setIsAdopt($isAdopt){
		$this->isAdopt = $isAdopt;
         $this->apiParas["isAdopt"] = $isAdopt;
	}

	public function getIsAdopt(){
	  return $this->isAdopt;
	}

                        	                   			private $extInfo;
    	                        
	public function setExtInfo($extInfo){
		$this->extInfo = $extInfo;
         $this->apiParas["extInfo"] = $extInfo;
	}

	public function getExtInfo(){
	  return $this->extInfo;
	}

                        	                   			private $user;
    	                        
	public function setUser($user){
		$this->user = $user;
         $this->apiParas["user"] = $user;
	}

	public function getUser(){
	  return $this->user;
	}

                            }





        
 

