<?php

namespace JdJos\jd\request\domain\WareWriteAdd;
class Ware{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Ware";
    }
        
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
            
    private $multiCategoryId;
    
    public function setMultiCategoryId($multiCategoryId){
        $this->params['multiCategoryId'] = $multiCategoryId;
    }

    public function getMultiCategoryId(){
        return $this->multiCategoryId;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $templateId;
    
    public function setTemplateId($templateId){
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId(){
        return $this->templateId;
    }
            
    private $transportId;
    
    public function setTransportId($transportId){
        $this->params['transportId'] = $transportId;
    }

    public function getTransportId(){
        return $this->transportId;
    }
            
    private $wareStatus;
    
    public function setWareStatus($wareStatus){
        $this->params['wareStatus'] = $wareStatus;
    }

    public function getWareStatus(){
        return $this->wareStatus;
    }
            
    private $outerId;
    
    public function setOuterId($outerId){
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId(){
        return $this->outerId;
    }
            
    private $itemNum;
    
    public function setItemNum($itemNum){
        $this->params['itemNum'] = $itemNum;
    }

    public function getItemNum(){
        return $this->itemNum;
    }
            
    private $barCode;
    
    public function setBarCode($barCode){
        $this->params['barCode'] = $barCode;
    }

    public function getBarCode(){
        return $this->barCode;
    }
            
    private $wareLocation;
    
    public function setWareLocation($wareLocation){
        $this->params['wareLocation'] = $wareLocation;
    }

    public function getWareLocation(){
        return $this->wareLocation;
    }
            
    private $delivery;
    
    public function setDelivery($delivery){
        $this->params['delivery'] = $delivery;
    }

    public function getDelivery(){
        return $this->delivery;
    }
            
    private $promiseId;
    
    public function setPromiseId($promiseId){
        $this->params['promiseId'] = $promiseId;
    }

    public function getPromiseId(){
        return $this->promiseId;
    }
            
    private $adWords;
            
    public function setAdWords($adWords){
        $this->params['adWords'] = $adWords ->getInstance();
    }
        
            
    private $wrap;
    
    public function setWrap($wrap){
        $this->params['wrap'] = $wrap;
    }

    public function getWrap(){
        return $this->wrap;
    }
            
    private $packListing;
    
    public function setPackListing($packListing){
        $this->params['packListing'] = $packListing;
    }

    public function getPackListing(){
        return $this->packListing;
    }
            
    private $length;
    
    public function setLength($length){
        $this->params['length'] = $length;
    }

    public function getLength(){
        return $this->length;
    }
            
    private $width;
    
    public function setWidth($width){
        $this->params['width'] = $width;
    }

    public function getWidth(){
        return $this->width;
    }
            
    private $height;
    
    public function setHeight($height){
        $this->params['height'] = $height;
    }

    public function getHeight(){
        return $this->height;
    }
            
    private $weight;
    
    public function setWeight($weight){
        $this->params['weight'] = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
            
    private $props;
                                        
    public function setProps($props){
        $size = count($props);
        for ($i=0; $i<$size; $i++){
            $props [$i] = $props [$i] ->getInstance();
        }
        $this->params['props'] = $props;
    }
                                    
            
    private $features;
                                        
    public function setFeatures($features){
        $size = count($features);
        for ($i=0; $i<$size; $i++){
            $features [$i] = $features [$i] ->getInstance();
        }
        $this->params['features'] = $features;
    }
                                    
            
    private $images;
                                        
    public function setImages($images){
        $size = count($images);
        for ($i=0; $i<$size; $i++){
            $images [$i] = $images [$i] ->getInstance();
        }
        $this->params['images'] = $images;
    }
                                    
            
    private $shopCategorys;
                        
    public function setShopCategorys($shopCategorys){
        $this->params['shopCategorys'] = $shopCategorys;
    }
                    
            
    private $mobileDesc;
    
    public function setMobileDesc($mobileDesc){
        $this->params['mobileDesc'] = $mobileDesc;
    }

    public function getMobileDesc(){
        return $this->mobileDesc;
    }
            
    private $introduction;
    
    public function setIntroduction($introduction){
        $this->params['introduction'] = $introduction;
    }

    public function getIntroduction(){
        return $this->introduction;
    }
            
    private $afterSales;
    
    public function setAfterSales($afterSales){
        $this->params['afterSales'] = $afterSales;
    }

    public function getAfterSales(){
        return $this->afterSales;
    }
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $marketPrice;
    
    public function setMarketPrice($marketPrice){
        $this->params['marketPrice'] = $marketPrice;
    }

    public function getMarketPrice(){
        return $this->marketPrice;
    }
            
    private $zhuangBaId;
    
    public function setZhuangBaId($zhuangBaId){
        $this->params['zhuangBaId'] = $zhuangBaId;
    }

    public function getZhuangBaId(){
        return $this->zhuangBaId;
    }
            
    private $introductionUseFlag;
    
    public function setIntroductionUseFlag($introductionUseFlag){
        $this->params['introductionUseFlag'] = $introductionUseFlag;
    }

    public function getIntroductionUseFlag(){
        return $this->introductionUseFlag;
    }
            
    private $mobileZhuangBaId;
    
    public function setMobileZhuangBaId($mobileZhuangBaId){
        $this->params['mobileZhuangBaId'] = $mobileZhuangBaId;
    }

    public function getMobileZhuangBaId(){
        return $this->mobileZhuangBaId;
    }
            
    private $mobileDescUseFlag;
    
    public function setMobileDescUseFlag($mobileDescUseFlag){
        $this->params['mobileDescUseFlag'] = $mobileDescUseFlag;
    }

    public function getMobileDescUseFlag(){
        return $this->mobileDescUseFlag;
    }
            
    private $designConcept;
    
    public function setDesignConcept($designConcept){
        $this->params['designConcept'] = $designConcept;
    }

    public function getDesignConcept(){
        return $this->designConcept;
    }
            
    private $fitCaseHtmlApp;
    
    public function setFitCaseHtmlApp($fitCaseHtmlApp){
        $this->params['fitCaseHtmlApp'] = $fitCaseHtmlApp;
    }

    public function getFitCaseHtmlApp(){
        return $this->fitCaseHtmlApp;
    }
            
    private $fitCaseHtmlPc;
    
    public function setFitCaseHtmlPc($fitCaseHtmlPc){
        $this->params['fitCaseHtmlPc'] = $fitCaseHtmlPc;
    }

    public function getFitCaseHtmlPc(){
        return $this->fitCaseHtmlPc;
    }
            
    private $specialServices;
                        
    public function setSpecialServices($specialServices){
        $this->params['specialServices'] = $specialServices;
    }
                    
            
    private $multiCateProps;
                                        
    public function setMultiCateProps($multiCateProps){
        $size = count($multiCateProps);
        for ($i=0; $i<$size; $i++){
            $multiCateProps [$i] = $multiCateProps [$i] ->getInstance();
        }
        $this->params['multiCateProps'] = $multiCateProps;
    }
                                    
            
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>