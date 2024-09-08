<?php
class HomefwTaskBookOndoorRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.task.bookOndoor";
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

                        	                   			private $masterName;
    	                        
	public function setMasterName($masterName){
		$this->masterName = $masterName;
         $this->apiParas["masterName"] = $masterName;
	}

	public function getMasterName(){
	  return $this->masterName;
	}

                        	                   			private $masterPhone;
    	                        
	public function setMasterPhone($masterPhone){
		$this->masterPhone = $masterPhone;
         $this->apiParas["masterPhone"] = $masterPhone;
	}

	public function getMasterPhone(){
	  return $this->masterPhone;
	}

                        	                   			private $bookDate;
    	                        
	public function setBookDate($bookDate){
		$this->bookDate = $bookDate;
         $this->apiParas["bookDate"] = $bookDate;
	}

	public function getBookDate(){
	  return $this->bookDate;
	}

                        	                   			private $operateTime;
    	                        
	public function setOperateTime($operateTime){
		$this->operateTime = $operateTime;
         $this->apiParas["operateTime"] = $operateTime;
	}

	public function getOperateTime(){
	  return $this->operateTime;
	}

                        	                   			private $logisticsNoExt;
    	                        
	public function setLogisticsNoExt($logisticsNoExt){
		$this->logisticsNoExt = $logisticsNoExt;
         $this->apiParas["logisticsNoExt"] = $logisticsNoExt;
	}

	public function getLogisticsNoExt(){
	  return $this->logisticsNoExt;
	}

                        	                   			private $city;
    	                        
	public function setCity($city){
		$this->city = $city;
         $this->apiParas["city"] = $city;
	}

	public function getCity(){
	  return $this->city;
	}

                        	                   			private $siteType;
    	                        
	public function setSiteType($siteType){
		$this->siteType = $siteType;
         $this->apiParas["siteType"] = $siteType;
	}

	public function getSiteType(){
	  return $this->siteType;
	}

                        	                   			private $siteCode;
    	                        
	public function setSiteCode($siteCode){
		$this->siteCode = $siteCode;
         $this->apiParas["siteCode"] = $siteCode;
	}

	public function getSiteCode(){
	  return $this->siteCode;
	}

                        	                   			private $siteName;
    	                        
	public function setSiteName($siteName){
		$this->siteName = $siteName;
         $this->apiParas["siteName"] = $siteName;
	}

	public function getSiteName(){
	  return $this->siteName;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

}





        
 

