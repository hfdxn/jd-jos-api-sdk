<?php
class PurchaseOrderShipmentModifyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.purchase.order.shipment.modify";
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
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $shipCompanyName;
    	                        
	public function setShipCompanyName($shipCompanyName){
		$this->shipCompanyName = $shipCompanyName;
         $this->apiParas["shipCompanyName"] = $shipCompanyName;
	}

	public function getShipCompanyName(){
	  return $this->shipCompanyName;
	}

                        	                        	                   			private $shipmentNo;
    	                        
	public function setShipmentNo($shipmentNo){
		$this->shipmentNo = $shipmentNo;
         $this->apiParas["shipmentNo"] = $shipmentNo;
	}

	public function getShipmentNo(){
	  return $this->shipmentNo;
	}

                        	                   			private $shipCompanyId;
    	                        
	public function setShipCompanyId($shipCompanyId){
		$this->shipCompanyId = $shipCompanyId;
         $this->apiParas["shipCompanyId"] = $shipCompanyId;
	}

	public function getShipCompanyId(){
	  return $this->shipCompanyId;
	}

                            }





        
 

