<?php
namespace WeighingSaleOrderBatchSubmit;
class NsspOrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.nss.produce.sdk.prod.write.req.NsspOrderReq";
    }
        
    private $skuList;
                                        
    public function setSkuList($skuList){
        $size = count($skuList);
        for ($i=0; $i<$size; $i++){
            $skuList [$i] = $skuList [$i] ->getInstance();
        }
        $this->params['skuList'] = $skuList;
    }
                                    
            
    private $thirdNsspId;
    
    public function setThirdNsspId($thirdNsspId){
        $this->params['thirdNsspId'] = $thirdNsspId;
    }

    public function getThirdNsspId(){
        return $this->thirdNsspId;
    }
            
    private $buyerPin;
    
    public function setBuyerPin($buyerPin){
        $this->params['buyerPin'] = $buyerPin;
    }

    public function getBuyerPin(){
        return $this->buyerPin;
    }
            
    private $classifyType;
    
    public function setClassifyType($classifyType){
        $this->params['classifyType'] = $classifyType;
    }

    public function getClassifyType(){
        return $this->classifyType;
    }
            
    private $jdOrderId;
    
    public function setJdOrderId($jdOrderId){
        $this->params['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId(){
        return $this->jdOrderId;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $nsspSource;
    
    public function setNsspSource($nsspSource){
        $this->params['nsspSource'] = $nsspSource;
    }

    public function getNsspSource(){
        return $this->nsspSource;
    }
            
    private $open_id_buyer;
    
    public function setOpen_id_buyer($open_id_buyer){
        $this->params['open_id_buyer'] = $open_id_buyer;
    }

    public function getOpen_id_buyer(){
        return $this->open_id_buyer;
    }
            
    private $xid_buyer;
    
    public function setXid_buyer($xid_buyer){
        $this->params['xid_buyer'] = $xid_buyer;
    }

    public function getXid_buyer(){
        return $this->xid_buyer;
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