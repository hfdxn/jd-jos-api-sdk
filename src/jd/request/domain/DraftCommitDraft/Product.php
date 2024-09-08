<?php
namespace DraftCommitDraft;
class Product{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.draft.jos.domain.JosProduct";
    }
        
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $features;
                                        
    public function setFeatures($features){
        $size = count($features);
        for ($i=0; $i<$size; $i++){
            $features [$i] = $features [$i] ->getInstance();
        }
        $this->params['features'] = $features;
    }
                                    
            
    private $promiseId;
    
    public function setPromiseId($promiseId){
        $this->params['promiseId'] = $promiseId;
    }

    public function getPromiseId(){
        return $this->promiseId;
    }
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $designConcept;
    
    public function setDesignConcept($designConcept){
        $this->params['designConcept'] = $designConcept;
    }

    public function getDesignConcept(){
        return $this->designConcept;
    }
            
    private $adWords;
            
    public function setAdWords($adWords){
        $this->params['adWords'] = $adWords ->getInstance();
    }
        
            
    private $height;
    
    public function setHeight($height){
        $this->params['height'] = $height;
    }

    public function getHeight(){
        return $this->height;
    }
            
    private $packListing;
    
    public function setPackListing($packListing){
        $this->params['packListing'] = $packListing;
    }

    public function getPackListing(){
        return $this->packListing;
    }
            
    private $multiCategoryId;
    
    public function setMultiCategoryId($multiCategoryId){
        $this->params['multiCategoryId'] = $multiCategoryId;
    }

    public function getMultiCategoryId(){
        return $this->multiCategoryId;
    }
            
    private $weight;
    
    public function setWeight($weight){
        $this->params['weight'] = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
            
    private $afterSales;
    
    public function setAfterSales($afterSales){
        $this->params['afterSales'] = $afterSales;
    }

    public function getAfterSales(){
        return $this->afterSales;
    }
            
    private $barCode;
    
    public function setBarCode($barCode){
        $this->params['barCode'] = $barCode;
    }

    public function getBarCode(){
        return $this->barCode;
    }
            
    private $multiCateProps;
                                        
    public function setMultiCateProps($multiCateProps){
        $size = count($multiCateProps);
        for ($i=0; $i<$size; $i++){
            $multiCateProps [$i] = $multiCateProps [$i] ->getInstance();
        }
        $this->params['multiCateProps'] = $multiCateProps;
    }
                                    
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $marketPrice;
    
    public function setMarketPrice($marketPrice){
        $this->params['marketPrice'] = $marketPrice;
    }

    public function getMarketPrice(){
        return $this->marketPrice;
    }
            
    private $transportId;
    
    public function setTransportId($transportId){
        $this->params['transportId'] = $transportId;
    }

    public function getTransportId(){
        return $this->transportId;
    }
            
    private $shopCategorys;
                        
    public function setShopCategorys($shopCategorys){
        $this->params['shopCategorys'] = $shopCategorys;
    }
                    
            
    private $itemNum;
    
    public function setItemNum($itemNum){
        $this->params['itemNum'] = $itemNum;
    }

    public function getItemNum(){
        return $this->itemNum;
    }
            
    private $introduction;
    
    public function setIntroduction($introduction){
        $this->params['introduction'] = $introduction;
    }

    public function getIntroduction(){
        return $this->introduction;
    }
            
    private $delivery;
    
    public function setDelivery($delivery){
        $this->params['delivery'] = $delivery;
    }

    public function getDelivery(){
        return $this->delivery;
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
            
    private $outerId;
    
    public function setOuterId($outerId){
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId(){
        return $this->outerId;
    }
            
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
            
    private $location;
    
    public function setLocation($location){
        $this->params['location'] = $location;
    }

    public function getLocation(){
        return $this->location;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
            
    private $productStatus;
    
    public function setProductStatus($productStatus){
        $this->params['productStatus'] = $productStatus;
    }

    public function getProductStatus(){
        return $this->productStatus;
    }
            
    private $introductionUseFlag;
    
    public function setIntroductionUseFlag($introductionUseFlag){
        $this->params['introductionUseFlag'] = $introductionUseFlag;
    }

    public function getIntroductionUseFlag(){
        return $this->introductionUseFlag;
    }
            
    private $fitCaseHtmlPc;
    
    public function setFitCaseHtmlPc($fitCaseHtmlPc){
        $this->params['fitCaseHtmlPc'] = $fitCaseHtmlPc;
    }

    public function getFitCaseHtmlPc(){
        return $this->fitCaseHtmlPc;
    }
            
    private $fitCaseHtmlApp;
    
    public function setFitCaseHtmlApp($fitCaseHtmlApp){
        $this->params['fitCaseHtmlApp'] = $fitCaseHtmlApp;
    }

    public function getFitCaseHtmlApp(){
        return $this->fitCaseHtmlApp;
    }
            
    private $specialServices;
                        
    public function setSpecialServices($specialServices){
        $this->params['specialServices'] = $specialServices;
    }
                    
            
    private $templateId;
    
    public function setTemplateId($templateId){
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId(){
        return $this->templateId;
    }
            
    private $productId;
    
    public function setProductId($productId){
        $this->params['productId'] = $productId;
    }

    public function getProductId(){
        return $this->productId;
    }
            
    private $zhuangBaId;
    
    public function setZhuangBaId($zhuangBaId){
        $this->params['zhuangBaId'] = $zhuangBaId;
    }

    public function getZhuangBaId(){
        return $this->zhuangBaId;
    }
            
    private $costPrice;
    
    public function setCostPrice($costPrice){
        $this->params['costPrice'] = $costPrice;
    }

    public function getCostPrice(){
        return $this->costPrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>