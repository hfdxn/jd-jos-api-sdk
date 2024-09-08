<?php
namespace FinanceBillingBillingdetailQueryBillingDetailInfos;
class QueryBillingDetailInfoMo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jsp.snapshot.spi.query.domain.QueryBillingDetailInfoMo";
    }
        
    private $querySource;
    
    public function setQuerySource($querySource){
        $this->params['querySource'] = $querySource;
    }

    public function getQuerySource(){
        return $this->querySource;
    }
            
    private $settleEntityId;
    
    public function setSettleEntityId($settleEntityId){
        $this->params['settleEntityId'] = $settleEntityId;
    }

    public function getSettleEntityId(){
        return $this->settleEntityId;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $billType;
    
    public function setBillType($billType){
        $this->params['billType'] = $billType;
    }

    public function getBillType(){
        return $this->billType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>