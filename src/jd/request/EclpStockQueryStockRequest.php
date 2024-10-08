<?php

namespace JdJos\jd\request;
class EclpStockQueryStockRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.stock.queryStock";
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

                        	                   			private $warehouseNo;
    	                        
	public function setWarehouseNo($warehouseNo){
		$this->warehouseNo = $warehouseNo;
         $this->apiParas["warehouseNo"] = $warehouseNo;
	}

	public function getWarehouseNo(){
	  return $this->warehouseNo;
	}

                        	                   			private $stockStatus;
    	                        
	public function setStockStatus($stockStatus){
		$this->stockStatus = $stockStatus;
         $this->apiParas["stockStatus"] = $stockStatus;
	}

	public function getStockStatus(){
	  return $this->stockStatus;
	}

                        	                   			private $stockType;
    	                        
	public function setStockType($stockType){
		$this->stockType = $stockType;
         $this->apiParas["stockType"] = $stockType;
	}

	public function getStockType(){
	  return $this->stockType;
	}

                        	                   			private $goodsNo;
    	                        
	public function setGoodsNo($goodsNo){
		$this->goodsNo = $goodsNo;
         $this->apiParas["goodsNo"] = $goodsNo;
	}

	public function getGoodsNo(){
	  return $this->goodsNo;
	}

                        	                   			private $currentPage;
    	                        
	public function setCurrentPage($currentPage){
		$this->currentPage = $currentPage;
         $this->apiParas["currentPage"] = $currentPage;
	}

	public function getCurrentPage(){
	  return $this->currentPage;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $returnZeroStock;
    	                        
	public function setReturnZeroStock($returnZeroStock){
		$this->returnZeroStock = $returnZeroStock;
         $this->apiParas["returnZeroStock"] = $returnZeroStock;
	}

	public function getReturnZeroStock(){
	  return $this->returnZeroStock;
	}

                        	                   			private $returnIsvLotattrs;
    	                        
	public function setReturnIsvLotattrs($returnIsvLotattrs){
		$this->returnIsvLotattrs = $returnIsvLotattrs;
         $this->apiParas["returnIsvLotattrs"] = $returnIsvLotattrs;
	}

	public function getReturnIsvLotattrs(){
	  return $this->returnIsvLotattrs;
	}

                        	                   			private $goodsLevel;
    	                        
	public function setGoodsLevel($goodsLevel){
		$this->goodsLevel = $goodsLevel;
         $this->apiParas["goodsLevel"] = $goodsLevel;
	}

	public function getGoodsLevel(){
	  return $this->goodsLevel;
	}

                        	                   			private $isvSku;
    	                        
	public function setIsvSku($isvSku){
		$this->isvSku = $isvSku;
         $this->apiParas["isvSku"] = $isvSku;
	}

	public function getIsvSku(){
	  return $this->isvSku;
	}

                        	                   			private $sellerGoodsSign;
    	                        
	public function setSellerGoodsSign($sellerGoodsSign){
		$this->sellerGoodsSign = $sellerGoodsSign;
         $this->apiParas["sellerGoodsSign"] = $sellerGoodsSign;
	}

	public function getSellerGoodsSign(){
	  return $this->sellerGoodsSign;
	}

                                                    	}





        
 

