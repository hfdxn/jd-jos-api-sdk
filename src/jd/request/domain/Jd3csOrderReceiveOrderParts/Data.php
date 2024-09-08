<?php
namespace Jd3csOrderReceiveOrderParts;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jd3cs.performance.domain.params.OrderPartsParam";
    }
        
    private $orderPartList;
                                        
    public function setOrderPartList($orderPartList){
        $size = count($orderPartList);
        for ($i=0; $i<$size; $i++){
            $orderPartList [$i] = $orderPartList [$i] ->getInstance();
        }
        $this->params['orderPartList'] = $orderPartList;
    }
                                    
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>