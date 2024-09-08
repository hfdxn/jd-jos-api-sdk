<?php
namespace Jd3csOrderSyncElectronicBill;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.ElectronicBillParam";
    }
        
    private $chargeFlag;
    
    public function setChargeFlag($chargeFlag){
        $this->params['chargeFlag'] = $chargeFlag;
    }

    public function getChargeFlag(){
        return $this->chargeFlag;
    }
            
    private $preferentialAmount;
    
    public function setPreferentialAmount($preferentialAmount){
        $this->params['preferentialAmount'] = $preferentialAmount;
    }

    public function getPreferentialAmount(){
        return $this->preferentialAmount;
    }
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $flag;
    
    public function setFlag($flag){
        $this->params['flag'] = $flag;
    }

    public function getFlag(){
        return $this->flag;
    }
            
    private $payTime;
    
    public function setPayTime($payTime){
        $this->params['payTime'] = $payTime;
    }

    public function getPayTime(){
        return $this->payTime;
    }
            
    private $preferentialList;
                                        
    public function setPreferentialList($preferentialList){
        $size = count($preferentialList);
        for ($i=0; $i<$size; $i++){
            $preferentialList [$i] = $preferentialList [$i] ->getInstance();
        }
        $this->params['preferentialList'] = $preferentialList;
    }
                                    
            
    private $subtotalAmount;
    
    public function setSubtotalAmount($subtotalAmount){
        $this->params['subtotalAmount'] = $subtotalAmount;
    }

    public function getSubtotalAmount(){
        return $this->subtotalAmount;
    }
            
    private $orderState;
    
    public function setOrderState($orderState){
        $this->params['orderState'] = $orderState;
    }

    public function getOrderState(){
        return $this->orderState;
    }
            
    private $orderDetailList;
                                        
    public function setOrderDetailList($orderDetailList){
        $size = count($orderDetailList);
        for ($i=0; $i<$size; $i++){
            $orderDetailList [$i] = $orderDetailList [$i] ->getInstance();
        }
        $this->params['orderDetailList'] = $orderDetailList;
    }
                                    
            
    private $orderTime;
    
    public function setOrderTime($orderTime){
        $this->params['orderTime'] = $orderTime;
    }

    public function getOrderTime(){
        return $this->orderTime;
    }
            
    private $actuallyPayAmount;
    
    public function setActuallyPayAmount($actuallyPayAmount){
        $this->params['actuallyPayAmount'] = $actuallyPayAmount;
    }

    public function getActuallyPayAmount(){
        return $this->actuallyPayAmount;
    }
            
    private $payTimeStr;
    
    public function setPayTimeStr($payTimeStr){
        $this->params['payTimeStr'] = $payTimeStr;
    }

    public function getPayTimeStr(){
        return $this->payTimeStr;
    }
            
    private $orderTimeStr;
    
    public function setOrderTimeStr($orderTimeStr){
        $this->params['orderTimeStr'] = $orderTimeStr;
    }

    public function getOrderTimeStr(){
        return $this->orderTimeStr;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>