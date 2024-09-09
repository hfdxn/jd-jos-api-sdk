<?php

namespace JdJos\jd\request\domain\AICheckBillServiceSubmitAICheckBillRealtime;
class OrderInfovalue{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdi.gyl.sdk.dto.aicheckbill.OrderInfo";
    }
        
    private $bizOrderId;
    
    public function setBizOrderId($bizOrderId){
        $this->params['bizOrderId'] = $bizOrderId;
    }

    public function getBizOrderId(){
        return $this->bizOrderId;
    }
            
    private $imageUrls;
                                        
    public function setImageUrls($imageUrls){
        $size = count($imageUrls);
        for ($i=0; $i<$size; $i++){
            $imageUrls [$i] = $imageUrls [$i] ->getInstance();
        }
        $this->params['imageUrls'] = $imageUrls;
    }
                                    
            
    private $bizOrderIdType;
    
    public function setBizOrderIdType($bizOrderIdType){
        $this->params['bizOrderIdType'] = $bizOrderIdType;
    }

    public function getBizOrderIdType(){
        return $this->bizOrderIdType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>