<?php
class HomefwOwnserviceOrderappointRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.homefw.ownservice.orderappoint";
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

                        	                   			private $AppointPattern;
    	                        
	public function setAppointPattern($AppointPattern){
		$this->AppointPattern = $AppointPattern;
         $this->apiParas["AppointPattern"] = $AppointPattern;
	}

	public function getAppointPattern(){
	  return $this->AppointPattern;
	}

                        	                   			private $pickupType;
    	                        
	public function setPickupType($pickupType){
		$this->pickupType = $pickupType;
         $this->apiParas["pickupType"] = $pickupType;
	}

	public function getPickupType(){
	  return $this->pickupType;
	}

                        	                   			private $isInsured;
    	                        
	public function setIsInsured($isInsured){
		$this->isInsured = $isInsured;
         $this->apiParas["isInsured"] = $isInsured;
	}

	public function getIsInsured(){
	  return $this->isInsured;
	}

                        	                   			private $warehouseName;
    	                        
	public function setWarehouseName($warehouseName){
		$this->warehouseName = $warehouseName;
         $this->apiParas["warehouseName"] = $warehouseName;
	}

	public function getWarehouseName(){
	  return $this->warehouseName;
	}

                        	                   			private $insuranceAmount;
    	                        
	public function setInsuranceAmount($insuranceAmount){
		$this->insuranceAmount = $insuranceAmount;
         $this->apiParas["insuranceAmount"] = $insuranceAmount;
	}

	public function getInsuranceAmount(){
	  return $this->insuranceAmount;
	}

                        	                   			private $serviceAppid;
    	                        
	public function setServiceAppid($serviceAppid){
		$this->serviceAppid = $serviceAppid;
         $this->apiParas["serviceAppid"] = $serviceAppid;
	}

	public function getServiceAppid(){
	  return $this->serviceAppid;
	}

                        	                   			private $siteType;
    	                        
	public function setSiteType($siteType){
		$this->siteType = $siteType;
         $this->apiParas["siteType"] = $siteType;
	}

	public function getSiteType(){
	  return $this->siteType;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $itemServiceAppid;
                              public function setItemServiceAppid($itemServiceAppid ){
                 $this->itemServiceAppid=$itemServiceAppid;
                 $this->apiParas["itemServiceAppid"] = $itemServiceAppid;
              }

              public function getItemServiceAppid(){
              	return $this->itemServiceAppid;
              }
                                                                                                                                                                                                                                                                                                                                              private $itemSiteType;
                              public function setItemSiteType($itemSiteType ){
                 $this->itemSiteType=$itemSiteType;
                 $this->apiParas["itemSiteType"] = $itemSiteType;
              }

              public function getItemSiteType(){
              	return $this->itemSiteType;
              }
                                                                                                                                                                                                                                                                                                                                              private $itemRemark;
                              public function setItemRemark($itemRemark ){
                 $this->itemRemark=$itemRemark;
                 $this->apiParas["itemRemark"] = $itemRemark;
              }

              public function getItemRemark(){
              	return $this->itemRemark;
              }
                                                                                                                }





        
 

