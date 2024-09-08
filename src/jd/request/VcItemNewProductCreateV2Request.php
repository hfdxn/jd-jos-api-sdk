<?php
class VcItemNewProductCreateV2Request
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.newProduct.createV2";
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
                                    	                        	                   			private $applyId;
    	                                                            
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["apply_id"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	                                            		                                    	                   			private $leafCid;
    	                                                            
	public function setLeafCid($leafCid){
		$this->leafCid = $leafCid;
         $this->apiParas["leaf_cid"] = $leafCid;
	}

	public function getLeafCid(){
	  return $this->leafCid;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $introMobile;
    	                                                            
	public function setIntroMobile($introMobile){
		$this->introMobile = $introMobile;
         $this->apiParas["intro_mobile"] = $introMobile;
	}

	public function getIntroMobile(){
	  return $this->introMobile;
	}

                        	                   			private $videoId;
    	                                                            
	public function setVideoId($videoId){
		$this->videoId = $videoId;
         $this->apiParas["video_id"] = $videoId;
	}

	public function getVideoId(){
	  return $this->videoId;
	}

                        	                   			private $purchasePrice;
    	                                                            
	public function setPurchasePrice($purchasePrice){
		$this->purchasePrice = $purchasePrice;
         $this->apiParas["purchase_price"] = $purchasePrice;
	}

	public function getPurchasePrice(){
	  return $this->purchasePrice;
	}

                        	                   			private $shortTitle;
    	                                                            
	public function setShortTitle($shortTitle){
		$this->shortTitle = $shortTitle;
         $this->apiParas["short_title"] = $shortTitle;
	}

	public function getShortTitle(){
	  return $this->shortTitle;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $designConcept;
    	                                                            
	public function setDesignConcept($designConcept){
		$this->designConcept = $designConcept;
         $this->apiParas["design_concept"] = $designConcept;
	}

	public function getDesignConcept(){
	  return $this->designConcept;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $model;
    	                        
	public function setModel($model){
		$this->model = $model;
         $this->apiParas["model"] = $model;
	}

	public function getModel(){
	  return $this->model;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $height;
    	                        
	public function setHeight($height){
		$this->height = $height;
         $this->apiParas["height"] = $height;
	}

	public function getHeight(){
	  return $this->height;
	}

                        	                   			private $productOilUnit;
    	                                                                        
	public function setProductOilUnit($productOilUnit){
		$this->productOilUnit = $productOilUnit;
         $this->apiParas["product_oil_unit"] = $productOilUnit;
	}

	public function getProductOilUnit(){
	  return $this->productOilUnit;
	}

                        	                   			private $weight;
    	                        
	public function setWeight($weight){
		$this->weight = $weight;
         $this->apiParas["weight"] = $weight;
	}

	public function getWeight(){
	  return $this->weight;
	}

                        	                   			private $upc;
    	                        
	public function setUpc($upc){
		$this->upc = $upc;
         $this->apiParas["upc"] = $upc;
	}

	public function getUpc(){
	  return $this->upc;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $dangerValue;
                              public function setDangerValue($dangerValue ){
                 $this->dangerValue=$dangerValue;
                 $this->apiParas["danger_value"] = $dangerValue;
              }

              public function getDangerValue(){
              	return $this->dangerValue;
              }
                                                                                                                                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $marketPrice;
    	                                                            
	public function setMarketPrice($marketPrice){
		$this->marketPrice = $marketPrice;
         $this->apiParas["market_price"] = $marketPrice;
	}

	public function getMarketPrice(){
	  return $this->marketPrice;
	}

                        	                   			private $packType;
    	                                                            
	public function setPackType($packType){
		$this->packType = $packType;
         $this->apiParas["pack_type"] = $packType;
	}

	public function getPackType(){
	  return $this->packType;
	}

                        	                   			private $packing;
    	                        
	public function setPacking($packing){
		$this->packing = $packing;
         $this->apiParas["packing"] = $packing;
	}

	public function getPacking(){
	  return $this->packing;
	}

                        	                   			private $afterSaleDesc;
    	                                                                        
	public function setAfterSaleDesc($afterSaleDesc){
		$this->afterSaleDesc = $afterSaleDesc;
         $this->apiParas["after_sale_desc"] = $afterSaleDesc;
	}

	public function getAfterSaleDesc(){
	  return $this->afterSaleDesc;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $giftsGoods;
    	                                                            
	public function setGiftsGoods($giftsGoods){
		$this->giftsGoods = $giftsGoods;
         $this->apiParas["gifts_goods"] = $giftsGoods;
	}

	public function getGiftsGoods(){
	  return $this->giftsGoods;
	}

                        	                   			private $pdfUrl;
    	                        
	public function setPdfUrl($pdfUrl){
		$this->pdfUrl = $pdfUrl;
         $this->apiParas["pdfUrl"] = $pdfUrl;
	}

	public function getPdfUrl(){
	  return $this->pdfUrl;
	}

                        	                   			private $introHtml;
    	                                                            
	public function setIntroHtml($introHtml){
		$this->introHtml = $introHtml;
         $this->apiParas["intro_html"] = $introHtml;
	}

	public function getIntroHtml(){
	  return $this->introHtml;
	}

                        	                   			private $shelfLife;
    	                                                            
	public function setShelfLife($shelfLife){
		$this->shelfLife = $shelfLife;
         $this->apiParas["shelf_life"] = $shelfLife;
	}

	public function getShelfLife(){
	  return $this->shelfLife;
	}

                        	                   			private $memberPrice;
    	                                                            
	public function setMemberPrice($memberPrice){
		$this->memberPrice = $memberPrice;
         $this->apiParas["member_price"] = $memberPrice;
	}

	public function getMemberPrice(){
	  return $this->memberPrice;
	}

                        	                   			private $length;
    	                        
	public function setLength($length){
		$this->length = $length;
         $this->apiParas["length"] = $length;
	}

	public function getLength(){
	  return $this->length;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $sysp;
    	                        
	public function setSysp($sysp){
		$this->sysp = $sysp;
         $this->apiParas["sysp"] = $sysp;
	}

	public function getSysp(){
	  return $this->sysp;
	}

                        	                   			private $width;
    	                        
	public function setWidth($width){
		$this->width = $width;
         $this->apiParas["width"] = $width;
	}

	public function getWidth(){
	  return $this->width;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $spuId;
    	                        
	public function setSpuId($spuId){
		$this->spuId = $spuId;
         $this->apiParas["spuId"] = $spuId;
	}

	public function getSpuId(){
	  return $this->spuId;
	}

                        	                   			private $upcSpuId;
    	                        
	public function setUpcSpuId($upcSpuId){
		$this->upcSpuId = $upcSpuId;
         $this->apiParas["upcSpuId"] = $upcSpuId;
	}

	public function getUpcSpuId(){
	  return $this->upcSpuId;
	}

                        	                   			private $storeProperty;
    	                                                            
	public function setStoreProperty($storeProperty){
		$this->storeProperty = $storeProperty;
         $this->apiParas["store_property"] = $storeProperty;
	}

	public function getStoreProperty(){
	  return $this->storeProperty;
	}

                        	                   			private $hasTransferElecCode;
    	                                                                                    
	public function setHasTransferElecCode($hasTransferElecCode){
		$this->hasTransferElecCode = $hasTransferElecCode;
         $this->apiParas["has_transfer_elec_code"] = $hasTransferElecCode;
	}

	public function getHasTransferElecCode(){
	  return $this->hasTransferElecCode;
	}

                        	                   			private $productOilNumber;
    	                                                                        
	public function setProductOilNumber($productOilNumber){
		$this->productOilNumber = $productOilNumber;
         $this->apiParas["product_oil_number"] = $productOilNumber;
	}

	public function getProductOilNumber(){
	  return $this->productOilNumber;
	}

                        	                   			private $skuUnit;
    	                                                            
	public function setSkuUnit($skuUnit){
		$this->skuUnit = $skuUnit;
         $this->apiParas["sku_unit"] = $skuUnit;
	}

	public function getSkuUnit(){
	  return $this->skuUnit;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $mainPath;
                              public function setMainPath($mainPath ){
                 $this->mainPath=$mainPath;
                 $this->apiParas["main_path"] = $mainPath;
              }

              public function getMainPath(){
              	return $this->mainPath;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $mainYn;
                              public function setMainYn($mainYn ){
                 $this->mainYn=$mainYn;
                 $this->apiParas["main_yn"] = $mainYn;
              }

              public function getMainYn(){
              	return $this->mainYn;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $mainIsPrimary;
                              public function setMainIsPrimary($mainIsPrimary ){
                 $this->mainIsPrimary=$mainIsPrimary;
                 $this->apiParas["main_isPrimary"] = $mainIsPrimary;
              }

              public function getMainIsPrimary(){
              	return $this->mainIsPrimary;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $longPath;
                              public function setLongPath($longPath ){
                 $this->longPath=$longPath;
                 $this->apiParas["long_path"] = $longPath;
              }

              public function getLongPath(){
              	return $this->longPath;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $longYn;
                              public function setLongYn($longYn ){
                 $this->longYn=$longYn;
                 $this->apiParas["long_yn"] = $longYn;
              }

              public function getLongYn(){
              	return $this->longYn;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $longIsPrimary;
                              public function setLongIsPrimary($longIsPrimary ){
                 $this->longIsPrimary=$longIsPrimary;
                 $this->apiParas["long_isPrimary"] = $longIsPrimary;
              }

              public function getLongIsPrimary(){
              	return $this->longIsPrimary;
              }
                                                                                                                                        	                   			private $imageIsPublishSchedule;
    	                                                            
	public function setImageIsPublishSchedule($imageIsPublishSchedule){
		$this->imageIsPublishSchedule = $imageIsPublishSchedule;
         $this->apiParas["image_isPublishSchedule"] = $imageIsPublishSchedule;
	}

	public function getImageIsPublishSchedule(){
	  return $this->imageIsPublishSchedule;
	}

                        	                   			private $imagePublishTime;
    	                                                            
	public function setImagePublishTime($imagePublishTime){
		$this->imagePublishTime = $imagePublishTime;
         $this->apiParas["image_publishTime"] = $imagePublishTime;
	}

	public function getImagePublishTime(){
	  return $this->imagePublishTime;
	}

                        	                   			private $lastCategoryId;
    	                        
	public function setLastCategoryId($lastCategoryId){
		$this->lastCategoryId = $lastCategoryId;
         $this->apiParas["lastCategoryId"] = $lastCategoryId;
	}

	public function getLastCategoryId(){
	  return $this->lastCategoryId;
	}

                        	                   			private $vehicleId;
    	                        
	public function setVehicleId($vehicleId){
		$this->vehicleId = $vehicleId;
         $this->apiParas["vehicleId"] = $vehicleId;
	}

	public function getVehicleId(){
	  return $this->vehicleId;
	}

                        	                   			private $vehicleSaleUnit;
    	                        
	public function setVehicleSaleUnit($vehicleSaleUnit){
		$this->vehicleSaleUnit = $vehicleSaleUnit;
         $this->apiParas["vehicleSaleUnit"] = $vehicleSaleUnit;
	}

	public function getVehicleSaleUnit(){
	  return $this->vehicleSaleUnit;
	}

                        	                   			private $conversionValue;
    	                        
	public function setConversionValue($conversionValue){
		$this->conversionValue = $conversionValue;
         $this->apiParas["conversionValue"] = $conversionValue;
	}

	public function getConversionValue(){
	  return $this->conversionValue;
	}

                        	                   			private $vehiclePartQuality;
    	                        
	public function setVehiclePartQuality($vehiclePartQuality){
		$this->vehiclePartQuality = $vehiclePartQuality;
         $this->apiParas["vehiclePartQuality"] = $vehiclePartQuality;
	}

	public function getVehiclePartQuality(){
	  return $this->vehiclePartQuality;
	}

                        	                   			private $oeNum;
    	                        
	public function setOeNum($oeNum){
		$this->oeNum = $oeNum;
         $this->apiParas["oeNum"] = $oeNum;
	}

	public function getOeNum(){
	  return $this->oeNum;
	}

                        	                   			private $spuName;
    	                        
	public function setSpuName($spuName){
		$this->spuName = $spuName;
         $this->apiParas["spuName"] = $spuName;
	}

	public function getSpuName(){
	  return $this->spuName;
	}

                        	                   			private $vehicleSpuId;
    	                        
	public function setVehicleSpuId($vehicleSpuId){
		$this->vehicleSpuId = $vehicleSpuId;
         $this->apiParas["vehicleSpuId"] = $vehicleSpuId;
	}

	public function getVehicleSpuId(){
	  return $this->vehicleSpuId;
	}

                        	                   			private $carGroupId;
    	                        
	public function setCarGroupId($carGroupId){
		$this->carGroupId = $carGroupId;
         $this->apiParas["carGroupId"] = $carGroupId;
	}

	public function getCarGroupId(){
	  return $this->carGroupId;
	}

                        	                   			private $sourceKey;
    	                        
	public function setSourceKey($sourceKey){
		$this->sourceKey = $sourceKey;
         $this->apiParas["sourceKey"] = $sourceKey;
	}

	public function getSourceKey(){
	  return $this->sourceKey;
	}

                        	                   			private $spuProductName;
    	                        
	public function setSpuProductName($spuProductName){
		$this->spuProductName = $spuProductName;
         $this->apiParas["spuProductName"] = $spuProductName;
	}

	public function getSpuProductName(){
	  return $this->spuProductName;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $transparentPath;
                              public function setTransparentPath($transparentPath ){
                 $this->transparentPath=$transparentPath;
                 $this->apiParas["transparent_path"] = $transparentPath;
              }

              public function getTransparentPath(){
              	return $this->transparentPath;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $transparentYn;
                              public function setTransparentYn($transparentYn ){
                 $this->transparentYn=$transparentYn;
                 $this->apiParas["transparent_yn"] = $transparentYn;
              }

              public function getTransparentYn(){
              	return $this->transparentYn;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $transparentIsPrimary;
                              public function setTransparentIsPrimary($transparentIsPrimary ){
                 $this->transparentIsPrimary=$transparentIsPrimary;
                 $this->apiParas["transparent_isPrimary"] = $transparentIsPrimary;
              }

              public function getTransparentIsPrimary(){
              	return $this->transparentIsPrimary;
              }
                                                                                                                                                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $propValues;
                              public function setPropValues($propValues ){
                 $this->propValues=$propValues;
                 $this->apiParas["prop_values"] = $propValues;
              }

              public function getPropValues(){
              	return $this->propValues;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propAlias;
                              public function setPropAlias($propAlias ){
                 $this->propAlias=$propAlias;
                 $this->apiParas["prop_alias"] = $propAlias;
              }

              public function getPropAlias(){
              	return $this->propAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propVid;
                              public function setPropVid($propVid ){
                 $this->propVid=$propVid;
                 $this->apiParas["prop_vid"] = $propVid;
              }

              public function getPropVid(){
              	return $this->propVid;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propId;
                              public function setPropId($propId ){
                 $this->propId=$propId;
                 $this->apiParas["prop_id"] = $propId;
              }

              public function getPropId(){
              	return $this->propId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propRemark;
                              public function setPropRemark($propRemark ){
                 $this->propRemark=$propRemark;
                 $this->apiParas["prop_remark"] = $propRemark;
              }

              public function getPropRemark(){
              	return $this->propRemark;
              }
                                                                                                                                        	                   			private $ocrUrl;
    	                        
	public function setOcrUrl($ocrUrl){
		$this->ocrUrl = $ocrUrl;
         $this->apiParas["ocrUrl"] = $ocrUrl;
	}

	public function getOcrUrl(){
	  return $this->ocrUrl;
	}

                        	                   			private $wreadme;
    	                        
	public function setWreadme($wreadme){
		$this->wreadme = $wreadme;
         $this->apiParas["wreadme"] = $wreadme;
	}

	public function getWreadme(){
	  return $this->wreadme;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $extId;
                              public function setExtId($extId ){
                 $this->extId=$extId;
                 $this->apiParas["ext_id"] = $extId;
              }

              public function getExtId(){
              	return $this->extId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extValues;
                              public function setExtValues($extValues ){
                 $this->extValues=$extValues;
                 $this->apiParas["ext_values"] = $extValues;
              }

              public function getExtValues(){
              	return $this->extValues;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extAlias;
                              public function setExtAlias($extAlias ){
                 $this->extAlias=$extAlias;
                 $this->apiParas["ext_alias"] = $extAlias;
              }

              public function getExtAlias(){
              	return $this->extAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $extRemark;
                              public function setExtRemark($extRemark ){
                 $this->extRemark=$extRemark;
                 $this->apiParas["ext_remark"] = $extRemark;
              }

              public function getExtRemark(){
              	return $this->extRemark;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $marketPriceGaea;
                              public function setMarketPriceGaea($marketPriceGaea ){
                 $this->marketPriceGaea=$marketPriceGaea;
                 $this->apiParas["market_price_gaea"] = $marketPriceGaea;
              }

              public function getMarketPriceGaea(){
              	return $this->marketPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim1ValGaea;
                              public function setDim1ValGaea($dim1ValGaea ){
                 $this->dim1ValGaea=$dim1ValGaea;
                 $this->apiParas["dim1_val_gaea"] = $dim1ValGaea;
              }

              public function getDim1ValGaea(){
              	return $this->dim1ValGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim2SortGaea;
                              public function setDim2SortGaea($dim2SortGaea ){
                 $this->dim2SortGaea=$dim2SortGaea;
                 $this->apiParas["dim2_sort_gaea"] = $dim2SortGaea;
              }

              public function getDim2SortGaea(){
              	return $this->dim2SortGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $purchasePriceGaea;
                              public function setPurchasePriceGaea($purchasePriceGaea ){
                 $this->purchasePriceGaea=$purchasePriceGaea;
                 $this->apiParas["purchase_price_gaea"] = $purchasePriceGaea;
              }

              public function getPurchasePriceGaea(){
              	return $this->purchasePriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $skuNameGaea;
                              public function setSkuNameGaea($skuNameGaea ){
                 $this->skuNameGaea=$skuNameGaea;
                 $this->apiParas["sku_name_gaea"] = $skuNameGaea;
              }

              public function getSkuNameGaea(){
              	return $this->skuNameGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $itemNumGaea;
                              public function setItemNumGaea($itemNumGaea ){
                 $this->itemNumGaea=$itemNumGaea;
                 $this->apiParas["item_num_gaea"] = $itemNumGaea;
              }

              public function getItemNumGaea(){
              	return $this->itemNumGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      private $skuShortTitleGaea;
                              public function setSkuShortTitleGaea($skuShortTitleGaea ){
                 $this->skuShortTitleGaea=$skuShortTitleGaea;
                 $this->apiParas["sku_short_title_gaea"] = $skuShortTitleGaea;
              }

              public function getSkuShortTitleGaea(){
              	return $this->skuShortTitleGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $heightGaea;
                              public function setHeightGaea($heightGaea ){
                 $this->heightGaea=$heightGaea;
                 $this->apiParas["height_gaea"] = $heightGaea;
              }

              public function getHeightGaea(){
              	return $this->heightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $memberPriceGaea;
                              public function setMemberPriceGaea($memberPriceGaea ){
                 $this->memberPriceGaea=$memberPriceGaea;
                 $this->apiParas["member_price_gaea"] = $memberPriceGaea;
              }

              public function getMemberPriceGaea(){
              	return $this->memberPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $lengthGaea;
                              public function setLengthGaea($lengthGaea ){
                 $this->lengthGaea=$lengthGaea;
                 $this->apiParas["length_gaea"] = $lengthGaea;
              }

              public function getLengthGaea(){
              	return $this->lengthGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $weightGaea;
                              public function setWeightGaea($weightGaea ){
                 $this->weightGaea=$weightGaea;
                 $this->apiParas["weight_gaea"] = $weightGaea;
              }

              public function getWeightGaea(){
              	return $this->weightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $upcGaea;
                              public function setUpcGaea($upcGaea ){
                 $this->upcGaea=$upcGaea;
                 $this->apiParas["upc_gaea"] = $upcGaea;
              }

              public function getUpcGaea(){
              	return $this->upcGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim1SortGaea;
                              public function setDim1SortGaea($dim1SortGaea ){
                 $this->dim1SortGaea=$dim1SortGaea;
                 $this->apiParas["dim1_sort_gaea"] = $dim1SortGaea;
              }

              public function getDim1SortGaea(){
              	return $this->dim1SortGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim2ValGaea;
                              public function setDim2ValGaea($dim2ValGaea ){
                 $this->dim2ValGaea=$dim2ValGaea;
                 $this->apiParas["dim2_val_gaea"] = $dim2ValGaea;
              }

              public function getDim2ValGaea(){
              	return $this->dim2ValGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $widthGaea;
                              public function setWidthGaea($widthGaea ){
                 $this->widthGaea=$widthGaea;
                 $this->apiParas["width_gaea"] = $widthGaea;
              }

              public function getWidthGaea(){
              	return $this->widthGaea;
              }
                                                                                                                                                                                                                                                                                                                                              private $imageGaeaMainList;
                              public function setImageGaeaMainList($imageGaeaMainList ){
                 $this->imageGaeaMainList=$imageGaeaMainList;
                 $this->apiParas["imageGaeaMainList"] = $imageGaeaMainList;
              }

              public function getImageGaeaMainList(){
              	return $this->imageGaeaMainList;
              }
                                                                                                                                                                                                                                                                                                                                              private $imageGaeaLongList;
                              public function setImageGaeaLongList($imageGaeaLongList ){
                 $this->imageGaeaLongList=$imageGaeaLongList;
                 $this->apiParas["imageGaeaLongList"] = $imageGaeaLongList;
              }

              public function getImageGaeaLongList(){
              	return $this->imageGaeaLongList;
              }
                                                                                                                                                                                                                                                                                                                       private $vehicleIdGaea;
                              public function setVehicleIdGaea($vehicleIdGaea ){
                 $this->vehicleIdGaea=$vehicleIdGaea;
                 $this->apiParas["vehicleIdGaea"] = $vehicleIdGaea;
              }

              public function getVehicleIdGaea(){
              	return $this->vehicleIdGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $vehicleSaleUnitGaea;
                              public function setVehicleSaleUnitGaea($vehicleSaleUnitGaea ){
                 $this->vehicleSaleUnitGaea=$vehicleSaleUnitGaea;
                 $this->apiParas["vehicleSaleUnitGaea"] = $vehicleSaleUnitGaea;
              }

              public function getVehicleSaleUnitGaea(){
              	return $this->vehicleSaleUnitGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $conversionValueGaea;
                              public function setConversionValueGaea($conversionValueGaea ){
                 $this->conversionValueGaea=$conversionValueGaea;
                 $this->apiParas["conversionValueGaea"] = $conversionValueGaea;
              }

              public function getConversionValueGaea(){
              	return $this->conversionValueGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $vehiclePartQualityGaea;
                              public function setVehiclePartQualityGaea($vehiclePartQualityGaea ){
                 $this->vehiclePartQualityGaea=$vehiclePartQualityGaea;
                 $this->apiParas["vehiclePartQualityGaea"] = $vehiclePartQualityGaea;
              }

              public function getVehiclePartQualityGaea(){
              	return $this->vehiclePartQualityGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $oeNumGaea;
                              public function setOeNumGaea($oeNumGaea ){
                 $this->oeNumGaea=$oeNumGaea;
                 $this->apiParas["oeNumGaea"] = $oeNumGaea;
              }

              public function getOeNumGaea(){
              	return $this->oeNumGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $spuNameGaea;
                              public function setSpuNameGaea($spuNameGaea ){
                 $this->spuNameGaea=$spuNameGaea;
                 $this->apiParas["spuNameGaea"] = $spuNameGaea;
              }

              public function getSpuNameGaea(){
              	return $this->spuNameGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $vehicleSpuIdGaea;
                              public function setVehicleSpuIdGaea($vehicleSpuIdGaea ){
                 $this->vehicleSpuIdGaea=$vehicleSpuIdGaea;
                 $this->apiParas["vehicleSpuIdGaea"] = $vehicleSpuIdGaea;
              }

              public function getVehicleSpuIdGaea(){
              	return $this->vehicleSpuIdGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $carGroupIdGaea;
                              public function setCarGroupIdGaea($carGroupIdGaea ){
                 $this->carGroupIdGaea=$carGroupIdGaea;
                 $this->apiParas["carGroupIdGaea"] = $carGroupIdGaea;
              }

              public function getCarGroupIdGaea(){
              	return $this->carGroupIdGaea;
              }
                                                                                                                                                                                                                                                                                                                       private $carGroupNameGaea;
                              public function setCarGroupNameGaea($carGroupNameGaea ){
                 $this->carGroupNameGaea=$carGroupNameGaea;
                 $this->apiParas["carGroupNameGaea"] = $carGroupNameGaea;
              }

              public function getCarGroupNameGaea(){
              	return $this->carGroupNameGaea;
              }
                                                                                                                                                                                                                                                                                                                                              private $imageGaeaTransparentList;
                              public function setImageGaeaTransparentList($imageGaeaTransparentList ){
                 $this->imageGaeaTransparentList=$imageGaeaTransparentList;
                 $this->apiParas["imageGaeaTransparentList"] = $imageGaeaTransparentList;
              }

              public function getImageGaeaTransparentList(){
              	return $this->imageGaeaTransparentList;
              }
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $endDate;
                              public function setEndDate($endDate ){
                 $this->endDate=$endDate;
                 $this->apiParas["end_date"] = $endDate;
              }

              public function getEndDate(){
              	return $this->endDate;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $entCode;
                              public function setEntCode($entCode ){
                 $this->entCode=$entCode;
                 $this->apiParas["ent_code"] = $entCode;
              }

              public function getEntCode(){
              	return $this->entCode;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $qcCode;
                              public function setQcCode($qcCode ){
                 $this->qcCode=$qcCode;
                 $this->apiParas["qc_code"] = $qcCode;
              }

              public function getQcCode(){
              	return $this->qcCode;
              }
                                                                                                                                                                                                                                                                                                                                              private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                                              private $applicant;
                              public function setApplicant($applicant ){
                 $this->applicant=$applicant;
                 $this->apiParas["applicant"] = $applicant;
              }

              public function getApplicant(){
              	return $this->applicant;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $fileKeyList;
                              public function setFileKeyList($fileKeyList ){
                 $this->fileKeyList=$fileKeyList;
                 $this->apiParas["file_key_list"] = $fileKeyList;
              }

              public function getFileKeyList(){
              	return $this->fileKeyList;
              }
                                                                                                                                        	                   			private $structSaleAttrMap;
    	                        
	public function setStructSaleAttrMap($structSaleAttrMap){
		$this->structSaleAttrMap = $structSaleAttrMap;
         $this->apiParas["structSaleAttrMap"] = $structSaleAttrMap;
	}

	public function getStructSaleAttrMap(){
	  return $this->structSaleAttrMap;
	}

}





        
 

