<?php
namespace LogisticsEwaybillWaybillCreate;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ldop.alpha.waybill.api.dto.request.gateway.WaybillReceiveRequest";
    }
        
    private $providerCode;
    
    public function setProviderCode($providerCode){
        $this->params['providerCode'] = $providerCode;
    }

    public function getProviderCode(){
        return $this->providerCode;
    }
            
    private $goodsList;
                                        
    public function setGoodsList($goodsList){
        $size = count($goodsList);
        for ($i=0; $i<$size; $i++){
            $goodsList [$i] = $goodsList [$i] ->getInstance();
        }
        $this->params['goodsList'] = $goodsList;
    }
                                    
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $collectRemark;
    
    public function setCollectRemark($collectRemark){
        $this->params['collectRemark'] = $collectRemark;
    }

    public function getCollectRemark(){
        return $this->collectRemark;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $receiveTimeType;
    
    public function setReceiveTimeType($receiveTimeType){
        $this->params['receiveTimeType'] = $receiveTimeType;
    }

    public function getReceiveTimeType(){
        return $this->receiveTimeType;
    }
            
    private $vendorCode;
    
    public function setVendorCode($vendorCode){
        $this->params['vendorCode'] = $vendorCode;
    }

    public function getVendorCode(){
        return $this->vendorCode;
    }
            
    private $expressPayMethod;
    
    public function setExpressPayMethod($expressPayMethod){
        $this->params['expressPayMethod'] = $expressPayMethod;
    }

    public function getExpressPayMethod(){
        return $this->expressPayMethod;
    }
            
    private $salePlatform;
    
    public function setSalePlatform($salePlatform){
        $this->params['salePlatform'] = $salePlatform;
    }

    public function getSalePlatform(){
        return $this->salePlatform;
    }
            
    private $payType;
    
    public function setPayType($payType){
        $this->params['payType'] = $payType;
    }

    public function getPayType(){
        return $this->payType;
    }
            
    private $needGuarantee;
    
    public function setNeedGuarantee($needGuarantee){
        $this->params['needGuarantee'] = $needGuarantee;
    }

    public function getNeedGuarantee(){
        return $this->needGuarantee;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $providerId;
    
    public function setProviderId($providerId){
        $this->params['providerId'] = $providerId;
    }

    public function getProviderId(){
        return $this->providerId;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $goodsName;
    
    public function setGoodsName($goodsName){
        $this->params['goodsName'] = $goodsName;
    }

    public function getGoodsName(){
        return $this->goodsName;
    }
            
    private $expressType;
    
    public function setExpressType($expressType){
        $this->params['expressType'] = $expressType;
    }

    public function getExpressType(){
        return $this->expressType;
    }
            
    private $waybillCount;
    
    public function setWaybillCount($waybillCount){
        $this->params['waybillCount'] = $waybillCount;
    }

    public function getWaybillCount(){
        return $this->waybillCount;
    }
            
    private $weight;
    
    public function setWeight($weight){
        $this->params['weight'] = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
            
    private $settlementCode;
    
    public function setSettlementCode($settlementCode){
        $this->params['settlementCode'] = $settlementCode;
    }

    public function getSettlementCode(){
        return $this->settlementCode;
    }
            
    private $shouldPayMoney;
    
    public function setShouldPayMoney($shouldPayMoney){
        $this->params['shouldPayMoney'] = $shouldPayMoney;
    }

    public function getShouldPayMoney(){
        return $this->shouldPayMoney;
    }
            
    private $isDocall;
    
    public function setIsDocall($isDocall){
        $this->params['isDocall'] = $isDocall;
    }

    public function getIsDocall(){
        return $this->isDocall;
    }
            
    private $branchCode;
    
    public function setBranchCode($branchCode){
        $this->params['branchCode'] = $branchCode;
    }

    public function getBranchCode(){
        return $this->branchCode;
    }
            
    private $volume;
    
    public function setVolume($volume){
        $this->params['volume'] = $volume;
    }

    public function getVolume(){
        return $this->volume;
    }
            
    private $guaranteeMoney;
    
    public function setGuaranteeMoney($guaranteeMoney){
        $this->params['guaranteeMoney'] = $guaranteeMoney;
    }

    public function getGuaranteeMoney(){
        return $this->guaranteeMoney;
    }
            
    private $vendorOrderCode;
    
    public function setVendorOrderCode($vendorOrderCode){
        $this->params['vendorOrderCode'] = $vendorOrderCode;
    }

    public function getVendorOrderCode(){
        return $this->vendorOrderCode;
    }
            
    private $platformOrderNo;
    
    public function setPlatformOrderNo($platformOrderNo){
        $this->params['platformOrderNo'] = $platformOrderNo;
    }

    public function getPlatformOrderNo(){
        return $this->platformOrderNo;
    }
            
    private $childMotherOrder;
    
    public function setChildMotherOrder($childMotherOrder){
        $this->params['childMotherOrder'] = $childMotherOrder;
    }

    public function getChildMotherOrder(){
        return $this->childMotherOrder;
    }
            
    private $serviceList;
                                        
    public function setServiceList($serviceList){
        $size = count($serviceList);
        for ($i=0; $i<$size; $i++){
            $serviceList [$i] = $serviceList [$i] ->getInstance();
        }
        $this->params['serviceList'] = $serviceList;
    }
                                    
            
    private $productList;
                                        
    public function setProductList($productList){
        $size = count($productList);
        for ($i=0; $i<$size; $i++){
            $productList [$i] = $productList [$i] ->getInstance();
        }
        $this->params['productList'] = $productList;
    }
                                    
            
    private $toAddress;
            
    public function setToAddress($toAddress){
        $this->params['toAddress'] = $toAddress ->getInstance();
    }
        
            
    private $fromAddress;
            
    public function setFromAddress($fromAddress){
        $this->params['fromAddress'] = $fromAddress ->getInstance();
    }
        
            
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $open_id_seller;
    
    public function setOpen_id_seller($open_id_seller){
        $this->params['open_id_seller'] = $open_id_seller;
    }

    public function getOpen_id_seller(){
        return $this->open_id_seller;
    }
            
    private $xid_seller;
    
    public function setXid_seller($xid_seller){
        $this->params['xid_seller'] = $xid_seller;
    }

    public function getXid_seller(){
        return $this->xid_seller;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>