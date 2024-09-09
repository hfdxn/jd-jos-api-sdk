<?php

namespace JdJos\jd\request;
class VcItemOldProductUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.vc.item.oldProduct.update";
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

                        	                                            		                                    	                   			private $wareId;
    	                                                            
	public function setWareId($wareId){
		$this->wareId = $wareId;
         $this->apiParas["ware_id"] = $wareId;
	}

	public function getWareId(){
	  return $this->wareId;
	}

                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $cid1;
    	                        
	public function setCid1($cid1){
		$this->cid1 = $cid1;
         $this->apiParas["cid1"] = $cid1;
	}

	public function getCid1(){
	  return $this->cid1;
	}

                        	                   			private $leafCid;
    	                                                            
	public function setLeafCid($leafCid){
		$this->leafCid = $leafCid;
         $this->apiParas["leaf_cid"] = $leafCid;
	}

	public function getLeafCid(){
	  return $this->leafCid;
	}

                        	                   			private $brandId;
    	                                                            
	public function setBrandId($brandId){
		$this->brandId = $brandId;
         $this->apiParas["brand_id"] = $brandId;
	}

	public function getBrandId(){
	  return $this->brandId;
	}

                        	                   			private $zhBrand;
    	                                                            
	public function setZhBrand($zhBrand){
		$this->zhBrand = $zhBrand;
         $this->apiParas["zh_brand"] = $zhBrand;
	}

	public function getZhBrand(){
	  return $this->zhBrand;
	}

                        	                   			private $enBrand;
    	                                                            
	public function setEnBrand($enBrand){
		$this->enBrand = $enBrand;
         $this->apiParas["en_brand"] = $enBrand;
	}

	public function getEnBrand(){
	  return $this->enBrand;
	}

                        	                   			private $tel;
    	                        
	public function setTel($tel){
		$this->tel = $tel;
         $this->apiParas["tel"] = $tel;
	}

	public function getTel(){
	  return $this->tel;
	}

                        	                   			private $webSite;
    	                                                            
	public function setWebSite($webSite){
		$this->webSite = $webSite;
         $this->apiParas["web_site"] = $webSite;
	}

	public function getWebSite(){
	  return $this->webSite;
	}

                        	                   			private $originalPlace;
    	                                                            
	public function setOriginalPlace($originalPlace){
		$this->originalPlace = $originalPlace;
         $this->apiParas["original_place"] = $originalPlace;
	}

	public function getOriginalPlace(){
	  return $this->originalPlace;
	}

                        	                   			private $warranty;
    	                        
	public function setWarranty($warranty){
		$this->warranty = $warranty;
         $this->apiParas["warranty"] = $warranty;
	}

	public function getWarranty(){
	  return $this->warranty;
	}

                        	                   			private $salerCode;
    	                                                            
	public function setSalerCode($salerCode){
		$this->salerCode = $salerCode;
         $this->apiParas["saler_code"] = $salerCode;
	}

	public function getSalerCode(){
	  return $this->salerCode;
	}

                        	                   			private $purchaserCode;
    	                                                            
	public function setPurchaserCode($purchaserCode){
		$this->purchaserCode = $purchaserCode;
         $this->apiParas["purchaser_code"] = $purchaserCode;
	}

	public function getPurchaserCode(){
	  return $this->purchaserCode;
	}

                        	                   			private $pkgInfo;
    	                                                            
	public function setPkgInfo($pkgInfo){
		$this->pkgInfo = $pkgInfo;
         $this->apiParas["pkg_info"] = $pkgInfo;
	}

	public function getPkgInfo(){
	  return $this->pkgInfo;
	}

                        	                   			private $itemNum;
    	                                                            
	public function setItemNum($itemNum){
		$this->itemNum = $itemNum;
         $this->apiParas["item_num"] = $itemNum;
	}

	public function getItemNum(){
	  return $this->itemNum;
	}

                        	                   			private $introHtml;
    	                                                            
	public function setIntroHtml($introHtml){
		$this->introHtml = $introHtml;
         $this->apiParas["intro_html"] = $introHtml;
	}

	public function getIntroHtml(){
	  return $this->introHtml;
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

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $dangerValue;
                              public function setDangerValue($dangerValue ){
                 $this->dangerValue=$dangerValue;
                 $this->apiParas["danger_value"] = $dangerValue;
              }

              public function getDangerValue(){
              	return $this->dangerValue;
              }
                                                                                                                                        	                   			private $skuUnit;
    	                                                            
	public function setSkuUnit($skuUnit){
		$this->skuUnit = $skuUnit;
         $this->apiParas["sku_unit"] = $skuUnit;
	}

	public function getSkuUnit(){
	  return $this->skuUnit;
	}

                        	                   			private $storeProperty;
    	                                                            
	public function setStoreProperty($storeProperty){
		$this->storeProperty = $storeProperty;
         $this->apiParas["store_property"] = $storeProperty;
	}

	public function getStoreProperty(){
	  return $this->storeProperty;
	}

                        	                   			private $designConcept;
    	                                                            
	public function setDesignConcept($designConcept){
		$this->designConcept = $designConcept;
         $this->apiParas["design_concept"] = $designConcept;
	}

	public function getDesignConcept(){
	  return $this->designConcept;
	}

                        	                   			private $hasTransferElecCode;
    	                                                                                    
	public function setHasTransferElecCode($hasTransferElecCode){
		$this->hasTransferElecCode = $hasTransferElecCode;
         $this->apiParas["has_transfer_elec_code"] = $hasTransferElecCode;
	}

	public function getHasTransferElecCode(){
	  return $this->hasTransferElecCode;
	}

                        	                   			private $afterSaleDesc;
    	                                                                        
	public function setAfterSaleDesc($afterSaleDesc){
		$this->afterSaleDesc = $afterSaleDesc;
         $this->apiParas["after_sale_desc"] = $afterSaleDesc;
	}

	public function getAfterSaleDesc(){
	  return $this->afterSaleDesc;
	}

                        	                   			private $shortTitle;
    	                                                            
	public function setShortTitle($shortTitle){
		$this->shortTitle = $shortTitle;
         $this->apiParas["short_title"] = $shortTitle;
	}

	public function getShortTitle(){
	  return $this->shortTitle;
	}

                        	                   			private $lastCategoryId;
    	                        
	public function setLastCategoryId($lastCategoryId){
		$this->lastCategoryId = $lastCategoryId;
         $this->apiParas["lastCategoryId"] = $lastCategoryId;
	}

	public function getLastCategoryId(){
	  return $this->lastCategoryId;
	}

                        	                   			private $qczczy;
    	                        
	public function setQczczy($qczczy){
		$this->qczczy = $qczczy;
         $this->apiParas["qczczy"] = $qczczy;
	}

	public function getQczczy(){
	  return $this->qczczy;
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

                                                                        		                                    	                   			private $wreadme;
    	                        
	public function setWreadme($wreadme){
		$this->wreadme = $wreadme;
         $this->apiParas["wreadme"] = $wreadme;
	}

	public function getWreadme(){
	  return $this->wreadme;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                       private $propId;
                              public function setPropId($propId ){
                 $this->propId=$propId;
                 $this->apiParas["prop_id"] = $propId;
              }

              public function getPropId(){
              	return $this->propId;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propVid;
                              public function setPropVid($propVid ){
                 $this->propVid=$propVid;
                 $this->apiParas["prop_vid"] = $propVid;
              }

              public function getPropVid(){
              	return $this->propVid;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propRemark;
                              public function setPropRemark($propRemark ){
                 $this->propRemark=$propRemark;
                 $this->apiParas["prop_remark"] = $propRemark;
              }

              public function getPropRemark(){
              	return $this->propRemark;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propAlias;
                              public function setPropAlias($propAlias ){
                 $this->propAlias=$propAlias;
                 $this->apiParas["prop_alias"] = $propAlias;
              }

              public function getPropAlias(){
              	return $this->propAlias;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $propValues;
                              public function setPropValues($propValues ){
                 $this->propValues=$propValues;
                 $this->apiParas["prop_values"] = $propValues;
              }

              public function getPropValues(){
              	return $this->propValues;
              }
                                                                                                                                        	                   			private $ocrUrl;
    	                        
	public function setOcrUrl($ocrUrl){
		$this->ocrUrl = $ocrUrl;
         $this->apiParas["ocrUrl"] = $ocrUrl;
	}

	public function getOcrUrl(){
	  return $this->ocrUrl;
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
                                                                                                                                                                 	                        	                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               private $skuIdGaea;
                              public function setSkuIdGaea($skuIdGaea ){
                 $this->skuIdGaea=$skuIdGaea;
                 $this->apiParas["sku_id_gaea"] = $skuIdGaea;
              }

              public function getSkuIdGaea(){
              	return $this->skuIdGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $skuNameGaea;
                              public function setSkuNameGaea($skuNameGaea ){
                 $this->skuNameGaea=$skuNameGaea;
                 $this->apiParas["sku_name_gaea"] = $skuNameGaea;
              }

              public function getSkuNameGaea(){
              	return $this->skuNameGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim1ValGaea;
                              public function setDim1ValGaea($dim1ValGaea ){
                 $this->dim1ValGaea=$dim1ValGaea;
                 $this->apiParas["dim1_val_gaea"] = $dim1ValGaea;
              }

              public function getDim1ValGaea(){
              	return $this->dim1ValGaea;
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
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $dim2SortGaea;
                              public function setDim2SortGaea($dim2SortGaea ){
                 $this->dim2SortGaea=$dim2SortGaea;
                 $this->apiParas["dim2_sort_gaea"] = $dim2SortGaea;
              }

              public function getDim2SortGaea(){
              	return $this->dim2SortGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      private $otherSaleAttributeGaea;
                              public function setOtherSaleAttributeGaea($otherSaleAttributeGaea ){
                 $this->otherSaleAttributeGaea=$otherSaleAttributeGaea;
                 $this->apiParas["other_sale_attribute_gaea"] = $otherSaleAttributeGaea;
              }

              public function getOtherSaleAttributeGaea(){
              	return $this->otherSaleAttributeGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $marketPriceGaea;
                              public function setMarketPriceGaea($marketPriceGaea ){
                 $this->marketPriceGaea=$marketPriceGaea;
                 $this->apiParas["market_price_gaea"] = $marketPriceGaea;
              }

              public function getMarketPriceGaea(){
              	return $this->marketPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $purchasePriceGaea;
                              public function setPurchasePriceGaea($purchasePriceGaea ){
                 $this->purchasePriceGaea=$purchasePriceGaea;
                 $this->apiParas["purchase_price_gaea"] = $purchasePriceGaea;
              }

              public function getPurchasePriceGaea(){
              	return $this->purchasePriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              private $memberPriceGaea;
                              public function setMemberPriceGaea($memberPriceGaea ){
                 $this->memberPriceGaea=$memberPriceGaea;
                 $this->apiParas["member_price_gaea"] = $memberPriceGaea;
              }

              public function getMemberPriceGaea(){
              	return $this->memberPriceGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $weightGaea;
                              public function setWeightGaea($weightGaea ){
                 $this->weightGaea=$weightGaea;
                 $this->apiParas["weight_gaea"] = $weightGaea;
              }

              public function getWeightGaea(){
              	return $this->weightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $lengthGaea;
                              public function setLengthGaea($lengthGaea ){
                 $this->lengthGaea=$lengthGaea;
                 $this->apiParas["length_gaea"] = $lengthGaea;
              }

              public function getLengthGaea(){
              	return $this->lengthGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $widthGaea;
                              public function setWidthGaea($widthGaea ){
                 $this->widthGaea=$widthGaea;
                 $this->apiParas["width_gaea"] = $widthGaea;
              }

              public function getWidthGaea(){
              	return $this->widthGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $heightGaea;
                              public function setHeightGaea($heightGaea ){
                 $this->heightGaea=$heightGaea;
                 $this->apiParas["height_gaea"] = $heightGaea;
              }

              public function getHeightGaea(){
              	return $this->heightGaea;
              }
                                                                                                                                                                                                                                                                                                                                                                                                                                      private $upcGaea;
                              public function setUpcGaea($upcGaea ){
                 $this->upcGaea=$upcGaea;
                 $this->apiParas["upc_gaea"] = $upcGaea;
              }

              public function getUpcGaea(){
              	return $this->upcGaea;
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
                                                                                                                }





        
 

