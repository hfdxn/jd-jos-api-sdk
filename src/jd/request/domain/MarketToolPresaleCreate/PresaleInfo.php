<?php
namespace MarketToolPresaleCreate;
class PresaleInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.market.tool.presale.api.domain.PresaleInfo";
    }
        
    private $isShowOnHandPrice;
    
    public function setIsShowOnHandPrice($isShowOnHandPrice){
        $this->params['isShowOnHandPrice'] = $isShowOnHandPrice;
    }

    public function getIsShowOnHandPrice(){
        return $this->isShowOnHandPrice;
    }
            
    private $shipTime;
    
    public function setShipTime($shipTime){
        $this->params['shipTime'] = $shipTime;
    }

    public function getShipTime(){
        return $this->shipTime;
    }
            
    private $mergePay;
    
    public function setMergePay($mergePay){
        $this->params['mergePay'] = $mergePay;
    }

    public function getMergePay(){
        return $this->mergePay;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $operType;
    
    public function setOperType($operType){
        $this->params['operType'] = $operType;
    }

    public function getOperType(){
        return $this->operType;
    }
            
    private $busiPlatform;
            
    public function setBusiPlatform($busiPlatform){
        $this->params['busiPlatform'] = $busiPlatform ->getInstance();
    }
        
            
    private $payType;
    
    public function setPayType($payType){
        $this->params['payType'] = $payType;
    }

    public function getPayType(){
        return $this->payType;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $doNotDisturb;
    
    public function setDoNotDisturb($doNotDisturb){
        $this->params['doNotDisturb'] = $doNotDisturb;
    }

    public function getDoNotDisturb(){
        return $this->doNotDisturb;
    }
            
    private $presaleEndTime;
    
    public function setPresaleEndTime($presaleEndTime){
        $this->params['presaleEndTime'] = $presaleEndTime;
    }

    public function getPresaleEndTime(){
        return $this->presaleEndTime;
    }
            
    private $preShowTag;
    
    public function setPreShowTag($preShowTag){
        $this->params['preShowTag'] = $preShowTag;
    }

    public function getPreShowTag(){
        return $this->preShowTag;
    }
            
    private $discountType;
    
    public function setDiscountType($discountType){
        $this->params['discountType'] = $discountType;
    }

    public function getDiscountType(){
        return $this->discountType;
    }
            
    private $spotPresale;
    
    public function setSpotPresale($spotPresale){
        $this->params['spotPresale'] = $spotPresale;
    }

    public function getSpotPresale(){
        return $this->spotPresale;
    }
            
    private $memberInfo;
            
    public function setMemberInfo($memberInfo){
        $this->params['memberInfo'] = $memberInfo ->getInstance();
    }
        
            
    private $presaleSkus;
                                        
    public function setPresaleSkus($presaleSkus){
        $size = count($presaleSkus);
        for ($i=0; $i<$size; $i++){
            $presaleSkus [$i] = $presaleSkus [$i] ->getInstance();
        }
        $this->params['presaleSkus'] = $presaleSkus;
    }
                                    
            
    private $presaleStartTime;
    
    public function setPresaleStartTime($presaleStartTime){
        $this->params['presaleStartTime'] = $presaleStartTime;
    }

    public function getPresaleStartTime(){
        return $this->presaleStartTime;
    }
            
    private $hidePrice;
    
    public function setHidePrice($hidePrice){
        $this->params['hidePrice'] = $hidePrice;
    }

    public function getHidePrice(){
        return $this->hidePrice;
    }
            
    private $balanceStartTime;
    
    public function setBalanceStartTime($balanceStartTime){
        $this->params['balanceStartTime'] = $balanceStartTime;
    }

    public function getBalanceStartTime(){
        return $this->balanceStartTime;
    }
            
    private $presaleName;
    
    public function setPresaleName($presaleName){
        $this->params['presaleName'] = $presaleName;
    }

    public function getPresaleName(){
        return $this->presaleName;
    }
            
    private $preHeatStartTime;
    
    public function setPreHeatStartTime($preHeatStartTime){
        $this->params['preHeatStartTime'] = $preHeatStartTime;
    }

    public function getPreHeatStartTime(){
        return $this->preHeatStartTime;
    }
            
    private $balanceHours;
    
    public function setBalanceHours($balanceHours){
        $this->params['balanceHours'] = $balanceHours;
    }

    public function getBalanceHours(){
        return $this->balanceHours;
    }
            
    private $extMap;
            
    public function setExtMap($extMap){
        $this->params['extMap'] = $extMap ->getInstance();
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